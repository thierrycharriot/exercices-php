<div class="col s12 m12">
    <h1 class="header center green-text">Je suis la page author edit!</h1>
</div>

<div class="row">
    <form class="col s12" action="" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input id="firstname" name="firstname" type="text" class="validate" value="<?= $author->{'firstname'} ?>">
                <label for="firstname">FirstName</label>
            </div>
            
            <div class="input-field col s12">
                <input id="lastname" name="lastname" type="text" class="validate" value="<?= $author->{'lastname'} ?>">
                <label for="lastname">LastName</label>
            </div>

            <div class="input-field col s12">
                <input id="pseudo" name="pseudo" type="text" class="validate" value="<?= $author->{'pseudo'} ?>">
                <label for="pseudo">Pseudo</label>
            </div>

            <div class="input-field col s12">
                <input id="mail" name="mail" type="text" class="validate" value="<?= $author->{'mail'} ?>">
                <label for="mail">Mail</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
    </form>
</div>