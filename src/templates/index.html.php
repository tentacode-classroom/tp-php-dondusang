<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Don du sang</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/css/index.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Don du Sang</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="jumbotron-heading">Je veux donner mon sang</h1>
      <p class="lead text-muted">Nous trouvons pour vous le point le plus proche pour donner votre sang.</p>
      <form>
        <div class="form-group">
            <label for="addresse">Quelle est votre adresse ?</label>
            <input name="addresse" type="text" class="form-control" id="addresse" aria-describedby="emailHelp" placeholder="18 rue descartes Villeurbanne">
        </div>
        <button type="submit" class="btn btn-primary">Chercher</button>
        </form>
    </div>
  </div>

  <div class="container">
      <h2>Nous avons trouvé 2 points de don du sang.</h2>
      <hr />
      <div class="row">
        <div class="col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">École YNOV</h5>
                <p class="card-text">à 2.5km</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mairie de Villeurbanne</h5>
                <p class="card-text">à 500m</p>
            </div>
            </div>
        </div>
      </div>
  </div>
</main>

<script type="text/javascript" src="http://<?= $_SERVER['HTTP_HOST'] ?>/js/index.js"></script>
</html>
