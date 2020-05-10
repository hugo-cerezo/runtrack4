<?php
include("src/class/user.php");
session_start();
$id = $_SESSION["user"]->getId();
$connect = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');

$data = array();

$query = "SELECT * FROM events WHERE id_utilisateur = $id OR status = 1 ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach ($result as $row) {
    $data[] = array(
        'id'   => $row["id"],
        'id_utilisateur' =>$row["id_utilisateur"],
        'title'   => $row["title"],
        'start'   => $row["start_event"],
        'end'   => $row["end_event"]
    );
}

echo json_encode($data);
