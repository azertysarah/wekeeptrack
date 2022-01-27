<?php
session_start();
require('models/database.php');

//On vérifie que l'utilisateur a appuyé sur le bouton 'registration'
if(isset($_POST['validate'])){

    //On vérifie que les champs ne sont pas vides
    if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['association']) AND !empty($_POST['password']) AND!empty($_POST['password2'])){
        
        //Sécurité
        $username = htmlspecialchars($_POST['username']); //Pas de balises HTML
        $email = htmlspecialchars($_POST['email']);
        $email = strtolower($email); //Email en miniscules
        $association = htmlspecialchars($_POST['association']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);        
        
        //On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT username, email, association_name FROM persons WHERE email = ?');
        $check->execute(array($email));

        if($check->rowCount() == 0){ //Si l'utilisateur n'existe pas
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //Si l'email est de la bonne forme
                if($password === $password2){ //Si les deux mots de passes sont bien les mêmes

                    //Message de succèes pour l'utilisateur
                    $sucessMsg = "You have been successfully registered!";

                    //Sécurité: cryptage du mot de passe
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $password2 = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    //Insertion des données de l'utilisateur dans la BDD
                    $insert = $bdd->prepare('INSERT INTO persons(username, password, email, association)VALUES(?,?,?,?)');
                    $insert->execute(array($username, $password, $email, $association)); 
                    
                    //Authentification des utilisateurs, pour qu'il reste connecter à son compte sur chaque page du site
                        //Récupération des informations de l'utilisateur
                        $getInfo = $bdd->prepare('SELECT id_person, username, email, association FROM persons WHERE username=? AND email=? AND association=?');
                        $getInfo->execute(array($username, $email, $association));
                        
                        $info = $getInfo->fetch();
                    
                    $_SESSION['auth'] = true;
                    $_SESSION['id_person'] = $info['id_person'];
                    $_SESSION['username'] = $info['username'];
                    $_SESSION['email'] = $info['email'];
                    $_SESSION['association'] = $info['association'];

                    //Redirection vers la page d'accueil
                    header('Location: index.php');

                }else{ //Si les mots de passes sont différents
                    $errorMsg = "The passwords are different";
                }
            }else{ //Si l'adressse mail n'est pas dans le bon format
                $errorMsg = "Please enter a suitable email address";
            }
        }else{ //Si l'utilisateur existe
            $errorMsg = "This person is already registered";
        }
    }else{
        $errorMsg = "Please complete all fields...";
    }
}