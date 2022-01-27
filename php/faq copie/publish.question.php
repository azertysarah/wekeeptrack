<?php 
    require('controllers/security.php');
    require('controllers/qna/publish.question.control.php'); 
?> 

<!DOCTYPE html>
<html lang="en">
<?php include 'views/head.php'?>
<body>
    <?php include 'views/navbar/navbar.admin.php'; ?>
    <br><br>
    <form method="POST">
        
        <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
        <?php if(isset($sucessMsg)){echo '<p>'.$sucessMsg.'</p>';}?>
        <div>
            <h3>Question: </h3>
            <br>
            <textarea name="question"></textarea>
        </div>

        <button type="submit" name="validate">Submit your question</button>
    </form>
</body>
<html>
    