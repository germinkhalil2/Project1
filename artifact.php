<?php
require __DIR__ . '/includes/data.php';

$id  = (int) ($_GET['id'] ?? 0);
$art = findArtifact($artifacts, $id);

// Validate the id exists 
if ($art === null) {
    $pageTitle  = 'Artifact Not Found';
    $activePage = 'gallery';
    require __DIR__ . '/includes/header.php';
    ?>
    <section class="page-intro">
        <div class="page-intro__inner">
            <h1 class="page-intro__title">Artifact Not Found</h1>
            <p class="page-intro__lede">
                We couldn't find an artifact with that catalog number. It may have been removed,
                or the link may be incorrect.
            </p>
            <a href="gallery.php" class="btn btn--primary">Return to the Gallery</a>
        </div>
    </section>
    <?php
    require __DIR__ . '/includes/footer.php';
    exit;
}

$era        = findEra($timeline, $art['period']);
$pageTitle  = $art['name'];
$activePage = 'gallery';
$catNo      = 'INV. ' . str_pad((string) $art['id'], 4, '0', STR_PAD_LEFT);

// Related artifacts
$related = array_values(array_filter($artifacts, fn($a) => $a['period'] === $art['period'] && $a['id'] !== $art['id']));
$related = array_slice($related, 0, 3);

require __DIR__ . '/includes/header.php';
?>

<section class="detail">
    <div class="detail__inner">
        <a href="gallery.php" class="detail__back">&larr; Back to Gallery</a>

        <div class="detail__grid">
            <div class="detail__image" style="background-image:url('<?= htmlspecialchars($art['image']) ?>')">
                <span class="detail__catalog"><?= htmlspecialchars($catNo) ?></span>
            </div>

            <div class="detail__body">
                <span class="artifact-card__category"><?= htmlspecialchars($categories[$art['cat']] ?? $art['cat']) ?></span>
                <h1 class="detail__title"><?= htmlspecialchars($art['name']) ?></h1>
                <p class="detail__location"><?= htmlspecialchars($art['location']) ?></p>

                <?php if ($era): ?>
                    <a href="timeline.php#era-<?= htmlspecialchars($era['slug']) ?>" class="detail__era-tag">
                        Era <?= htmlspecialchars($era['numeral']) ?>: <?= htmlspecialchars($era['title']) ?>
                        <span class="detail__era-dates">(<?= htmlspecialchars($era['dates']) ?>)</span>
                    </a>
                <?php endif; ?>

                <p class="detail__description"><?= htmlspecialchars($art['description']) ?></p>
            </div>
        </div>

        <?php if (!empty($related)): ?>
            <div class="detail__related">
                <h2 class="section__heading">More From This Era</h2>
                <div class="artifact-grid">
                    <?php foreach ($related as $art): ?>
                        <?php require __DIR__ . '/includes/artifact-card.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
