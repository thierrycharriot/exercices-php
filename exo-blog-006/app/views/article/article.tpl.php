<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page article <?= $article->{'id_article'} ?></h1>
</div>

<div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?= $article->{'title'} ?></span>
                    <p><?= $article->{'content'} ?></p>
                    <p>Date: <?= $article->{'created_at'} ?></p>
                </div>
                <div class="card-action">
                    <a href="<?= $router->generate('article-author', ['id' => $article->{'id_author'} ]); ?>">Author</a>
                    <a href="<?= $router->generate('article-category', ['id' => $article->{'id_category'} ]); ?>">Category</a>
                    <a href="<?= $router->generate('article-load', ['id' => $article->{'id_article'} ]); ?>">Editer</a>
                    <a href="<?= $router->generate('article-delete', ['id' => $article->{'id_article'} ]); ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ceci ?!`)">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>
