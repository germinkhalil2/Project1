<?php
require __DIR__ . '/includes/data.php';
$pageTitle  = 'Home';
$activePage = 'home';
require __DIR__ . '/includes/header.php';

// Featured artifacts by id
$featuredIds = [3, 5, 9];
$featured    = array_values(array_filter($artifacts, fn($a) => in_array($a['id'], $featuredIds, true)));
?>

<section class="hero">
    <div class="hero__inner">
        <div class="hero__eyebrow">A Digital Archive of Italian Cultural Heritage</div>
        <h1 class="hero__title">Italia Through Time</h1>
        <p class="hero__lede">
            From the founding myths of Ancient Rome to the design objects of the twentieth century,
            explore searchable artifacts, monuments, and artworks that trace the story of Italy
            across five historical eras.
        </p>
        <div class="hero__actions">
            <a href="gallery.php" class="btn btn--primary">Browse the Gallery</a>
            <a href="timeline.php" class="btn btn--ghost">View the Timeline</a>
        </div>
    </div>
    <div class="hero__plate" style="background-image:url('images/site/ancientItalia.jpg')" aria-hidden="true">
        <span class="hero__plate-label">Five Eras of Italian History</span>
    </div>
</section>

<section class="section section--intro">
    <div class="section__inner section__inner--narrow">
        <h2 class="section__heading">About This Archive</h2>
        <p>
            Italia Through Time collects artifacts, architecture, and artworks spanning more than
            two and a half thousand years of Italian history. Every entry in the catalog is tagged
            to one of five historical eras and can be searched or filtered by category — architecture,
            sculpture, painting, mosaic, textile, and design. The archive is built for students,
            educators, and anyone curious about how Italy's material culture reflects its history.
        </p>
    </div>
</section>

<section class="section section--featured">
    <div class="section__inner">
        <div class="section__header">
            <h2 class="section__heading">Featured Artifacts</h2>
            <a href="gallery.php" class="section__link">View full gallery &rarr;</a>
        </div>
        <div class="artifact-grid">
            <?php foreach ($featured as $art): ?>
                <?php require __DIR__ . '/includes/artifact-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section--timeline-preview">
    <div class="section__inner">
        <div class="section__header">
            <h2 class="section__heading">Five Eras of History</h2>
            <a href="timeline.php" class="section__link">View full timeline &rarr;</a>
        </div>
        <ol class="era-strip">
            <?php foreach ($timeline as $era): ?>
                <li class="era-strip__item">
                    <span class="era-strip__numeral"><?= htmlspecialchars($era['numeral']) ?></span>
                    <span class="era-strip__title"><?= htmlspecialchars($era['title']) ?></span>
                    <span class="era-strip__dates"><?= htmlspecialchars($era['dates']) ?></span>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>