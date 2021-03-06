<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.contact.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>Contact</title>
    </head>
    <body>
        
        
        <!--header pour toutes les page des manager-->
        <div id="bloc_page">
            <nav>
            	<figure><!--fait apparaitre le logo-->
            		<img class="logo" onmouseenter="logochange()" onmouseleave="logoback()" src="logo.3.png" height="80px" width="80px"alt="Logo wepreserv"/>
            	</figure>
                <ul><!--crée les liens pour aller aux autres pages-->
                    <li class="choix1"><a href="alltheanimals"> All the animals</a></li>
                    <li class="choix2"><a href="map.manager.html">Map of the stressfull areas</a></li>
                    <li class="choix3"><a href="manage.manager.html"> Manage users acount</a></li>
                    <li class="choix4"><a href="quizz.html">Quizz</a></li>
                    <li class="choix5"><a href="faq-manager.html"> Q&A</a></li>
                </ul>
            </nav>
            <!-- fin header--><div class=title><!--crée les titres-->
                <h2> Your Manager's emails</h2> 
                <h2>Administrator emails</h2>
            </div>
            <div id="boite">
                <!--les contacts seront dans la base de donnés il faut connecter au php-->
                <!--crée une boite manager-->
                <div class="manager">
                    <!--pour l'instant juste des exemple car il faut connecter a la database-->
                    <div class="person">
                        <!--crée une boite pour chaque profil-->
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                    <div class="person">
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                    <div class="person">
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                </div>
                <div class="administrator">
                <!--crée une boite admin-->    
                    <div class="person">
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                    <div class="person">
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                    <div class="person">
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                    <div class="person">
                        <img src="photo.png" height="60px" width="60px">
                        <p>Laetitia de Boisanger</p>
                        <p class="mail">laetitia02boisanger@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="site.js"></script>
