<?php



include_once "inc/model/ligneDeFrais.php";
class LignefraisDAO {

  private static $connexion; // Objet de connexion

  

  private static function get_connexion() {
    if (self::$connexion === null) {
      // Récupération des paramètres de configuration BD
      $user = 'root';
      $pass = '';
      $host = 'localhost';
      $base = 'fredi';
      $dsn = 'mysql:host=' . $host . ';dbname=' . $base;
      // Création de la connexion
      try {
        self::$connexion = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        throw new Exception("Erreur lors de la connexion : " . $e->getMessage());
      }
    }
    return self::$connexion;
  }

  


  function find($id_lignefrais) {
    $sql = "select * from lignefrais where id_lf=:id_lignefrais";
    try {
      $sth = self::get_connexion()->prepare($sql);
      $sth->execute(array(":id_lignefrais" => $id_lignefrais));
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $lignefrais = new Lf($row);

  
    return $lignefrais; 
  }

  
  function findAll() {
    $sql = "select * from lignefrais";
    try {
      $sth = self::get_connexion()->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $tableau = array();
   
    foreach ($rows as $row) {
      $lignefrais = new Lf($row);
      
      $tableau[] = $lignefrais;
    }
    return $tableau; // Retourne un tableau d'objets
  }
  
 function findby($id_Demandeur,$annee) {
    $sql = "select * from lignefrais where id_Demandeur=:id_Demandeur and annees=:annee ";
    try {
      $sth = self::get_connexion()->prepare($sql);
      $sth->execute(array(":id_Demandeur" => $id_Demandeur,":annee" => $annee));
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
       }
    $tableau = array();
    foreach ($rows as $row) {
      $tableau[] = new Lf($row);
    }
    return $tableau; // Retourne un tableau d'objets
  }

  function delete($id) {
    $sql = "DELETE FROM lignefrais WHERE id_lf =:id ";
  
      $sth = self::get_connexion()->prepare($sql);
      $sth->execute(array(":id" => $id));
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
   
  }


}