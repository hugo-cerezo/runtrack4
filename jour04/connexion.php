<?php
	session_start();
    include'header.php';
    include("src/class/user.php");
    $_SESSION["user"] = new User;
    if (isset($_POST["submit"]) &&  !empty($_POST["inputEmail"]) && !empty($_POST["inputPassword"])) {
        $_SESSION["user"]->getConnected();
    }

    if ($_SESSION["user"]->isConnected() == true) {
        header("location:index.php");
    }


?>
<div class='connexionbg'>
<div class="connexionelement">
<form class="form" action="" method="post">
				<label for="login">Votre mail</label>
				<input class="input" type="mail" name="mail"/></br>
				<label for="mdp">Votre mot de passe</label>
				<input class="input" type="password" name="mdp"/></br>
				<input class="button1" type="submit" value="Se connecter" name="envoie"/>
</form>
<p>pas encore de compte ?<a href='inscription.php'>inscrivez vous</a></p></div></div>
