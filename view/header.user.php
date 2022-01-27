<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="CSS/style.accueil.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>page d'accueil d'admin</title>
    </head>
    <body>

        <!--header pour toutes les pages d'user-->
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
        <header><!--crée les liens pour aller aux autres pages-->
            <h2 ><a href="my.animals.1.html"> My animals</a></h2>
            <h2 ><a href="map.php"> Map</a></h2>
            <h2 ><a href="quizz.php"> Quizz</a></h2>
            <h2 ><a href="faq.user.html"> Q&A</a></h2>
            <h2 class="more" onmouseenter="sizechange()" onmouseleave="sizereturn()">
                <a> More</a>
                <a id="moretext1"href="contact.php" ></a>
                <a id="moretext2" ></a>
                <a id="moretext3" href="gcu.php" ></a>
            </h2>
            <a id="deco" href="../modele/disconnection.php">Se déconnecter</a> 
            
        </header>

        <!--fin header-->
    </body>
</html>
<script src="Javascript/site.js"></script>