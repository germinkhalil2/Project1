<?php
require __DIR__ . '/includes/data.php';
$pageTitle  = 'Artifact Gallery';
$activePage = 'gallery';

$selectedCat = htmlspecialchars($_GET['cat'] ?? 'all', ENT_QUOTES);
$query       = htmlspecialchars(trim($_GET['q'] ?? ''), ENT_QUOTES);

$results = array_filter($artifacts, function ($art) use ($selectedCat, $query) {
    $matchesCat = ($selectedCat === 'all' || $art['cat'] === $selectedCat);
    $matchesQ   = ($query === '' || stripos($art['name'], $query) !== false || stripos($art['summary'], $query) !== false);
    return $matchesCat && $matchesQ;
});

require __DIR__ . '/includes/header.php';
?>

<section class="page-intro">
    <div class="page-intro__inner">
        <h1 class="page-intro__title">Artifact Gallery</h1>
        <p class="page-intro__lede">
            Search by name or filter by category to explore the full catalog.
            Click any artifact's image to view it enlarged.
        </p>
    </div>
</section>

<section class="section section--filter">
    <div class="section__inner">
        <form action="gallery.php" method="get" class="filter-form">
            <div class="filter-form__field filter-form__field--search">
                <label for="q">Search by name</label>
                <input type="text" id="q" name="q" placeholder="e.g. Colosseum, David, Vespa&hellip;" value="<?= $query ?>">
            </div>
            <div class="filter-form__field">
                <label for="cat">Category</label>
                <select id="cat" name="cat">
                    <option value="all" <?= $selectedCat === 'all' ? 'selected' : '' ?>>All Categories</option>
                    <?php foreach ($categories as $slug => $label): ?>
                        <option value="<?= htmlspecialchars($slug) ?>" <?= $selectedCat === $slug ? 'selected' : '' ?>>
                            <?= htmlspecialchars($label) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-form__field filter-form__field--submit">
                <button type="submit" class="btn btn--primary">Apply Filters</button>
                <?php if ($selectedCat !== 'all' || $query !== ''): ?>
                    <a href="gallery.php" class="filter-form__reset">Clear</a>
                <?php endif; ?>
            </div>
        </form>

        <p class="filter-results-count">
            <?= count($results) ?> artifact<?= count($results) === 1 ? '' : 's' ?> found
            <?php if ($selectedCat !== 'all'): ?> in <strong><?= htmlspecialchars($categories[$selectedCat] ?? $selectedCat) ?></strong><?php endif; ?>
            <?php if ($query !== ''): ?> matching &ldquo;<strong><?= $query ?></strong>&rdquo;<?php endif; ?>
        </p>
    </div>
</section>

<section class="section section--gallery">
    <div class="section__inner">
        <?php if (count($results) === 0): ?>
            <p class="empty-state">No artifacts match those filters. Try a different search term or category.</p>
        <?php else: ?>
            <div class="artifact-grid">
                <?php foreach ($results as $art): ?>
                    <?php $withLightbox = true; ?>
                    <?php require __DIR__ . '/includes/artifact-card.php'; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
