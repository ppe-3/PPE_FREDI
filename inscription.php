<?php
include_once 'inc/menu.php'; 
include 'inc/hashage.php';
include 'inc/connexion_bd.inc.php';

$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$rue = isset($_POST['rue']) ? $_POST['rue'] : '';
$cp = isset($_POST['cp']) ? $_POST['cp'] : '';
$ville = isset($_POST['ville']) ? $_POST['ville'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$datenaissance = isset($_POST['datenaissance']) ? $_POST['datenaissance'] : '';
$sexe=isset($_POST['sexe']) ? $_POST['sexe'] : '';
$rep=isset($_POST['rep']) ? $_POST['rep'] : '';
$passe = isset($_POST['passe']) ? $_POST['passe'] : '';
$submit = isset($_POST['submit']) ? $_POST['submit'] : '';
?>


<!DOCTYPE html>
<html>
  <header class="masthead">
    <div class="header-content">
      <div class="header-content-inner">
      <h1 id="homeHeading">Inscription </h1>
      <hr>
          
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
      <center>
        <p>
          Nom :<br /><input type="text" required name="nom"  /><br />
          Prénom :<br /><input type="text" required name="prenom"  /><br />
          Êtes-vous un représentant ?   :<br />   <input type="radio" name="rep" value="O" checked/>OUI<br />
                                                  <input type="radio" name="rep" value="N" >NON<br />
          Rue :<br /><input type="text" required name="rue"  /><br />
          Code Postale :<br /><input type="text" required name="cp"  /><br />
          Ville :<br /><input type="text" required name="ville"  /><br />
          Adresse mail :<br /><input type="email" required name="mail"/><br />
          Date de naissance :<br /><input type="date" required name="datenaissance"/> <br />          
          <input type="radio" name="sexe" value="H" >Homme<br />
          <input type="radio" name="sexe" value="F" checked/>Femme<br />
          Mot de passe :<br /><input type="password" required name="passe"/><br />
          <input type="submit" name="submit" value="Enregistrer"></p><br />
        
      </center>
        
<?php
if($submit)
{
   $crypt = hashage($passe);
   $req = $con->prepare('INSERT INTO demandeur(nom_demandeur, prenom_demandeur, rue_demandeur, cp_demandeur, ville_demandeur, mail_demandeur,  datenaissance_demandeur, sexe_demandeur, motdepasse_demandeur,repre_demandeur) VALUE(:nom, :prenom, :rue , :cp, :ville, :mail, :datenaissance, :sexe, :crypt, :rep)');
   $req->execute(array(
    'nom'                   => $nom,
    'prenom'                => $prenom,
    'rue'                   => $rue,
    'cp'                    => $cp,
    'ville'                 => $ville,
    'mail'                  => $mail,
    'datenaissance'         => $datenaissance,
    'sexe'                  => $sexe,
    'crypt'                 => $crypt,
    'rep'                   => $rep
    ));
        
    header('Location: index.php');
}
        
?>
  
        </form>  
      </div>
    </div>
  </header>
</html>
 