<?php

session_start();
require('models/database.php');

//On vérifie que l'utilisateur a appuyé sur le bouton 'confirm'
if(isset($_POST['validate'])){

    //On vérifie que les champs ne sont pas vides
    if(!empty($_POST['username']) AND !empty($_POST['password'])){
        
        //Sécurité
        $username = htmlspecialchars($_POST['username']); //Pas de balises HTML
        $password = htmlspecialchars($_POST['password']);     
        
        //On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT * FROM persons WHERE username = ?');
        $check->execute(array($username));

        if($check->rowCount() > 0){ //Si l'utilisateur existe
            
            //Récupération des données de l'utilisateur
            $info = $check->fetch();

            //Vérification du mdp
            if(password_verify($password, $info['password'])){
                    
                //Authentification des utilisateurs, pour qu'il reste connecter à son compte sur chaque page du site
                $_SESSION['auth'] = true;
                $_SESSION['id_person'] = $info['id_person'];
                $_SESSION['username'] = $info['username'];
                $_SESSION['email'] = $info['email'];
                $_SESSION['association'] = $info['association'];

                //Redirection vers la page d'accueil
                header('Location: index.php');

            }else{ //Mauvais mot de passe
                $errorMsg = "Wrong password...";
            }
        }
        }else{ //Si l'utilisateur existe
            $errorMsg = "This person is already registered";
        }
    }else{
        $errorMsg = "Please complete all fields...";
    }