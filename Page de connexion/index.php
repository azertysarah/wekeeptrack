<?php
	session_start();

require("src/connection.php");
 
	if(!empty($_POST['Username']) && !empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['Password_confirm'])){
 
		// VARIABLE
 
		$Username     = $_POST['Username'];
		$Email        = $_POST['Email'];
		$password     = $_POST['Password'];
		$pass_confirm = $_POST['Password_confirm'];
 
		// TEST SI password = password_confirm
 
		if($password != $pass_confirm){
				header('Location: index.php?error=1&pass=1');
					exit();
 
		}
 
		// TEST SI Email UTILISE
		$req = $db->prepare("SELECT count(*) as numberEmail FROM persons WHERE Email = ?");
		$req->execute(array($Email));
 
		while($Email_verification = $req->fetch()){
			if($Email_verification['numberEmail'] != 0) {
				header('location: index.php?error=1&Email=1');
				exit();
 			}
		}
 
		// HASH
 		$secret = sha1($Email).time();
		$secret = sha1($secret).time().time();
 
		// CRYPTAGE DU password
 		$password = "aq1".sha1($password."1854")."26";
 
		// ENVOI DE LA REQUETE
 		$req = $db->prepare("INSERT INTO persons(Username,password,Email,Creation_Date,Secret) VALUES(?,?,?,NOW(),?)") or die ($db->errorInfo());
		$req->execute(array($Username, $password, $Email, $secret));
			echo 'send';
			
		header('location: index.php?success=1');
		exit();
 	}	
?>
<?php
		if(!isset($_SESSION['connect'])){ ?>
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
<?php } else { ?>
		
		<p id="info">
			Hello <?= $_SESSION['Username'] ?><br>
			<a href="disconnection.php">disconnection</a>
		</p>

<?php } ?>

<DOCTYPE html>
<html>
	<head>
		<meta charset = 'UTF-8'>
		<title> Registration </title>
		<link rel="stylesheet" type="text/css" href="design/style.css"/>
		<link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/3FtzBbD/wepreserv.png"/>
	</head>
	<body>
	<header>
		<h1>Registration</h1>
	</header>

	<div class="container">
	<center><img src="https://i.ibb.co/3FtzBbD/wepreserv.png" height="300px" width="300px" alt="Logo wepreserv"/></center>

		

		<p id="info">Welcome on our website, register yourself. If not, <a href="login.php">Login.</a></p>

	
	 
	 	<div id="form">
			<form method="POST" action="index.php" autocomplete="off">
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="Username" id="Username"placeholder="Ex : Rodrigue" autocomplete="off" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="Email" name="Email" id="Email" placeholder="Ex : example@google.com" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="Password" id="Password" placeholder="Ex : ********" required ></td>
					</tr>
					<tr>
						<td>Confirm your password</td>
						<td><input type="password" name="Password_confirm" id="Password_confirm" placeholder="Ex : ********" required></td>
					</tr>
				</table>
				<div id="button">
					<button type='submit'>Register</button>
				</div>
			</form>
		</div>
	</div>
	</body>
</html>