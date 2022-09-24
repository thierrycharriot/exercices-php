<div class="col s9 m9">
    <h1 class="header center green-text"><?= $category->getName() ?></h1>
    <?php //var_dump($categories); //die(); ?>

    <?php foreach($items as $id => $item): ?>
        <?php //echo '<pre>'; var_dump($item); echo '</pre>'; //die(); ?>
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                    <span class="card-title"><?= $item->getTitle() ?></span>
                    <?php
                    /**
                     * https://www.php.net/manual/fr/function.substr.php
                     * substr — Retourne un segment de chaîne
                     */
                    ?>
                    <p><?= substr($item->getContent(), 0, 120) ?>...</p>
                    </div>
                    <div class="card-action">
                    <a href="index.php?page=article&id=<?= $id; ?>">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
