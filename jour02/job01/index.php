<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>jour02</title>
</head>
<body>
    <header>
        <a href="index.php">accueil</a>
        <a href="index.php">inscription</a>
        <a href="index.php">connexion</a>
        <a href="index.php">recherche</a>
    </header>
    <main>
        <form>
            <input type="radio" id="homme" name="homme" value="homme"checked>
            <label for="homme">homme</label></br>
            <input type="radio" id="femme" name="femme" value="femme"checked>
            <label for="femme">femme</label></br>
            <label for='nom'>nom</label></br>
            <input class="input" type="text" name="nom"></br>
            <label for='prenom'>prenom</label></br>
            <input class="input" type="text" name="prenom"></br>
            <label for='adresse'>adresse</label></br>
            <input class="input" type="text" name="adresse"></br>
            <label for='mail'>mail</label></br>
            <input class="input" type="email" name="mail"></br>
            <label for="mdp">Votre mot de passe</label></br>
            <input class="input" type="password" name="mdp" /></br>
            <label for="remdp">confirmé mot de passe</label></br>
            <input class="input" type="password" name="remdp" /></br>
            <input type="checkbox" name="chk1" value="informatique">
            <label for="chk1">informatique</label></br>
            <input type="checkbox" name="chk2" value="voyages">
            <label for="chk2">voyages</label></br>
            <input type="checkbox" name="chk3" value="sport">
            <label for="chk3">sport</label></br>
            <input type="checkbox" name="chk4" value="lecture">
            <label for="chk4">lecture</label></br>
            <input class="button1" type="submit" value="submit" name="envoie" /></br>
        </form>
    </main>
    <footer>
        <a href="index.php">accueil</a>
        <a href="index.php">inscription</a>
        <a href="index.php">connexion</a>
        <a href="index.php">recherche</a>
    </footer>
</body>
</html>
