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

    public function getConnected()
    {
        $conn = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
        $sql = "SELECT * FROM user WHERE mail ='$_POST[inputEmail]'";
        $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['inputPassword'], $result["password"])) {
            $this->id = $result['id'];
            $this->rank = $result['rank_id'];
            $this->connectState = true;
        } else {
            $this->connectState = false;
            return false;
        }
    }

    public function getId()
    {
        return $this->id;
    }
}
