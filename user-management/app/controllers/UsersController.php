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


    public function deleteAction($id){
        $user = User::findFirst($id);
        $this->view->setVar("user", $user);
        if ($user->delete() == false) {
            $msg = "Impossible de supprimer l'utilisateur \n";
            foreach ($user->getMessages() as $message) {
                $msg .= $message . "\n";
            }
            $this->view->setVar("Message", $msg);
        } else {
            $this->view->setVar("Message", "L'utilisateur a été supprimé");
        }
    }

    public function showAction($id){
        $role = Role::find();
        $this->view->setVar("roles", $role);

        $user = User::findFirst($id);
        $this->view->setVar("user", $user);
    }

    public function updateAction($id){
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
            if ($user->save() == false) {
                $msg = "Problème d'enregistrement \n";
                foreach ($user->getMessages() as $message) {
                    $msg .= $message . "\n";
                }
                $this->view->setVar("Message", $msg);
            } else {
                $this->view->setVar("Message", "Utilisateur modifié");
            }
        }
    }


}

