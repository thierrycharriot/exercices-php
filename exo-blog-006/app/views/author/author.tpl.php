<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page <?= $author->{'pseudo'} ?></h1>
</div>

<div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?= $author->{'firstname'} ?> <?= $author->{'lastname'} ?></span>
                    <p><?= $author->{'pseudo'} ?></p>
                    <p><?= $author->{'mail'} ?></p>
                </div>
                <div class="card-action">
                    <a href="<?= $router->generate('author-load', ['id' => $author->{'id_author'} ]); ?>">Editer</a>
                    <a href="<?= $router->generate('author-delete', ['id' => $author->{'id_author'} ]); ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ceci ?!`)">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>

