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
    $argstatement = $arg2->prepare('SELECT * FROM animal');
    $argstatement->execute();
    $arguments = $argstatement->fetchAll();

    
    foreach ($arguments as $argument) {
        
        
        
        
        echo $argument[$arg1]; 
        if ($arg1=="name"){
            ?>
            <button><a href='graphfinal.php'>graphique</a></button>
            <?php
        
            

        }
            
            
        
         
        ?>
        </br>
        <?php
    }
    }
    

    



?>