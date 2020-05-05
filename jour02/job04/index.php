<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>jour02</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="right hide-on-med-and-down">
            <a href="index.php">accueil</a>
            <a href="index.php">inscription</a>
            <a href="index.php">connexion</a>
            <a href="index.php">recherche</a>
        </nav>  
    </header>

    <main>
        <form action="#">
            
                <p>
                    <label>
                      <input name="homme" type="radio"/>
                      <span>homme</span>
                    </label>
                  </p>
            
                  <p>
                    <label>
                      <input name="femme" type="radio"/>
                      <span>femme</span>
                    </label>
                  </p>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input class="input" type="text" name="nom">
                            <label for='nom'>nom</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input class="input" type="text" name="prenom">
                            <label for='prenom'>prenom</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">send</i>
                            <input class="input" type="text" name="adresse">
                            <label for='adresse'>adresse</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s12">
                            <label for='mail'>mail</label>
                            <input class="input" type="email" name="mail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field col s6">
                            <label for="mdp">Votre mot de passe</label>
                            <input class="input" type="password" name="mdp" />
                        </div>
                        <div class="input-field col s6">
                            <label for="remdp">confirmé mot de passe</label>
                            <input class="input" type="password" name="remdp" />
                        </div>
                    </div>
                </div>
            <p>
                <label>
                  <input type="checkbox" />
                  <span>informatique</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" />
                  <span>voyages</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" />
                  <span>sport</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" />
                  <span>lecture</span>
                </label>
              </p>
              <a class="waves-effect waves-light btn">sumbit</a>
        </form>
    </main>
    <footer>
        <nav class="right hide-on-med-and-down">
            <a href="index.php">accueil</a>
            <a href="index.php">inscription</a>
            <a href="index.php">connexion</a>
            <a href="index.php">recherche</a>
        </nav>  
    </footer>
</body>
</html>
