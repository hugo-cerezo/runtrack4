<?php
class User
{
    public $id = "";
    public $rank = "";
    public $connectState = false;

    public function isConnected()
    {
        return $this->connectState;
    }

    public function disconnect()
    {
        $this->id = "";
        $this->rank = "";
        $this->connectState = false;
        header('location:index.php');
    }

    public function getConnected()
    {
        $conn = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
        $sql = "SELECT * FROM user WHERE mail ='$_POST[mail]'";
        $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        if ($result != NULL) {
            if (password_verify($_POST['mdp'], $result["password"])) {
                $this->id = $result['id'];
                $this->rank = $result['rank_id'];
                $this->connectState = true;
                header("location:index.php");
            } else {
                echo '<p class="text-center my-5">Mauvais Mot De Passe</p>';
            }
        } else {
            echo '<p class="text-center my-5">Adresse inconnu</p>';
        }
    }

    public function getRegister()
    {
        $pass = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $conn = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
        $sql = "SELECT * FROM user WHERE mail = '$_POST[email]'";
        $result = $conn->query($sql)->fetch();
        if ($result == 0) {
            $chekMail = explode('@', $_POST['email']);
            if ($chekMail[1] == "laplateforme.io") {
                $sql = "INSERT INTO `user`(`id`, `password`, `mail`, `rank_id`) VALUES (NULL,'$pass','$_POST[email]',1)";
                $conn->query($sql);
                header('location:connexion.php');
            } else {
                echo '<p class="text-center my-5">Nom de domaine invalide</p>';
            }
        } else {
            echo '<p class="text-center my-5">Adresse déja prise</p>';
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getUserInfo()
    {
        if ($this->rank == 0) {
            $conn = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
}
