<?php
require __DIR__ . '/includes/data.php';
$pageTitle  = 'Historical Timeline';
$activePage = 'timeline';
require __DIR__ . '/includes/header.php';
?>

<section class="page-intro">
    <div class="page-intro__inner">
        <h1 class="page-intro__title">Historical Timeline</h1>
        <p class="page-intro__lede">
            Italian history divides into five broad eras. Each one shaped the artifacts in the
            gallery — follow the line below to see how they connect.
        </p>
    </div>
</section>

<section class="section section--timeline">
    <div class="section__inner section__inner--narrow">
        <ol class="timeline">
            <?php foreach ($timeline as $era): ?>
                <?php
                $eraArtifacts = array_values(array_filter($artifacts, fn($a) => $a['period'] === $era['slug']));
                ?>
                <li class="timeline__item" id="era-<?= htmlspecialchars($era['slug']) ?>">
                    <div class="timeline__marker">
                        <span class="timeline__numeral"><?= htmlspecialchars($era['numeral']) ?></span>
                    </div>
                    <div class="timeline__card">
                        <span class="timeline__dates"><?= htmlspecialchars($era['dates']) ?></span>
                        <h2 class="timeline__title"><?= htmlspecialchars($era['title']) ?></h2>
                        <p class="timeline__description"><?= htmlspecialchars($era['description']) ?></p>

                        <?php if (!empty($eraArtifacts)): ?>
                            <ul class="timeline__artifacts">
                                <?php foreach ($eraArtifacts as $a): ?>
                                    <li>
                                        <a href="artifact.php?id=<?= (int) $a['id'] ?>">
                                            <?= htmlspecialchars($a['name']) ?>
                                        </a>
                                        <span class="timeline__artifact-cat"><?= htmlspecialchars($categories[$a['cat']] ?? $a['cat']) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
