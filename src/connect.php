<?php
session_start();

require("connection.php");
 
	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){
 
		// VARIABLE
 
		$username		= $_POST['username'];
		$email			= $_POST['email'];
		$password		= $_POST['password'];
		$pass_confirm 	= $_POST['password_confirm'];
		$admin			="yes";
		// TEST SI password = password_confirm
 
		if($password != $pass_confirm){
				header('Location: connect.php?error=1&pass=1');
					exit();
 
		}
 
		// TEST SI Email UTILISE
		$req = $db->prepare("SELECT count(*) as numberEmail FROM persons WHERE email = ?");
		$req->execute(array($email));
 
		while($Email_verification = $req->fetch()){
			if($Email_verification['numberEmail'] != 0) {
				header('location: connect.php?error=1&Email=1');
				exit();
 			}
		}
 
		// HASH
 		$secret = sha1($email).time();
		$secret = sha1($secret).time().time();
		
		// CRYPTAGE DU password
 		$password = "aq1".sha1($password."1854")."26";
 
		// ENVOI DE LA REQUETE
		
 		$req = $db->prepare("INSERT INTO persons(username,password,email,creation_date,secret,admin) VALUES(?,?,?,NOW(),?,?)") or die ($db->errorInfo());
		$req->execute(array($username, $password, $email, $secret,$admin));
			echo 'send';
			
		header('location: connect.php?success=1');
		exit();
 	}	
?>

<DOCTYPE html>
<html>
	<head>
		<meta charset = 'UTF-8'>
		<title> Registration </title>
		<link rel="stylesheet" type="text/css" href="CSS/style.login.css"/>
		<link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/3FtzBbD/wepreserv.png"/>
	</head>
	<body>
	<header>
		<h1>Registration</h1>
	</header>

		<div class="container">
		<center><img src="https://i.ibb.co/3FtzBbD/wepreserv.png" height="300px" width="300px" alt="Logo wepreserv"/></center>
			<?php
			if(!isset($_SESSION['connect'])){ ?>

			<p id="info">Welcome on our website, register yourself. If not, <a href="login.php">Login.</a></p>
			<?php
			 
			if(isset($_GET['error'])){
					 
				if(isset($_GET['pass'])){
					echo '<p id="error">passwords do not match.</p>';
				}
				else if(isset($_GET['Email'])){
					echo '<p id="error">This Email address is already in use.</p>';
				}
			}
				else if(isset($_GET['success'])){
					echo '<p id="success">Registration correctly taken into account.</p>';
				}
			?>
			<div id="form">
				<form method="POST" action="connect.php" autocomplete="off">
					<table>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" id="username"placeholder="Ex : Rodrigue" autocomplete="off" required></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="Email" name="email" id="email" placeholder="Ex : example@google.com" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" id="password" placeholder="Ex : ********" required ></td>
						</tr>
						<tr>
							<td>Confirm your password</td>
							<td><input type="password" name="password_confirm" id="password_confirm" placeholder="Ex : ********" required></td>
						</tr>
					</table>
					<div id="button">
						<button type='submit'>Register</button>
					</div>
				</form>
			</div>
		</div>
	<?php } else { ?>
		
		<p id="info">
			Hello <?= $_SESSION['username'] ?><br>
			<a href="disconnection.php">Log off</a>
		</p>

		<?php } ?>
	</body>
</html>