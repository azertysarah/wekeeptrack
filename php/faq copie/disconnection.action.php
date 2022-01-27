<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: ../../views/connection/connection.php');