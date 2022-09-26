<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page <?= $category->{'name'} ?></h1>
</div>

<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <span class="card-title"><?= $category->{'name'} ?></span>
                <p><?= $category->{'description'} ?></p>
            </div>
            <div class="card-action">
                <a href="<?= $router->generate('category-load', ['id' => $category->{'id_category'} ]); ?>">Editer</a>
                <a href="<?= $router->generate('category-delete', ['id' => $category->{'id_category'} ]); ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ceci ?!`)">Supprimer</a>
            </div>
        </div>
    </div>
</div>

