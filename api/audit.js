// Vercel serverless function: receives the Free GTM Audit form and forwards it to GoHighLevel.
export default async function handler(req, res) {
  if (req.method !== "POST") return res.status(405).json({ error: "Method not allowed" });
  const b = req.body || {};
  if (b.hp) return res.status(200).json({ ok: true }); // honeypot: bots fill this field
  const { name = "", email = "", url = "", crm = "", utm = {}, page = "" } = b;
  if (!name.trim() || !/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email) || !url.trim())
    return res.status(400).json({ error: "Invalid fields" });
  if (!process.env.GHL_WEBHOOK_URL) return res.status(500).json({ error: "Webhook not configured" });
  try {
    const r = await fetch(process.env.GHL_WEBHOOK_URL, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        name: name.trim(), email: email.trim(), website: url.trim(), current_crm: crm,
        source: "website-audit-form", page,
        utm_source: utm.utm_source || "", utm_medium: utm.utm_medium || "",
        utm_campaign: utm.utm_campaign || "", utm_term: utm.utm_term || "", utm_content: utm.utm_content || ""
      })
    });
    return res.status(r.ok ? 200 : 502).json({ ok: r.ok });
  } catch (e) {
    return res.status(502).json({ error: "Upstream error" });
  }
}
