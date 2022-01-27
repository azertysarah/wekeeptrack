<?php
require('models/database.php');

//L'utilisateur appuie sur le bouton "Submit your question"
if(isset($_POST['validate'])){

    if(!empty($_POST['question'])){
        
        //Définition des variables
        $question = nl2br(htmlspecialchars($_POST['question'])); //nl2br pour permettre les retours à la ligne
        $question_date = date('d/m/Y');
        $question_id_author = $_SESSION['id_person'];
        $question_username_author = $_SESSION['username'];
        
        //Requête SQL
        $insertQuestion = $bdd->prepare('INSERT INTO questions(question, id_author, username_author, date)VALUES(?,?,?,?)');
        
        //Execution de la requête SQL
        $insertQuestion->execute(
            array(
                $question, 
                $question_id_author, 
                $question_username_author, 
                $question_date
            )
        );
        //Message de succès
        $sucessMsg = "Your question has been successfully published!";

    }else{
        $errorMsg = "Please complete all the fields...";
    }
}