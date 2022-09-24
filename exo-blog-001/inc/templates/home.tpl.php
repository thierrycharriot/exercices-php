<div class="col s9 m9">
    <h1 class="header center green-text">Articles List</h1>
    <?php //var_dump($articles); //die(); ?>

    <?php foreach($articles as $article_id => $article): ?>
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?= $article->getTitle() ?></span>
                        <?php
                        /**
                         * https://www.php.net/manual/fr/function.substr.php
                         * substr — Retourne un segment de chaîne
                         */
                        ?>
                        <p><?= substr($article->getContent(), 0, 120) ?>...</p>
                    </div>
                    <div class="card-action">
                        <a href="index.php?page=article&id=<?= $article_id; ?>">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>