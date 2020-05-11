<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');

if (isset($_POST["id"])) {
    $query = "UPDATE events SET status = 1 WHERE id = $_POST[id]";
    $connect->query($query);
}
