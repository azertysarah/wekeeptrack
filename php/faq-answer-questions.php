<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Q&A</title>
    <link rel="stylesheet" href="faq.css">
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

  <h2 name='new-questions'>New questions:</h2>
  <div class="faq">
    <table>
        <tr>
          <td width="10%">Question:</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
        </tr>
        <tr class="space-under">
          <td>Answer:</td>
          <td><textarea rows="5" cols="50">Write your answer here... </textarea></td>
        </tr>
    </table>
      <button type="button" name="submit-answer">Submit answer</button>
      <hr>
      <table>
          <tr>
            <td width="10%">Question:</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
          </tr>
          <tr class="space-under">
            <td>Answer:</td>
            <td><textarea rows="5" cols="50">Write your answer here... </textarea></td>
          </tr>
      </table>
        <button type="button" name="submit-answer">Submit answer</button>
        <hr>
        <table>
            <tr>
              <td width="10%">Question:</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            </tr>
            <tr class="space-under">
              <td>Answer:</td>
              <td><textarea rows="5" cols="50">Write your answer here... </textarea></td>
            </tr>
        </table>
          <button type="button" name="submit-answer">Submit answer</button>
  </div>
  </body>
</html>
<script src="site.js"></script>
