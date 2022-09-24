<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page categories!</h1>
</div>

<?php foreach ($categories as $key => $category): ?>
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?= $category->{'name'} ?></span>
                </div>
                <div class="card-action">
                    <a href="<?= $router->generate('category-category', ['id' => $category->{'id_category'} ]); ?>"">Category</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>