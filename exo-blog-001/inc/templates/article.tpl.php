<div class="col s9 m9">
    <h1 class="header center green-text">Article</h1>
    <?php //var_dump($article); //die(); ?>

    <div class="row">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?= $article->getTitle() ?></span>
                    <p><?= $article->getContent() ?></p>
                    <br><br>
                    <p>Date: <?= $article->getDate() ?></p>
                </div>
                <div class="card-action">
                    <a href="index.php?page=author&id=<?= $id ?>"><?= $article->getAuthor() ?></a>
                    <a href="index.php?page=category&id=<?= $id ?>"><?= $article->getCategory() ?></a>
                </div>
            </div>
        </div>
    </div>
</div>