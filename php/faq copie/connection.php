<?php require ('connection.action.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <?php include ('views/head.php'); ?>
<body>

    <form method="POST">
        <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
        <div>
            <label>Username: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="validate">Confirm</button>
        <br>
        <a name="black" href="registration.php">I don't have an account, I register myself</a>
    </form>

</body>
</html>