<?php
/**
 * Displays a single artifact card.
 * Used by the gallery and artifact pages.
 */
$withLightbox = $withLightbox ?? false;
$era          = findEra($timeline, $art['period']);
$catNo        = 'INV. ' . str_pad((string) $art['id'], 4, '0', STR_PAD_LEFT);
?>
<article class="artifact-card">
    <?php if ($withLightbox): ?>
        <a href="#lightbox-<?= (int) $art['id'] ?>" class="artifact-card__image" style="background-image:url('<?= htmlspecialchars($art['image']) ?>')">
            <span class="artifact-card__catalog"><?= htmlspecialchars($catNo) ?></span>
            <span class="artifact-card__enlarge">Enlarge</span>
        </a>
    <?php else: ?>
        <a href="artifact.php?id=<?= (int) $art['id'] ?>" class="artifact-card__image" style="background-image:url('<?= htmlspecialchars($art['image']) ?>')">
            <span class="artifact-card__catalog"><?= htmlspecialchars($catNo) ?></span>
        </a>
    <?php endif; ?>

    <div class="artifact-card__body">
        <span class="artifact-card__category"><?= htmlspecialchars($categories[$art['cat']] ?? $art['cat']) ?></span>
        <h3 class="artifact-card__name"><a href="artifact.php?id=<?= (int) $art['id'] ?>"><?= htmlspecialchars($art['name']) ?></a></h3>
        <p class="artifact-card__summary"><?= htmlspecialchars($art['summary']) ?></p>
        <p class="artifact-card__meta">
            <?= htmlspecialchars($art['location']) ?>
            <?php if ($era): ?>
                &nbsp;&middot;&nbsp; Era <?= htmlspecialchars($era['numeral']) ?>: <?= htmlspecialchars($era['title']) ?>
            <?php endif; ?>
        </p>
    </div>
</article>

<?php if ($withLightbox): ?>
<div class="lightbox" id="lightbox-<?= (int) $art['id'] ?>">
    <a href="#" class="lightbox__scrim" aria-label="Close enlarged image"></a>
    <figure class="lightbox__frame">
        <a href="#" class="lightbox__close" aria-label="Close enlarged image">&times;<span class="sr-only">Close</span></a>
        <div class="lightbox__image" style="background-image:url('<?= htmlspecialchars($art['image']) ?>')"></div>
        <figcaption class="lightbox__caption">
            <strong><?= htmlspecialchars($art['name']) ?></strong> &mdash; <?= htmlspecialchars($art['location']) ?>
        </figcaption>
    </figure>
</div>
<?php endif; ?>
