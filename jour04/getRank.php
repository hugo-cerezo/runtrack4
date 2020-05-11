<?php
include("src/class/user.php");
session_start();
$data = $_SESSION["user"]->getRank();
echo $data
?>