<?php
session_start();

if(isset($_SESSION['connect'])){
	header('location: index.php');
	exit();
}

require('src/connection.php');

// CONNEXION
if(!empty($_POST['username']) && !empty($_POST['password'])){

	// VARIABLES
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$error		= 1;

	// CRYPTER LE PASSWORD
	$password = "aq1".sha1($password."1254")."25";

	echo $password;

	$req = $db->prepare('SELECT * FROM log_account WHERE username = ?');
	$req->execute(array($username));

	while($user = $req->fetch()){

		if($password == $user['password']){
			$error = 0;
			$_SESSION['connect'] = 1;
			$_SESSION['username']= $user['username'];

			if(isset($_POST['connect'])) {
				setcookie('log', $user['secret'], time() + 365*24*3600, '/', null, false, true);
			}

			header('location: connection.php?success=1');
			exit();
		}

	}

	if($error == 1){
		header('location: connection.php?error=1');
		exit();
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Log into your account</title>
	<link rel= "stylesheet" type= "text/css" href = "design/style.css"/>
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
				echo'<p id="success">You are connected.</p>';
				}
			}
		?>
		<div id="form">
			<form method="POST" action="login.php">
				<table>
					<tr>
						<td><label>Username</label></td>
						<td><input type = "text" name = "username" placeholder = 'Fox'></td>
					</tr>
					<tr>
						<td><label>Password</label></td>
						<td><input type = "password" name = "password" placeholder = '*******'></td>
					</tr>
					</table>	
					<button type = "submit" name = "submit"> Login</button>
				</table>
			</form>
		</div>
	</div>
	<footer>
	<center><p><a href ="mailto:"> To sign up :</a>  write a mail to the administrator</p></center>
	</footer>
</body>
</html>