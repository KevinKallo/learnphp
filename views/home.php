<?php include __DIR__ . '/partials/Header.php'; ?>
<div class="container">
    <div class="columns is-multiline">
        <?php foreach ($articles as $article) : ?>
            <div class="column is-3">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?= $article->title ?>
                        </p>

                    </header>
                    <div class="card-content">
                        <div class="content">
                            <?= $article->body ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>