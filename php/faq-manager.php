<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Q&A</title>
    <link rel="stylesheet" href=" faq.css ">
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

    <div class="faq">
        <table>
            <tr>
              <td width="10%">Question 1:</td>
              <td>Who are we?</td>
            </tr>
            <tr class="space-under">
              <td>Answer 1:</td>
              <td>A group of association who fights for wildlife thanks to new technologies.</td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
              <td width="10%">Question 2:</td>
              <td>What is the utility of our website?</td>
            </tr>
            <tr class="space-under">
              <td>Answer 2:</td>
              <td>Our website enables users to track their animals and have access to their cardiac rate. </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
              <td width="10%">Question 3:</td>
              <td>Is it possible to manage more then one animal?</td>
            </tr>
            <tr class="space-under">
              <td>Answer 3:</td>
              <td>Yes it is, you can manage as many animals as you want.</td>
            </tr>
        </table>
      </div>
      <br>
      <div class="input">
        <input type="text" name="question" size="150">
        <button type="button" name="button">Submit</button>
      </div>

  </body>
</html>
<script src="site.js"></script>
