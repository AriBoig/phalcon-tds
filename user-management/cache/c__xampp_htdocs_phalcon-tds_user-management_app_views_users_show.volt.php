<h1>Information de l'utilisateur <?= $user->getFirstName() ?> <?= $user->getLastName() ?></h1>
<div style="margin-left: 2%;">
<button><i class="add user icon"></i><?= $this->tag->linkTo(['../user-management/users', 'retour à la liste']) ?> </button>
</div>
<div>

<table class="ui celled table" style="width: 90%;margin-left: 5%">
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Login</th>
        <th>Email</th>
        <th>Rôle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $user->getFirstname() ?></td>
        <td><?= $user->getLastname() ?></td>
        <td><?= $user->getLogin() ?></td>
        <td><?= $user->getEmail() ?></td>
        <td><?= $user->getRole()->getName() ?></td>
    </tr>
    </tbody>
</table>