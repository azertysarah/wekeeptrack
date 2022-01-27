<?php
require('controllers/security.php');
?>
<!DOCTYPE html>
<html>
<?php 
    include 'views/head.php';
    include 'views/navbar/navbar.admin.php';
?>
    <body>
    <div id="bottompart">
        <div id="info">
            <figure>
                <img class="img1" src="public/assets/elephant.6.jpeg"  alt="Photo de zebre" title="zebre" />
            </figure>
        </div>
        <div id="welcome">
            <p>Welcome back <strong><?php  echo $_SESSION['username']?></strong>!</p>
        </div>
    </body>

<?php include 'views/footer.php'; ?>
</html>
<script src="public/javascript/accueil.js"></script>