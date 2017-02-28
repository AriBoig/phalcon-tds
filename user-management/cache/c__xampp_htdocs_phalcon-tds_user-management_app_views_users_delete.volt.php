
<h1>Utilisateur  <?= $user->getFirstName() ?> <?= $user->getLastName() ?> supprimé </h1>
<div style="margin-left: 2%;">
    <button><i class="add user icon"></i><?= $this->tag->linkTo(['../user-management/users', 'retour à la liste']) ?> </button>
</div>
