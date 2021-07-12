<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="couleur et texte.css"/>
<link rel="stylesheet" href="formulaire de contact.css"/>
<title>Contact VegetalSearch</title>
<link rel="shortcut icon" type="image/png" href="Images/Logo.jpeg"/>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "3z7or7e91s");
</script>
<style type="text/css">
/* COMPACT CAPTCHA */

.capbox {
	background-color: #BBBBBB;
	background-image: linear-gradient(#BBBBBB, #9E9E9E);
	border: #2A7D05 0px solid;
	border-width: 2px 2px 2px 20px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	display: inline-block;
	padding: 5px 8px 5px 8px;
	border-radius: 4px 4px 4px 4px;
	}

.capbox-inner {
	font: bold 12px arial, sans-serif;
	color: #000000;
	background-color: #E3E3E3;
	margin: 0px auto 0px auto;
	padding: 3px 10px 5px 10px;
	border-radius: 4px;
	display: inline-block;
	vertical-align: middle;
	}

#CaptchaDiv {
	color: #000000;
	font: normal 25px Impact, Charcoal, arial, sans-serif;
	font-style: italic;
	text-align: center;
	vertical-align: middle;
	background-color: #FFFFFF;
	user-select: none;
	display: inline-block;
	padding: 3px 14px 3px 8px;
	margin-right: 4px;
	border-radius: 4px;
	}

#CaptchaInput {
	border: #38B000 2px solid;
	margin: 3px 0px 1px 0px;
	width: 105px;
	}


</style>
</head>
<body>
<header>
    
    <center>
        <nav>
            <SPAN style="position: absolute; top: 80 px; left: 100 px;">
    <ul>
        <li><a href="Accueil VegetalSearch.html">Accueil</a></li>
        <li><a href="Aide vegetalSearch.html">Aide</a></li>
        <li><a href="Encyclopedie/index.html">Encyclopédie</a></li>
        <li><a href="Contact VegetalSearch.php">Contact</a></li>
        <li><a href="En savoir plus VegetalSearch.html">En savoir plus</a></li>
        
    </ul>
</nav>

</center>
<div id="logo">
    <img src="Images/Logo.jpeg" alt="logo" width="150" height="150"/>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<p id="message"></p>
<br>
<center><h2>Une question ? Un problème ? Décrivez-nous ce qu'il se passe grâce à ce formulaire et nous vous répondrons au plus vite</h2></center>
<div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">Nous contacter</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post"  onsubmit="return checkform(this);"

>
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Votre nom</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Nom" class="fcf-form-control" required autofocus>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Prénom" class="fcf-label">Votre prénom</label>
            <div class="fcf-input-group">
                <input type="text" id="Prenom" name="Prenom" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Votre adresse e-mail</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Votre message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>
        <br>
            <br>
            <br>
            <!-- START CAPTCHA -->
<br>
<div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br><br>
<!-- END CAPTCHA -->

             </script>
            <br>
            <br>
            <br>

        <div class="fcf-form-group">
            <input  type="submit"  id="fcf-button"  class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block" > Envoyer le message

        </div>

    </script>
        
           
            <input type="reset" value="Effacer le message" name="submit">
           </form>
    </form>
    </div>

</div>
<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Vous avez oublié de remplir le Captcha.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- Le code du Captcha est incorrect. Veuillez réssayer.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>


<?php
    if(isset($_POST['Message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['Email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de Vegetalsearch</h1>
        <p><b>Nom : </b>' . $_POST['Nom'] . '<br>
        <p><b>Prénom : </b>' . $_POST['Prenom'] . '<br>
        <b>Email : </b>' . $_POST['Email'] . '<br>
        <b>Message : </b>' . $_POST['Message'] . '</p>';

        $retour = mail('vegetalsearch@alwaysdata.net', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<h3>Votre message a bien été envoyé.</h3>';
        }
    }
    ?>

<br>
</br>
<br>
<br>
<br>



</body>
<footer>


<center><p> © 2020 Tous Droits Réservés</p></center>
</footer>
      
</datalist>
</html>