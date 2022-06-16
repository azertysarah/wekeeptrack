<?php

//Sécurité: vérifier que l'utilisateur est authentifié
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../connection.php');
}

require('../../models/database.php');

//Vérifier si l'id est rentré en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id de la question en paramète
    $idQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT id FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    //Si la question existe
    if($checkIfQuestionExists->rowCount() > 0){

        //Supprimer la question en fonction de son id rentré en paramètre
        $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
        $deleteThisQuestion->execute(array($idOfTheQuestion));

    }else{
        echo "Aucune question n'a été trouvée";
    }


}else{
    echo "Aucune question n'a été trouvée";
}