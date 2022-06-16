<?php
session_start();
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



function get_contact_manager($arg1,$arg2){
    $username=$_SESSION['username'];
    $argstatement = $arg2->prepare('SELECT * FROM persons where username=:username');
    $argstatement->execute(array('username'=>$username));
    $arguments = $argstatement->fetchAll();
    $id=$arguments[0]["id_person"];

    $argstatement = $arg2->prepare('SELECT * FROM animal where id_person=:id ');
    $argstatement->execute(['id'=>$id,]);
    $arguments = $argstatement->fetchAll();

    
    foreach ($arguments as $argument) {
        echo $argument[$arg1]; 
        ?>
        </br>
        <?php
    
    }
    
}


?>