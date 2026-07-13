<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Italia Through Time';
}
if (!isset($activePage)) {
    $activePage = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Italia Through Time</title>
    <meta name="description" content="A digital archive of Italian cultural heritage — artifacts, architecture, and art spanning Ancient Rome to Modern Italy.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="site-header__inner">
        <a href="index.php" class="brand">
            <span class="brand__mark">IT</span>
            <span class="brand__text">
                <span class="brand__title">Italia Through Time</span>
                <span class="brand__subtitle">A Cultural Heritage Archive</span>
            </span>
        </a>
        <nav class="site-nav" aria-label="Primary">
            <ul>
                <li><a href="index.php"    class="<?= $activePage === 'home'     ? 'is-active' : '' ?>">Home</a></li>
                <li><a href="gallery.php"  class="<?= $activePage === 'gallery'  ? 'is-active' : '' ?>">Gallery</a></li>
                <li><a href="timeline.php" class="<?= $activePage === 'timeline' ? 'is-active' : '' ?>">Timeline</a></li>
                <li><a href="contact.php"  class="<?= $activePage === 'contact'  ? 'is-active' : '' ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main id="main">
