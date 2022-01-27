<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="CSS/style.map.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>carte</title>
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
            
            <div class="graph">
                <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.3873971046537!2d2.0765346151953366!3d48.69807601993584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e42aa9a7039bf3%3A0xdd38b7b15eace6fd!2sR%C3%A9serve%20naturelle%20r%C3%A9gionale%20du%20val%20et%20coteau%20de%20Saint-R%C3%A9my!5e0!3m2!1sfr!2sfr!4v1641916310193!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </figure>
                <h1>Map of the stressful areas</h1>
            </div>
            
        </div>
    </body>
</html>