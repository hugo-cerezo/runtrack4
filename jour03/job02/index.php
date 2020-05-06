<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>jour03</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script async src="script.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">units</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">jobs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">skill</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
        <h1 style="text-align: center;">LaPlateforme_</h1>
        <section class="row mt-5" >
        <div class="card col-2 ml-5 mr-3" style="width: 18rem; height: fit-content;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">un paipillon</h5>
              <p class="card-text">Un papillon c'est un peux comme une chenille, mais avec des ailles.Ne pas ingerer</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Commander votre propre papillon
              </button>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  votre poutit papillon a été commander
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
            <div class="jumbotron col-8 mr-5">
                <h1 class="display-4">Bonjour, Monde!</h1>
                <p class="lead">il existe plusieurs visions du termes</br>le monde est la matière, l'espace et les phenomenes qui nous sont accessibles par les sens ou la raison.</br>
                Le sens le plus courant désigne notre planète,la terre,avec ses habitants,et son environnement plus ou moin naturel</p>
                <hr class="my-4">
                <p>Le sens étendu désigne l'univers dans son ensemble</p>
                <a id='reboot' class="btn btn-primary btn-lg btn-danger" href="#" role="button">Rebooter le monde</a><div class="spinner-border text-info"style="margin-left: 1rem;" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                <nav aria-label="Page navigation example" style="margin-left: 45rem;">
                    <ul class="pagination">
                      <li class="page-item" id='previous'><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item" id='1'><a class="page-link" href="#">1</a></li>
                      <li class="page-item" id='2'><a class="page-link" href="#">2</a></li>
                      <li class="page-item" id='3'><a class="page-link" href="#">3</a></li>
                      <li class="page-item" id='next'><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
              </div>
          
          </div>
          <div class="list-group col-1" id="myList">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#">Limbes</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Luxure</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Gourmandise</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Avarice</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Colere</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Heresie</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Violence</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Ruse et Tromperie</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Trahison</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#">Internet Explorer</a>
            </div>
        </section>
        <div class='row '>
            <div class="col-3"></div>
            <div class="col-7">
            <p>instalation de AI 9000</p>
            <svg class="bi bi-arrow-bar-left" id="moin" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 00-.708 0l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708-.708L3.207 8l2.647-2.646a.5.5 0 000-.708z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M10 8a.5.5 0 00-.5-.5H3a.5.5 0 000 1h6.5A.5.5 0 0010 8zm2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"/>
              </svg>
                <div class="progress" >
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
                <svg class="bi bi-arrow-bar-right" id="plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M6 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H6.5A.5.5 0 016 8zm-2.5 6a.5.5 0 01-.5-.5v-11a.5.5 0 011 0v11a.5.5 0 01-.5.5z" clip-rule="evenodd"/>
                  </svg>
            </div>
        </div>
            
            </br>
            </br>
            </br>
            </br>
            </br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
          </div>
          <label for="randomorg">URL des internets 2 et 2.1 beta</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">DogeCoin</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://https://l33t.lptf/dkwb/berlusconimkt/</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col-2"></div>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" id='formvalidation' class="btn btn-primary">Submit</button>
          </form>
        </div>
    </main>
</body>
</html>