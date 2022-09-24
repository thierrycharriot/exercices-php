<div class="col s3 m3">

<h4 class="header center green-text">Authors List</h4>
<?php //var_dump($authors); //die(); ?>

<ul class="collection">
    <?php foreach($authors as $author_id => $author): ?>
        <a href="index.php?page=author&id=<?= $author_id; ?>" class="collection-item"><?= $author->getPseudo() ?></a>
    <?php endforeach; ?>
</ul>

<h4 class="header center green-text">Categories List</h4>

<?php //var_dump($categories); //die(); ?>

<ul class="collection">
    <?php foreach($categories as $category_id => $category): ?>
        <a href="index.php?page=category&id=<?= $category_id; ?>" class="collection-item"><?= $category->getName() ?></a>
    <?php endforeach; ?>
</ul>

