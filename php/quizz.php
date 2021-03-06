<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.quizz.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>Quizz</title>
    </head>
    <body>
        <div id="topsection">
            <header>
                
                <h1>Quizz</h1>
            </header>
            <figure><!--fait apparaitre le logo-->
                <a href="accueil.user.html">   <img class="logo" onmouseenter="logochange()" onmouseleave="logoback()" src="logo.png" height="100px" width="100px"alt="Logo wepreserv"/></a>
            </figure>
        </div>
        <h2 id="question">when did the idea of a nature reserve begin</h2>
        <div id="formulaire">
            <div class="background1" onclick="click1()"><p class="answer1">medieval times</p></div>
            <div class="background2" onclick="click2()"><p class="answer2">16th century</p></div>
            <div class="background3" onclick="click3()"><p class="answer3">18th century</p></div>
            <div class="background4" onclick="click4()"><p class="answer4">19th century</p></div>
            <div class="background5" onclick="click5()"><p class="answer5"></p></div>
            <div class="background6" onclick="click6()"><p class="answer6"></p></div>
        </div>
        <p id="correction"></p>
        <div id="footer">
            <h3 id="confirm" onclick="confirmclicked()">confirm</h3>
            <h4 id="score"></h4>
            <h3 id="button" onclick="buttonclicked()">next</h3>
            

        </div>
    </body>
</html>
<script src="quizz.js"></script>
