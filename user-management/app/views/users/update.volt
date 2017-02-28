
<h1>Modification d'utilisateur</h1>
<div style="margin-left: 2%;">
    <button><i class="add user icon"></i>{{ link_to("../user-management/users","retour à la liste") }} </button>
</div>
<div>
    <i class="info icon"></i> Message
    <p> Modification de {{user.getFirstName()}} {{user.getLastName()}}</p>
</div>
<form class="ui equal width form" style="width: 90%; margin-left: 5%;">
    <div class="fields">
        <div class="field">
            <label>Prénom</label>
            <input type="text" name="prenom" placeholder="Prénom" value="{{user.getFirstName()}}"/>
        </div>
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Nom" value="{{user.getLastName()}}"/>
        </div>
    </div>
    <div class="fields">
        <div class="field">
            <label>Login</label>
            <input type="text" name="login" placeholder="Login" value="{{user.getLogin()}}"/>
        </div>
        <div class="field">
            <label>Mot de passe</label>
            <input type="password" name="mdp" placeholder="Mot de passe" value="{{user.getPassword()}}"/>
        </div>
    </div>
    <div class="fields">
        <div class="field">
            <label>Mail</label>
            <input type="text" name="mail" placeholder="mail" value="{{user.getEmail()}}"/>
        </div>
        <div class="field">
            <label>Rôle</label>
            <select class="ui fluid dropdown">
                {% for role in roles %}
                <option value="{{role.id}}">{{ role.name }}</option>
                {% endfor %}
            </select>
        </div>
    </div>
    <button class="ui positive button" type="submit">Valider</button>
</form>
