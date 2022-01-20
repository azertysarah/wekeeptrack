<?php
session_start();

require("src/connection.php");
 
	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){
 
		// VARIABLE
 
		$username		= $_POST['username'];
		$email			= $_POST['email'];
		$password		= $_POST['password'];
		$pass_confirm 	= $_POST['password_confirm'];
        
		
		// TEST SI password = password_confirm
 
		if($password != $pass_confirm){
				header('Location: add.user.manager?error=1&pass=1');
					exit();
 
		}
 
		// TEST SI Email UTILISE
		$req = $db->prepare("SELECT count(*) as numberEmail FROM persons WHERE email = ?");
		$req->execute(array($email));
 
		while($Email_verification = $req->fetch()){
			if($Email_verification['numberEmail'] != 0) {
				header('location: add.user.manager.php?error=1&Email=1');
				exit();
 			}
		}
 
		// HASH
 		$secret = sha1($email).time();
		$secret = sha1($secret).time().time();
		
		// CRYPTAGE DU password
 		$password = "aq1".sha1($password."1854")."26";
 
		// ENVOI DE LA REQUETE
		
 		$req = $db->prepare("INSERT INTO persons(username,password,email,creation_date,secret) VALUES(?,?,?,NOW(),?)") or die ($db->errorInfo());
		$req->execute(array($username, $password, $email, $secret));
			echo 'send';
			
		header('location: add.user.manager.php?success=1');
		exit();
 	}	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.manage.css" />
        <title>manage managers account</title>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="bloc_page">
            <!--header pour toutes les pages-->
            <div id="top">
                <img id="fond" src="photo/filigrane.2.png"  >
                <div id="logo">
                    <img src="photo/logo.png">
                    
                </div>
                <div id="logotext">
                    <div id="logo2">
                        <img  src="photo/facebook.1.png" >
                        <img  src="photo/insta.1.png">
                        <img src="photo/linkedin.1.png">
                        <img src="photo/twitter.1.png">
                    </div>
                
                    <p>Keep track of us</p>
                </div> 
            </div>
            <!--header pour manager-->	
            <header><!--crée les liens pour aller aux autres pages-->
                <h2 ><a href="all.the.animals.1.html"> All the animals</a></h2>
                <h2 ><a href="map.manager.html">Map </a></h2>
                <h2 ><a href="manage.user.manager.html"> Manage</a></h2>
                <h2><a href="quizz.html">Quizz</a></h2>
                <h2><a href="faq.manager.html"> Q&A</a></h2>
                <h2 class="more" onmouseenter="sizechange()" onmouseleave="sizereturn()">
                    <a> More</a>
                    <a id="moretext1" ></a>
                    <a id="moretext2" ></a>
                    <a id="moretext3" ></a>
                </h2>
                
            </header>
            
            <!--fin header-->
            
        	
        
		<div class="container">
        <h1 class="titre">Add an account<h1>
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
			<div id="form">
				<form method="POST" action="add.user.manager.php" autocomplete="off">
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
							<td>Confirm the password</td>
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
<script src="Javascript/site.js"></script>