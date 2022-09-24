<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page authors!</h1>
</div>

<?php foreach ($authors as $key => $author): ?>
    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?= $author->{'firstname'} ?> <?= $author->{'lastname'} ?></span>
                </div>
                <div class="card-action">
                    <a href="<?= $router->generate('author-author', ['id' => $author->{'id_author'} ]); ?>"">Author</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>