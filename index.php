<?php
session_start();
include_once 'inc/menu.php';
include_once 'inc/afficheConnexion.php';
?>

<<<<<<< HEAD
<header class="masthead">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading">Bienvenue sur le site </h1>
      <hr>
      <p>Informations générales sur le site et ses fonctionnalités</p>
    </div>
  </div>
</header>


<section id="services"  >
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">A votre service</h2>
        <hr class="primary">
=======
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projet Fredi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Fredi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <?php
            include 'inc/afficheconnection.php';
          ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login2.php">Connexion</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Déconnexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Mon compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listeBordereaux2.php">Note de frais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="inscription2.php">Inscription</a>
            </li>
          </ul>
        </div>
>>>>>>> b4b83562dedf9dea6c78cca82b1f7e8ae6590f8f
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 centered text-center">
        <div class="service-box">
          <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
          <h3>Informations personnelles</h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-6  text-center">
        <div class="service-box">
          <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
          <h3>Votre note de frais</h3>
        </div>
      </div>        
    </div>
  </div>
</section>
    
<section id="contact bg-drak">
  <div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto text-center">
      <h2 class="section-heading">Un problème ? contactez-nous ! </h2>
      <hr class="primary">
      <p>En cas de problème vous pouvez nous contactez au numero ou a l'adresse ci-dessous.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 ml-auto text-center">
      <i class="fa fa-phone fa-3x sr-contact"></i>
      <p>123-456-6789</p>
    </div>
    <div class="col-lg-4 mr-auto text-center">
      <i class="fa fa-envelope-o fa-3x sr-contact"></i>
      <p><a href="mailto:your-email@your-domain.com">frediSite@gmail.com</a></p>
    </div>
  </div>
  </div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="inc/vendor/jquery/jquery.min.js"></script>
<script src="inc/vendor/popper/popper.min.js"></script>
<script src="inc/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="inc/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="inc/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="inc/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="inc/js/creative.min.js"></script>
</body>

</html>
