<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page article write!</h1>
</div>

<div class="row">
    <form class="col s12" action="" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input id="title" name="title" type="text" class="validate">
                <label for="title">Title</label>
            </div>
            
            <div class="input-field col s12">
                <textarea id="content" name="content" class="materialize-textarea"></textarea>
                <label for="content">Content</label>
            </div>

            <div class="input-field col s12">
                <select name="author">
                    <option value="" disabled selected>Choose your author</option>
                    <?php foreach ($authors as $key => $author): ?>
                        <option value="<?= $author->{'id_author'} ?>"><?= $author->{'pseudo'} ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="input-field col s12">
                <select name="category">
                    <option value="" disabled selected>Choose your category</option>
                    <?php foreach ($categories as $key => $category): ?>
                        <option value="<?= $category->{'id_category'} ?>"><?= $category->{'name'} ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
    </form>
</div>
        