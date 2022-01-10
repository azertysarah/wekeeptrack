<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.manage.css" />
        <title>manage user account</title>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

    </head>
    <body>
        <!--header pour toutes les pages de manager-->
        <nav>
            <figure><!--fait apparaitre le logo-->
                <img class="logo" onmouseenter="logochange()" onmouseleave="logoback()" src="logo.3.png" height="80px" width="80px"alt="Logo wepreserv"/>
            </figure>
            <ul><!--crée les liens pour aller aux autres pages-->
                <li class="choix1"><a href="alltheanimals.html"> All the animals</a></li>
                <li class="choix2"><a href="map.manager.html">Map of the stressfull areas</a></li>
                <li class="choix3"><a href="manage.user.manager.html"> Manage users acount</a></li>
                <li class="choix4"><a href="quizz.html">Quizz</a></li>
                <li class="choix5"><a href="faq-manager.html"> Q&A</a></li>
            </ul>
        </nav>
        <!--fin header-->
        <div id="boite">
            <!--crée la boite "manage"-->
            <form method="post" action="traitement.php" class="manage">
                <h1>Create new account</h1><!--crée le titre-->
                <!--crée le label et l'input pour username-->
                <p> 
                    <label for="username">Username</label><input type="text" name="username" >
                </p> 
                <!--crée le label et l'input pour association-->
                <p>
                    <label for="association">Association</label><input type="text" name="username">
                </p>
                <!--crée le bouton qui génere un nouveau compte-->
                <h2>Generate account</h2>
            </form>
            <!--crée la boite "edit"-->
            <form method="post" action="traitement.php" class="edit">
                <h1>Edit account</h1><!--crée le titre-->
                <label for="site-search">Search the site:</label>
                <input type="search" id="site-search" name="q"aria-label="Search through site content">
                <button>Search</button>
                <!--crée le label et l'input pour username-->
                <p> 
                    <label for="username">Username</label><input type="text" name="username" >
                </p> 
                <!--crée le label et l'input pour association-->
                <p>
                    <label for="association">Association</label><input type="text" name="username">
                </p>
                
                
                <label for="animals">Animals:</label>
                <select name="animals" id="animals">
                    <option value="13B">13B</option> 
                </select>
                <h2 class="delete">Delete account</h2><!--crée le bouton qui supprime un compte-->
                <h2 class="confirm">Confirm</h2><!--crée le bouton qui edit un compte-->
            </div>
        </div>
    </body>
</html>
<script src="site.js"></script>
