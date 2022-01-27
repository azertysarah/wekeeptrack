<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'views/head.php'?>

<body>
    <?php include 'views/navbar/navbar.admin.php'; ?>
    <br>
    <h3>Questions:</h2>
    <br>
    <?php require('show.all.questions.php'); ?>
    <br>
    <a id="publishQuestion" name="black" href="publish.question.php">Publish my question</a>
</body>
</html>