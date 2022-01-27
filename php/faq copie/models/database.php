<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=test933;charset=utf8;','root','root');
    
}catch(Exception $e){
    die('Error: '.$e->getMessage());
}