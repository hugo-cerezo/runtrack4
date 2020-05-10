<?php
session_start();
include 'header.php';
?>
<div class='inscriptionbg'>
<div class="inscriptionelement">
<form class="form" name="inscription" method="post" action="">
            email <input class="input" type="mail" name="email"/> <br/>
            Mot de passe <input class="input" type="password" name="mdp"/><br/>
            Confirmez votre mot de passe <input class="input" type="password" name="remdp"/><br/>
            <input class="button1" type="submit" name="envoie" value="inscription"/>
</form>
</div>
</div>
<?php
    $_SESSION["validation"] = true;
    
	
    if(isset($_POST["envoie"]))
    {
        $domain = explode('@', $_POST["email"]);
        /* var_dump($domain); */
        if ($domain[1] == 'laplateforme.io')
        {
            if ($_POST["mdp"]==$_POST['remdp'])
	        {
                echo "test";
                $conn     = mysqli_connect("localhost","root","","bigjob");
                $request  = "SELECT login FROM user";
                $query    = mysqli_query($conn,$request);
                $response = mysqli_fetch_all($query);
            
                $count = 0;
                while($count < count($response))
                {
                    if($response[$count][0] == $_POST["email"])
                    {
                        $_SESSION["validator"] = false;
                        header("location:inscription.php");
                    }
                    $count++;
                }
            
                if($_SESSION["validation"])
                {
                    $request = "INSERT INTO user (`id`,`password`,`mail`,rank_id) VALUES (NULL,'".password_hash($_POST["mdp"],PASSWORD_BCRYPT)."','".$_POST["email"]."',1);";
                    mysqli_query($conn, $request);
                    header("location:connexion.php");
                }
            }
        }   
    }


?>