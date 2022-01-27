<?php
require('models/database.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['answer'])){
        $user_answer = nl2br(htmlspecialchars($_POST['answer'])),
        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_person, username, id_question, content) VALUES(?,?,?,?);');
        $insertAnswer->execute(array($_SESSTION['id'], $_SESSION['username'], $_GET['id'], $user_answer));
    }
}