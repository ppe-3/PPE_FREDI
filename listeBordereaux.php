<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'inc/ndfDAO.php';



$submit = isset($_POST['submit']) ? $_POST['submit'] : '';
$id=isset($_SESSION['id']) ? $_SESSION['id'] : '';
$nom=isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$prenom=isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';


     $dao_note_frais= new Note_de_fraisDAO;
     $rows=$dao_note_frais->find($id); 
 

?>

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
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">Liste des notes de frais </h1>
          <hr>
            <?php

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
          else    {
       
                    header('Location: index.php');
          
                  }

          if($affi == 2)
          {
           
         foreach ($rows as $row) 
              {

                echo('<p><a href="ligne_frais.php?annee='. $row->get_annee() .'" >bordereaux</a>' . $row->get_id_note_de_frais() .'  '.$row->get_annee());
                echo('<br>'); 

              }

          } 
        if($affi == 1)
        {
       
         ?>
         <p><a href="ajout.php" >Ajouter</a> une ligne de frais</p>
          <?php
        }
          ?>
        </div>
      </div>
    </header>
 