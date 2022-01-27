<?php
require('models/database.php');

//Récupérer les données dans la table answers de l'ID de la question dans l'URL
$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_author, username_author, id_question, answer FROM answers WHERE id_question =?');
$getAllAnswersOfThisQuestion->execute(array($_GET['id']));