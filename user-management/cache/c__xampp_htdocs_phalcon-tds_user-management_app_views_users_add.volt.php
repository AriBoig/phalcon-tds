
<h1>Ajout d'utilisateur</h1>
<div style="margin-left: 2%;">
<button><i class="add user icon"></i><?= $this->tag->linkTo(['../user-management/users', 'retour à la liste']) ?> </button>
</div>
<form method="post" class="ui equal width form" style="width: 90%; margin-left: 5%;">
    <div class="fields">
        <div class="field">
            <label>Prénom</label>
            <input type="text" name="prenom" placeholder="Prénom"/>
        </div>
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Nom"/>
        </div>
    </div>
    <div class="fields">
        <div class="field">
            <label>Login</label>
            <input type="text" name="login" placeholder="Login" />
        </div>
        <div class="field">
            <label>Mot de passe</label>
            <input type="password" name="mdp" placeholder="Mot de passe"/>
        </div>
    </div>
    <div class="fields">
        <div class="field">
            <label>Mail</label>
            <input type="text" name="mail" placeholder="mail"/>
        </div>
        <div class="field">
        <label>Rôle</label>
            <select class="ui fluid dropdown" name="idrole">
                <?php foreach ($roles as $role) { ?>
                <option value="<?= $role->id ?>"><?= $role->name ?></option>
                <?php } ?>
        </select>
        </div>
    </div>
    <button class="ui positive button" name="submit" type="submit">Valider</button>
</form>
