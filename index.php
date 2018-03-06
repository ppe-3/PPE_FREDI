<?php
session_start();
include_once 'inc/menu.php';
include_once 'inc/afficheConnexion.php';
?>

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
