<?php
session_start()

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.contact.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>contact</title>
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
           
            <div class=title><!--crée les titres-->
                <h2> Your Manager's emails</h2> 
                <h2>Administrator emails</h2>
            </div>
            <div id="boite">
                <?php include '../controler/contact.2.php'?>
                <!--crée une boite manager-->
                <div class="manager">
                    
                    <div id="photo">
                        <?php
                        
                        $photo='profile_picture';
                        get_contact_manager($photo,$mydb);
                        ?>
                    </div>
                    <div id="nom">
                        <?php
                        $name='username';
                        get_contact_manager($name,$mydb);
                        ?>
                    </div>
                    <div id="email">
                        <?php
                        $email='email';
                        get_contact_manager($email,$mydb);
                        ?>
                    </div>

                </div>
                <div class="administrator">

                <!--crée une boite admin-->  
                    <div id="photo">
                        <?php
                        
                        $photo='profile_picture';
                        get_contact_admin($photo,$mydb);
                        ?>
                    </div>
                    <div id="nom">
                        
                    <?php
                        
                        $name='username';
                        get_contact_admin($name,$mydb);
                        ?>
                    </div>
                    <div id="email">
                        <?php
                        $email='email';
                        get_contact_admin($email,$mydb);
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
<script src="Javascript/site.js"></script>
