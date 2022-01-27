<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="CSS/style.quizz.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>quizz</title>
    </head>
    <body>
        
        <?php
            try
            {
                // On se connecte à MySQL
                $mydb = new PDO('mysql:host=localhost;dbname=wekeeptrack;charset=utf8','root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
            }
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }

            ?>
    
    
            <?php
            
            $username=$_SESSION['username'];
            $argstatement = $mydb->prepare('SELECT * FROM persons where username=:username');
            $argstatement->execute(array('username'=>$username));
            $arguments = $argstatement->fetchAll();
            if ($arguments[0]['admin']=="yes"){
                include("header.admin.php");
            }elseif ($arguments[0]['manager']=="yes"){
                include("header.manager.php");
            }else{
                include("header.user.php");
            }
            
        
            ?> 
            
            
        
        <h2 id="question">When did the idea of a nature reserve begin?</h2>
        <div id="formulaire">
            <div class="background1" onclick="click1()"><p class="answer1">medieval times</p></div>
            <div class="background2" onclick="click2()"><p class="answer2">16th century</p></div>
            <div class="background3" onclick="click3()"><p class="answer3">18th century</p></div>
            <div class="background4" onclick="click4()"><p class="answer4">19th century</p></div>
            <div class="background5" onclick="click5()"><p class="answer5"></p></div>
            <div class="background6" onclick="click6()"><p class="answer6"></p></div>
        </div>
        <p id="correction"></p>
        <div id="footer">
            <h3 id="confirm" onclick="confirmclicked()">confirm</h3>
            <h4 id="score"></h4>
            <h3 id="button" onclick="buttonclicked()">next</h3>
            

        </div>
    </body>
</html>
<script src="Javascript/quizz.js"></script>
