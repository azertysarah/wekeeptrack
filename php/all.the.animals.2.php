<?php
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.alltheanimals.css" />
          </head>
    <body>
        <div id="bloc_page">
            <!--header pour toutes les pages d'user-->
            <nav>
                <figure><!--fait apparaitre le logo-->
                    <img class="logo" onmouseenter="logochange()" onmouseleave="logoback()" src="logo.mini.png" height="80px" width="80px"alt="Logo wepreserv"/>
                </figure>
                <ul><!--crée les liens pour aller aux autres pages-->
                    <li class="choix1"><a href="alltheanimals.php"> All the animals</a></li>
                    <li class="choix2"><a href="map-manager.php">Map of the stressfull areas</a></li>
                    <li class="choix3"><a href="manage.user.manager.php"> Manage users acount</a></li>
                    <li class="choix4"><a href="quizz.php">Quizz</a></li>
                    <li class="choix5"><a href="faq.manager.php"> Q&A</a></li>
                </ul>
            </nav>
        </div> 
        <div class="body">
            <div class="information">
                <div class="about1">
                    <h1>About the animal</h1>
                    <p>Animal name:<strong></strong></p>
                    <p>Animal species:<strong></strong></p>
                </div>
                <div class="about2">
                    <h1>About the sensors</h1>
                    <h2>GPS sensor</h2>
                    <p>Reference:<stong></stong></p>
                    <p>Status:<strong></strong></p>
                    <h2>Cardiac sensor</h2>
                    <p>Reference:<stong></stong></p>
                    <p>Status:<strong></strong></p>
                </div>
            </div>
            <div class="graph">
                <figure>
                    <img src="graph.PNG" height="422px" width="614px">
                </figure>
                <h1>Heart rate of the aniaml in the last 24 hours</h1>
            </div>
        </div>   

           

    </body>
</html>
<script src="site.js"></script>
