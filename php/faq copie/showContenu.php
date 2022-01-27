<?php 
require('models/database.php');

    //Vérifier l'ID de la question dans l'URL
    if(isset($_GET['id']) AND !empty($_GET['id'])){

        //Récupérer l'identifiant de la question
        $idQuestion = $_GET['id'];

        //Vérifier si la question existe
        $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id_question = ?');
        $checkIfQuestionExists->execute(array($idQuestion));

        //Si la question existe
        if($checkIfQuestionExists->rowCount() > 0){

            //Récupération des données liées à la question
            $questionInfos = $checkIfQuestionExists->fetch();
            
            //Stockage des données
            $question_topic = $questionInfos['topic'];
            $question_question = $questionInfos['question'];
            $question_id_author = $questionInfos['id_author'];
            $question_username_author = $questionInfos['username_author'];
            $question_date = $questionInfos['date'];

        }else{
            $errorMsg = "No question has been found...";
        }

    }else{
        $errorMsg = "No question has been found...";
    }
?>