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
                <a href="#">Editer</a>
                <a href="#">Supprimer</a>
            </div>
        </div>
    </div>
</div>

