<?php require ('registration.action.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <?php include ('views/head.php'); ?>
<body>

    <form method="POST">
        <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
        <?php if(isset($sucessMsg)){echo '<p>'.$sucessMsg.'</p>';}?>
        <div>
            <label>Username: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Email: </label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Association: </label>
            <input type="text" name="association">
        </div>
        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Verify your password: </label>
            <input type="password" name="password2">
        </div>
        <button type="submit" name="validate">Register</button>
        <br>
        <a name="black" href="connection.php">I already have an account, I sign up</a>
    </form>

</body>
</html>