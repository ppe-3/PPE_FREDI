<?php
include 'inc/dao/DemandeurDAO.php'	
 ?>




<!DOCTYPE html>

<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Mon compte</title>
    </head>
    
    <body>

        <div id="global">
		
		
			

<?php

$id_demandeur = isset($_GET['id_demandeur']) ? $_GET['id_demandeur'] : '';
$nom = isset($_POST['nom_demandeur']) ? $_POST['nom_demandeur'] : '';
$prenom = isset($_POST['prenom_demandeur']) ? $_POST['prenom_demandeur'] : '';
$rue = isset($_POST['rue_demandeur']) ? $_POST['rue_demandeur'] : '';
$ville = isset($_POST['ville_demandeur']) ? $_POST['ville_demandeur'] : '';
$mail = isset($_POST['mail_demandeur']) ? $_POST['mail_demandeur'] : ''; 
$cp = isset($_POST['cp_demandeur']) ? $_POST['cp_demandeur'] : ''; 
$dn = isset($_POST['datenaissance_demandeur']) ? $_POST['datenaissance_demandeur'] : ''; // dn = date de naissance
$sexe = isset($_POST['sexe_demandeur']) ? $_POST['sexe_demandeur'] : '';
$mdp = isset($_POST['mdp_demandeur']) ? $_POST['mdp_demandeur'] : '';  




$Demandeur = new DemandeurDAO();
$rows = $Demandeur->find2($id_demandeur);


?>

			
        <center>
            
            <h1>Vos informations</h1>
            
            <p>Identifiant<br /><input type="text" required name="id_demandeur"  value="<?php echo $rows->get_id_demandeur(); ?>" /></p>
            
            <p>Nom<br /><input type="text" required name="nom"  value="<?php echo $rows->get_nom_demandeur(); ?>" /></p>
            
            <p>Prenom<br /><input type="text" required name="prenom"  value="<?php echo $rows->get_prenom_demandeur(); ?>" /></p>
            
            <p>Rue<br /><input type="datextte" required name="rue"  value="<?php echo $rows->get_rue_demandeur(); ?>" /></p>
            
            <p>Code postal<br /><input type="text" required name="cp"  value="<?php echo $rows->get_cp_demandeur(); ?>" /></p>
            
            <p>Ville<br /><input type="text" required name="ville"  value="<?php echo $rows->get_ville_demandeur(); ?>" /></p>
            
            <p>E-mail<br /><input type="date" required name="mail"  value="<?php echo $rows->get_mail_demandeur(); ?>" /></p>

            <p>Date de naissance<br /><input type="text" required name="dn"  value="<?php echo $rows->get_datenaissance_demandeur(); ?>" /></p>
            
            <p>Sexe<br /><input type="text" required name="sexe"  value="<?php echo $rows->get_sexe_demandeur(); ?>" /></p>

             <p>Mot de passe<br /><input type="text" required name="mdp"  value="<?php echo $rows->get_mdp_demandeur(); ?>" /></p>

            
            

           
        
        </center>



			

        </div>
		
<p>Revenir à la <a href="index.php" >page</a> d'accueil</p>
		
    </body>
</html>