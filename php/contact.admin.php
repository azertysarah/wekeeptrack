<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.contact.css" />
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <title>contact</title>
    </head>
    <body>
        
        
        
        <!--header de toutes les pages d'administrateur-->
        <div id="bloc_page">
            <nav>
            	<figure><!--fait apparaitre le logo-->
            		<img class="logo" onmouseenter="logochange()" onmouseleave="logoback()" src="logo.3.png" height="80px" width="80px"alt="Logo wepreserv"/>
            	</figure>
                <ul><!--crée les liens pour aller aux autres pages-->
                    <li class="choix1"><a href="manage.manager.admin.html"> Manage managers account</a></li>
                    <li class="choix2"><a href="manage.user.admin.html"> Manage users account</a></li>
                    <li class="choix3"><a href="quizz.html"> Quizz</a></li>
                    <li class="choix4"><a href="faq-admin.html"> Q&A</a></li>
                </ul>
            </nav>
            <!--fin header-->
            <div class=title><!--crée les titres-->
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
