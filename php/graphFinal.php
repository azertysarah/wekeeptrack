<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.accueil.css" />
    </head>

</body>
<body>
<!--header pour toutes les pages d'user-->
<div id="top">
    <img id="fond" src="assets/filigrane.2.png"  >
    <div id="logo">
        <img src="assets/logo.png">
        
    </div>
    <div id="logotext">
        <div id="logo2">
            <img  src="assets/facebook.1.png" >
            <img  src="assets/insta.1.png">
            <img src="assets/linkedin.1.png">
            <img src="assets/twitter.1.png">
        </div>
    
        <p>Keep track of us</p>
    </div> 
</div>	
<header><!--crée les liens pour aller aux autres pages-->
    <h2 ><a href="php/my.animals.1.php"> My animals</a></h2>
    <h2 ><a href="php/map.user.php"> Map</a></h2>
    <h2 ><a href="php/quizz.php"> Quizz</a></h2>
    <h2 ><a href="php/faq.user.php"> Q&A</a></h2>
    <h2 class="more" onmouseenter="sizechange()" onmouseleave="sizereturn()">
        <a> More</a>
        <a id="moretext1" ></a>
        <a id="moretext2" ></a>
        <a id="moretext3" ></a>
    </h2>
    
</header>

<!--fin header-->
 <?include 'graph.php';?>
</html>