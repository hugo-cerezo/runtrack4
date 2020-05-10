<?php
include("src/class/user.php");
session_start();
$data = $_SESSION["user"]->getId();
echo $data
?>