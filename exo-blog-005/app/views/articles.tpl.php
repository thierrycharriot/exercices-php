<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page articles!</h1>
</div>

<?php foreach ($articles as $key => $article): ?>
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?= $article->{'title'} ?></span>
                    <p><?= substr($article->{'content'}, 0, 120) ?>***</p>
                    <p>Date: <?= $article->{'created_at'} ?></p>
                </div>
                <div class="card-action">
                    <a href="<?= $router->generate('article-article', ['id' => $article->{'id_article'} ]); ?>">Lire la suite</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>