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
/*$username=$_SESSION['username'];
echo $username;
$asso = 'SELECT association_name FROM persons where username="$username"';*/


function get_contact_manager($arg1,$arg2){
    $argstatement = $arg2->prepare('SELECT * FROM persons where manager="yes" AND association_name="wwf"');
    $argstatement->execute();
    $arguments = $argstatement->fetchAll();

    
    foreach ($arguments as $argument) {
        echo $argument[$arg1]; 
        ?>
        </br>
        <?php
    
    }
    
}

function get_contact_admin($arg1,$arg2){
    $argstatement = $arg2->prepare('SELECT * FROM persons where admin="yes" ');
    $argstatement->execute();
    $arguments = $argstatement->fetchAll();

    
    foreach ($arguments as $argument) {
        echo $argument[$arg1]; 
        ?>
        </br>
        <?php
    
    }
    
}
?>
