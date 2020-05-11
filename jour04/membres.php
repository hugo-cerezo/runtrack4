<?php
include("src/class/user.php");
session_start();
if ($_SESSION["user"]->isConnected() != true) {
    header('location:index.php');
} else {
    if ($_SESSION["user"]->getRank() != 0) {
        header('location:index.php');
    }
}
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <title>Membres</title>
</head>

<body class="alert-light">
    <!-- Header -->
    <?php include('include/header.php'); ?>

    <main>
        <h1 class="h1 text-center my-5">Liste des membres</h1>
        <div class="container my-5 d-flex justify-content-center min-vh-100">
            <table class="col-9">
                <thead>
                    <th>ID</th>
                    <th>Mail</th>
                    <th>Rank</th>
                    <th>Modifier</th>
                </thead>
                <?php foreach ($_SESSION["user"]->getUserInfo() as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['mail']; ?></td>
                        <form action="" method="post">
                            <td>
                                <input type="text" id="<?php echo 'input' . $value['id']; ?>" name="<?php echo 'input' . $value['id']; ?>" value="<?php include('include/rank.php'); ?>">
                            </td>
                            <td>
                                <button class="button" type="submit" name="<?php echo $value['id']; ?>">Modifier</button>
                                <?php
                                if (isset($_POST[$value['id']])) {
                                    if ($_POST['input' . $value['id']] == 'user') {
                                        $rank = 1;
                                        $conn = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
                                        $sql = "UPDATE `user` SET `rank_id`= $rank WHERE id=$value[id]";
                                        $conn->query($sql);
                                        header('refresh:0');
                                    } else if ($_POST['input' . $value['id']] == 'admin') {
                                        $rank = 0;
                                        $conn = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
                                        $sql = "UPDATE `user` SET `rank_id`= $rank WHERE id=$value[id]";
                                        $conn->query($sql);
                                        header('refresh:0');
                                    } else {
                                        echo 'merci d\'entrer un rang valide';
                                        header('refresh:1');
                                    }
                                }
                                ?>
                            </td>
                        </form>
                    </tr>
                <?php
                } ?>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <?php include('include/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="src/js/members.js"></script>
</body>

</html>