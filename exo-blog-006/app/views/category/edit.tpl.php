<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page category edit!</h1>
</div>

<div class="row">
    <form class="col s12" action="" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input id="name" name="name" type="text" class="validate" value="<?= $category->{'name'} ?>">
                <label for="name">Name</label>
            </div>
            
            <div class="input-field col s12">
                <textarea id="description" name="description" class="materialize-textarea"><?= $category->{'description'} ?></textarea>
                <label for="description">Description</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
    </form>
</div>