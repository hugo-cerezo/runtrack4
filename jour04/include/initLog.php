<?php
$_SESSION["user"] = new User;
if (isset($_POST["submit"]) &&  !empty($_POST["mail"]) && !empty($_POST["mdp"])) {
    $_SESSION["user"]->getConnected();
}
?>
