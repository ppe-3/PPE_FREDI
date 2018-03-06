<?php

include 'inc/connexion_bd.inc.php';

session_start();
$id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
$nom=isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$prenom=isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';



$datetrajet = isset($_POST['datetrajet']) ? $_POST['datetrajet'] : '';
$motif = isset($_POST['motif']) ? $_POST['motif'] : '';
$trajet = isset($_POST['trajet']) ? $_POST['trajet'] : '';
$km = isset($_POST['km']) ? $_POST['km'] : '';
$ct = isset($_POST['ct']) ? $_POST['ct'] : ''; //ct : Cout trajet
$cp = isset($_POST['cp']) ? $_POST['cp'] : ''; //cp : Cout péage
$cr = isset($_POST['cr']) ? $_POST['cr'] : ''; //cr : Cout repas
$ch = isset($_POST['ch']) ? $_POST['ch'] : ''; //ch : Cout hébergement
$submit = isset($_POST['submit']) ? $_POST['submit'] : '';

 if($id > '0') 
                 {
                   
                     if(empty($rows))
                     {
                      $affi=1;
                     }
                     else{
                      $affi=2;
                     }

                  }

echo $id; 
?>

 
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projet fredi</title>

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
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <hr>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <center>
            
            <h1>Ajouter une ligne de frais</h1>
            
            <p>Date trajet<br /><input type="date" required name="datetrajet"  />
            
            <p>
        <select name="motif">
        
          <option value="1" selected>Voyage</option>
          <option value="2" >Retard</option>
        
        </select>
      </p>

            <p>Trajet <br /><input type="text" required name="trajet" placeholder="Exemple :Toulouse-Pamiers"  /><br />

             Km Parcourus <br /><input type="text" required name="km"/><br />

             Cout trajet <br /><input type="text" required name="ct"  /><br />
            
             Cout péage <br /><input type="text" required name="cp"/><br />
            
             Cout repas <br /><input type="text" required name="cr"/><br />
            
             Cout hébergement <br /><input type="text" required name="ch"/><br />

            <input type="submit" name="submit" value="Ajouter"><br />
           <input type="reset" value="Annuler"><br />
        
        </center>
        <?php
        if($submit){
        $curYear = date('Y');   
        
        $req = $con->prepare('INSERT INTO lignefrais(datetrajet_lf, id_motif, trajet_lf, km_lf, couttrajet_lf, coutpeage_lf, coutrepas_lf, couthebergement_lf, id_demandeur, annees) VALUE(:datetrajet, :motif, :trajet , :km, :ct, :cp, :cr, :ch, :id, :annees )');
        
        $req->execute(array(
            ':datetrajet'            => $datetrajet,
            ':motif'                 => $motif,
            ':trajet'                => $trajet,
            ':km'                    => $km,
            ':ct'                    => $ct,
            ':cp'                    => $cp,
            ':cr'                    => $cr,
            ':ch'                    => $ch,
            ':id'                    => $id,
            ':annees'                => $curYear
          
        ));
        header('Location: ajout.php');
        }
        
        ?>
        </form>  
        </div>
      </div>
    </header>
 