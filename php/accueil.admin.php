<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.accueil.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>Page d'accueil d'admin</title>
    </head>
    <body>
        
                
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
            <!--header pour toute les pages d'admin-->
            <header><!--crée les liens pour aller aux autres pages-->
                <h2 onmouseenter="manage()" onmouseleave="manageback()" class="manage">
                    <a >Manage</a>
                    <a href="manage.manager.admin.php" id="manage1"></a>
                    <a href="add.manager.admin.php" id="manage2"></a>
                </h2>
                <h2 > <a Quizz href="quizz.html">Quizz</a></h2>
                <h2 ><a href="faq.admin.html"> Q&A</a></h2>
                <h2 class="more" onmouseenter="sizechange()" onmouseleave="sizereturn()">
                    <a> More</a>
                    <a id="moretext1" href="contact.admin.php" ></a>
                    <a id="moretext2" href="manage.account.admin.php" ></a>
                    <a id="moretext3" href="gcu.php"></a>
                </h2>
                            
            </header>
                        
            <!--fin header-->
            <div id="bottompart">
                <div id="info">
                    <figure>
                        <img class="img1" src="photo/elephant.6.jpeg"  alt="Photo de zebre" title="zebre" />
                    </figure>
                </div>
                <div id="welcome">
                    <p>welcome back <strong>indentifiant</strong></p>
                </div>
                    <footer>
                        <figure>
                            <div  onmouseenter="logochange1()" onmouseleave="logoback1()" onclick="textclick1()" >
                                <img   id="logoqm" src="photo/question-mark.png" >
                                <h1 id="text1">Why do we exist?</h1>
                                <p id="info1">Our corporation values the life of all animals and our goal, as well as the reason we exist is to allow associations worldwide to have access to a simple and intuitive solution to have significants data about the animals they want to protect.</p>                                </div>
                            <div  onmouseenter="logochange2()" onmouseleave="logoback2()" onclick="textclick2()" >
                                <img id="logohr"  src="photo/heartrate.png" >
                                <h1 id="text2">How do we work?</h1>
                                <p id="info2">The website is really beginner friendly, there are some buttons witch will lead you to differents locations. Our solution is composed of two sensors: a GPS and a heart sensor that will provide vital informations as well as locations to act in case of emergency. </p>
            
                            </div>
                            <div  onmouseenter="logochange3()" onmouseleave="logoback3()" onclick="textclick3()" >
                                <img id="logobio" src="photo/bio.png" >
                                <h1 id="text3">Who do we protect?</h1>
                                <p id="info3">>We want to protect all the animals equally, as long as they are bound to an ONG. There is no such thing as superiors or inferiors animals.</p>
            
                            </div>
                        </figure>
                    </footer>
                </div>
             
                   
    </body>
</html>
<script src="accueil.js"></script>
