<?php
if (isset($_POST["submit"])) {
    $mail = $_POST["email"];
    $pass = $_POST["mdp"];
    $conf = $_POST["remdp"];
    $_SESSION["user"] = new User;
    if (isset($_POST["submit"]) &&  !empty($_POST["email"]) && !empty($_POST["mdp"]) && !empty($_POST["remdp"]) && $_POST["mdp"] == $_POST["remdp"]) {
        $_SESSION["user"]->getRegister();
    }
}
?>
