<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="CSS/style.gcu.css" />
        
        <title>General condition of use</title>
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
        
        
        <ul>
            <li onclick="click1()">Article 1</li>
            <p class="article1"></p>
            <li onclick="click2()">Article 2</li>
            <p class="article2"></p>
            <li onclick="click3()">Article 3</li>
            <p class="article3"></p>
            <li onclick="click4()">Article 4</li>
            <p class="article4"></p>
        </ul>
    </body>
</html>
<script src="Javascript/gcu.js"></script>