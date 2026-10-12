<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($site['tagline']); ?>">
  <title><?= htmlspecialchars($site['name']); ?> | <?= htmlspecialchars($pageTitle ?? 'Growth Systems'); ?></title>
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Instrument+Serif:ital@0;1&family=Work+Sans:wght@400;500;600;700&family=DM+Mono:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <script src="/assets/js/main.js" defer></script>
</head>
<body>
  <header>
    <div class="wrap header-inner">
      <a href="/index.php" class="brand" aria-label="Aarna Systems home">
        <span class="brand-mark" aria-hidden="true"></span>
        <?= htmlspecialchars($site['name']); ?>
      </a>

      <nav aria-label="Main navigation">
        <?php foreach ($nav as $label => $url): ?>
          <a href="<?= htmlspecialchars($url); ?>"><?= htmlspecialchars($label); ?></a>
        <?php endforeach; ?>
      </nav>

      <a href="/pages/contact.php" class="btn">Book A Call</a>
    </div>
  </header>

  <main>
