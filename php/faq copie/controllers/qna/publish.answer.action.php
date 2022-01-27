<?php
require('models/database.php');

//Si on a appuyé sur le bouton "submit answer"
if(isset($_POST['validate'])){

    //Si une réponse a bien été remplie dans le formulaire
    if(!empty($_POST['answer'])){

        $answer = nl2br(htmlspecialchars($_POST['answer']));
 
        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_author, username_author, id_question, answer) VALUES (?,?,?,?)');
        $insertAnswer->execute(array($_SESSION['id_person'], $_SESSION['username'],$_GET['id'], $answer));

    }

}