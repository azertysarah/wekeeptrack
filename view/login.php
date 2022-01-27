<?php
session_start();

if(isset($_SESSION['connect'])){
	header('location: accueil.admin.php');
	exit();
}

require('../modele/connection.php');

// CONNEXION
if(!empty($_POST['username']) && !empty($_POST['password'])){

	// VARIABLES
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$error		= 1;

	// CRYPTER LE PASSWORD
	$password = "aq1".sha1($password."1854")."26";

	echo $password;

	$req = $db->prepare('SELECT * FROM persons WHERE username = ?');
	$req->execute(array($username));

	while($user = $req->fetch()){

        if($password == $user['password']){

			$error = 0;
			$_SESSION['connect'] = 1;
			$_SESSION['username']= $user['username'];

			if(isset($_POST['connect'])) {
				setcookie('log', $user['secret'], time() + 365*24*3600, '/', null, false, true);
			}

			header('location:login.php?success=1');
			exit();
		}

	}

	if($error == 1){
		header('location: login.php?error=1');
		exit();
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Log into your account</title>
	<link rel= "stylesheet" type= "text/css" href = "CSS/style.login.css"/>
	<link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/3FtzBbD/wepreserv.png"/>
</head>
<body>
	<header>
		<h1> Log in</h1>
	</header>
	
	<div class="container">
		<center><img src="https://i.ibb.co/3FtzBbD/wepreserv.png" height="300px" width="300px" alt="Logo wepreserv"/></center>
		
		<?php
			if(isset($_GET['error'])){
				
				if(isset($_GET['pass'])) {
					echo '<p id="error"> Password is not correct.</p>';
				}
				else if(isset($_GET['success'])){
				echo'<p id="success">You are now connected.</p>';
				}
			}
		?>
		<div id="form">
			<form method="POST" action="login.php">
				<table>
					<tr>
						<td><label>Username</label></td>
						<td><input type = "text" name = "username" placeholder = 'Fox' required></td>
					</tr>
					<tr>
						<td><label>Password</label></td>
						<td><input type = "password" name = "password" placeholder = '*******' required></td>
					</tr>
					</table>	
					<p><label><input type="checkbox" name="connect" >Automatic login</label></p>
					<input value="Login" type = "submit" name = "submit"> 
				</table>
			</form>
		</div>
	</div>
	<footer>
	<center><p><a href ="mailto:"> To sign up :</a>  write a mail to the administrator</p></center>
	</footer>
</body>
</html>