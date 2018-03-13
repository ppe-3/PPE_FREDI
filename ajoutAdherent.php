<?php
include 'inc/hashage.php';
include 'inc/connexion_bd.inc.php';


session_start();

$id=isset($_SESSION['id']) ? $_SESSION['id'] : '';

$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$datenaissance = isset($_POST['datenaissance']) ? $_POST['datenaissance'] : '';
$num_license = isset($_POST['num_license']) ? $_POST['num_license'] : '';
$submit = isset($_POST['submit']) ? $_POST['submit'] : '';
?>


<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>projet fredi</title>

    <!-- Bootstrap core CSS -->
    <link href="inc/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="inc/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="inc/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="inc/assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Fredi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Connexion</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Deconnexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Mon compte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listeBordereaux.php">Note de frais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="inscription.php">Inscription</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">ajout d'un adherent </h1>
          <hr>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <center>
          <p>
           Nom :<br /><input type="text" required name="nom"  /><br />
           Prénom :<br /><input type="text" required name="prenom"  /><br />
           numero de license  :<br /><input type="text" required name="num_license"  /><br />
           Date de naissance :<br /><input type="date" required name="datenaissance"/> <br />          
            
            <input type="submit" name="submit" value="Enregistrer"></p><br />
        
        </center>
        <?php
        if($submit){
            
        
        $req = $con->prepare('INSERT INTO adherent(numlicense_adherent, id_demandeur, nom_ad, prenom_ad,  date_naissance_ad) VALUE(:num_license, :id, :nom , :prenom, :datenaissance)');
        $req->execute(array(
            'nom'                   => $nom,
            'prenom'                => $prenom,
            'datenaissance'         => $datenaissance,
            'num_license'           => $num_license,
            'id'                    => $id
        ));
        header('Location: index.php');
        }
        
        ?>
        </form>  
        </div>
      </div>
    </header>
 