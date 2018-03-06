<!DOCTYPE html>
<?php
	session_start();
	
//	include 'inc/afficheconnection.php'; //ATTENTION ! tu dois changer 'inc/afficheConnection.php'; une fois upgrade la new version 
	include 'inc/DemandeurDAO.php'	//ATTENTION ! tu dois changer en 'inc/dao/DemandeurDAO.php' une fois upgrade la new version de github
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Mon compte</title>
    </head>
    
    <body>

        <div id="global">
		
		<?php
			$demandeurDAO = new DemandeurDAO;
			$user=$demandeurDAO->find($id_demandeur,$nom_demandeur,$prenom_demandeur,$rue_demandeur,$cp_demandeur,$ville_demandeur,$datenaissance_demandeur,$sexe_demandeur); 
		?>

         
			<h1>Vos informations</h1>
			<ul> 
				<li>Identifiant : <?php echo $user->get_id_demandeur(); ?></li>
				<li>Nom : <?php echo $user->get_nom_demandeur(); ?></li>
				<li>Prenom : <?php echo $user->get_prenom_demandeur(); ?></li>
				<li>Rue <?php echo $user->get_rue_demandeur(); ?></li>
				<li>Code postal <?php echo $user->get_cp_demandeur(); ?></li>
				<li>Ville : <?php echo $user->get_ville_demandeur(); ?></li>
				<li>E-Mail : <?php echo $user->get_mail_demandeur(); ?></li>
				<li>Date de naissance : <?php echo $user->get_datenaissance_demandeur(); ?></li>
				<li>Sexe : <?php echo $user->get_sexe_demandeur(); ?></li>
			</ul>

        </div>
		
	<p>Revenir à la <a href="index.php" >page</a> d'accueil</p>
		
    </body>
</html>