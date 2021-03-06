<!--même code que pour 'manage-account-users.html' mais on rajoute l'adresse mail pour les admins et les managers et les headers sont différents-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage your account</title>
    <link rel="stylesheet" href="manage-account.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
  </head>
  <body>
    <!--header pour toutes les pages d'admin-->
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

<div class="rectangle">
  <!--création droite verticale-->
  <div class="vl">
    <!--éléments à droite de la droite-->
    <h2 name="about-you">About you:</h2>
      <p><u>Association</u>: lorem ipsum</p>
      <p><u>Number of animals</u>: lorem ipsum</p>
      <p><u>E-mail adress</u>: lorem@ipsum</p>

    <h2 name="edit-profil">Edit profil:</h2>
      <u><a href="$$" name="a">Change username</a></u>
      <br>
      <u><a href="$$" name="a">Change password</a></u>
      <br><br>
      <u><a href="$$" name="a">Delete account</a></u>
  </div>
    <!--éléments à gauche de la droite verticale-->
    <p name="needed"> <span><img src="photo.png" alt="photo"></span>
    <h1 class="username"><strong>Username</strong></h1></p>
    <u><a href="$$" name="a">Update profil picture</a></u>
</div>

  </body>
</html>
<script src="site.js"></script>
