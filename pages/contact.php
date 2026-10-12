<?php
$pageTitle = 'Contact';
include __DIR__ . '/../includes/header.php';
?>
<section class="page-section">
  <div class="wrap contact-wrap">
    <div class="contact-panel">
      <div class="section-head">
        <p class="eyebrow">Contact</p>
        <h2>Let’s design the stack behind your next stage of growth.</h2>
      </div>
      <div class="contact-details">
        <div><p class="label">Email</p><p>hello@aarnasystems.com</p></div>
        <div><p class="label">Response time</p><p>Usually within 24 hours</p></div>
        <div><p class="label">Service area</p><p>US B2B companies and growth-stage teams</p></div>
      </div>
    </div>
    <div class="contact-panel">
      <form action="/api/contact.php" method="post" aria-label="Free GTM audit form">
        <div class="field"><label for="name">Name</label><input id="name" name="name" type="text" placeholder="Your name" required></div>
        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" placeholder="you@company.com" required></div>
        <div class="field"><label for="website">Website</label><input id="website" name="website" type="url" placeholder="https://yourcompany.com" required></div>
        <div class="field"><label for="crm">Current CRM</label><select id="crm" name="crm"><option value="">Select current CRM</option><option>GoHighLevel</option><option>HubSpot</option><option>Salesforce</option><option>Pipedrive</option><option>Not sure</option></select></div>
        <div class="field"><label for="message">What is your bottleneck?</label><textarea id="message" name="message" placeholder="Tell us what is not working in your sales funnel or CRM system."></textarea></div>
        <div class="submit-row"><button type="submit" class="btn">Request audit</button><span class="form-note">No spam. Just a real review.</span></div>
      </form>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
