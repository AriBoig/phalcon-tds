<?php

class UsersController extends ControllerBase
{

    public function indexAction()
    {
        $users = User::find();
        $this->view->setVar("users", $users);
    }

    public function addAction(){
        $role = Role::find();
        $this->view->setVar("roles", $role);

        if(isset($_POST['submit'])){
            $user = new User();
            $user -> setFirstname($_POST['prenom']);
            $user -> setLastname($_POST['nom']);
            $user -> setEmail($_POST['mail']);
            $user -> setLogin($_POST['login']);
            $user -> setPassword($_POST['mdp']);
            $user -> setIdrole($_POST['idrole']);
            if($user -> save())
                $this->view->setVar("Message","Utilisateur ajouté");
            else
                $this->view->setVar("Message","Des données sont manquantes");
        }
    }


    public function deleteAction(){

    }

    public function showAction(){

    }

    public function updateAction($id = NULL){
        $role = Role::find();
        $this->view->setVar("roles", $role);

        $user = User::findFirst($id);
        $this->view->setVar("user", $user);


        if(isset($_POST['login'])&& isset($_POST['mail'])&& isset($_POST['mdp'])){
            $user -> setFirstname($_POST['prenom']);
            $user -> setLastname($_POST['nom']);
            $user -> setEmail($_POST['mail']);
            $user -> setLogin($_POST['login']);
            $user -> setPassword($_POST['mdp']);
            $user -> setIdrole($_POST['idRole']);
            if($user -> save())
                $this->view->setVar("Message","Utilisateur modifié");
            else
                $this->view->setVar("Message","Des choses sont manquantes");
        }
    }
}

