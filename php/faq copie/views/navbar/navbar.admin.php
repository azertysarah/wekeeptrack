<!DOCTYPE html>
<html lang="en">
<body>

<!--En-tête pour toutes les pages-->
            
<div id="top">
    <img id="fond" src="public/assets/filigrane.2.png"  >
    <div id="logo">
        <img src="public/assets/logo.png">                   
    </div>
    <div id="logotext">
        <div id="logo2">
            <img  src="public/assets/facebook.1.png" >
            <img  src="public/assets/insta.1.png">
            <img src="public/assets/linkedin.1.png">
            <img src="public/assets/twitter.1.png">
        </div>        
            <p>Keep track of us</p>
    </div> 
</div>	

<!--Navbar pour toutes les pages admin-->
<header><!--crée les liens pour aller aux autres pages-->
    <h2 onmouseenter="manage()" onmouseleave="manageback()" class="manage">
        <a >Manage</a>
        <a id="manage1" herf="manage.user.admin.php"></a>
        <a id="manage2" href="manage.manager.admin.php"></a>
    </h2>
    <h2 > <a Quizz href="quizz.html">Quizz</a></h2>
    <h2 ><a href="qna.php"> Q&A</a></h2>
    <h2 class="more" onmouseenter="sizechange()" onmouseleave="sizereturn()">
        <a> More</a>
        <a id="moretext1" ></a>
        <a id="moretext2" ></a>
        <a id="moretext3" ></a>
    </h2>
                
</header>
            
<!--fin header-->

</body>
</html>