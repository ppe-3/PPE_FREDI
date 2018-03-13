<?php
$id=$_GET["id"];

include 'inc/dao/ligneDeFraisDAO.php';
$dao_ligne_frais= new LignefraisDAO; 
$dao_ligne_frais->delete($id);

  

 
         header("Location: ligne_frais.php?annee=". $row->get_annee() ." >bordereaux</a>");
          
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
