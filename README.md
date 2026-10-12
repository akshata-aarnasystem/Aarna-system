# Aarna Systems website

## Project structure

```text
aarna-site/
├── api/
│   ├── audit.js              # Vercel GoHighLevel contact webhook
│   └── contact.php          # PHP form handler for local/PHP hosting
├── assets/
│   ├── css/
│   │   └── styles.css        # Shared site styling
│   ├── images/
│   │   └── favicon.svg       # Fav icon
│   └── js/
│       └── main.js           # Front-end interactions
├── includes/
│   ├── config.php            # Site configuration and nav data
│   ├── header.php            # Shared page header
│   └── footer.php            # Shared page footer
├── pages/
│   ├── about.php             # About page
│   ├── contact.php           # Contact page and form
│   ├── pricing.php           # Packages and pricing
│   ├── resources.php         # Resource library page
│   └── services.php          # Services page
├── seo/
│   └── index.php             # SEO dedicated folder and landing page
├── index.php                 # Homepage
├── robots.txt                # SEO robot rules
├── sitemap.xml               # Sitemap entries
├── vercel.json               # Vercel config
├── README.md                 # Project overview
├── .gitignore                # Optional ignore rules
└── index.html                # Legacy fallback static page
```

## PHP structure notes
- The site is now organized into a reusable PHP include structure for a cleaner build.
- SEO is placed in its own dedicated `seo/` folder.
- Other main pages are organized separately under `pages/`.
- `index.php` is the main homepage for PHP hosting.

## Go-live checklist
1. Replace placeholder content with live business details.
2. Update `robots.txt` and `sitemap.xml` with your production domain.
3. Add your GoHighLevel webhook URL to the environment used by your hosting platform.
4. Deploy and verify the form submission works properly.
