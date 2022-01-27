<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="CSS/style.accueil.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>page d'accueil d'admin</title>
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
            
                        
            <div id="bottompart">
                <div id="info">
                    <figure>
                        <img class="img1" src="photo/elephant.6.jpeg"  alt="Photo de zebre" title="zebre" />
                    </figure>
                </div>
                <div id="welcome">
                    <p id="bonjour">welcome back <?php echo $_SESSION['username'] ?></p>
                </div>
                    <footer>
                        <figure>
                            <div  onmouseenter="logochange1()" onmouseleave="logoback1()" onclick="textclick1()" >
                                <img   id="logoqm" src="photo/question-mark.png" >
                                <h1 id="text1">Why do we exist?</h1>
                                <p id="info1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet turpis lectus, id pharetra turpis pulvinar sed. Nam et massa nulla. Vivamus ligula nunc, iaculis sed neque et, convallis bibendum felis. Nullam congue quam nec dapibus suscipit.</p>                                </div>
                            <div  onmouseenter="logochange2()" onmouseleave="logoback2()" onclick="textclick2()" >
                                <img id="logohr"  src="photo/heartrate.png" >
                                <h1 id="text2">How do we work?</h1>
                                <p id="info2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet turpis lectus, id pharetra turpis pulvinar sed. Nam et massa nulla. Vivamus ligula nunc, iaculis sed neque et, convallis bibendum felis. Nullam congue quam nec dapibus suscipit. </p>
            
                            </div>
                            <div  onmouseenter="logochange3()" onmouseleave="logoback3()" onclick="textclick3()" >
                                <img id="logobio" src="photo/bio.png" >
                                <h1 id="text3">Who do we protect?</h1>
                                <p id="info3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet turpis lectus, id pharetra turpis pulvinar sed. Nam et massa nulla. Vivamus ligula nunc, iaculis sed neque et, convallis bibendum felis. Nullam congue quam nec dapibus suscipit. </p>
            
                            </div>
                        </figure>
                    </footer>
                </div>
             
                   
    </body>
</html>
<script src="Javascript/accueil.js"></script>