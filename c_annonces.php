<?php



$servname = 'localhost';
$dbname = 'auto-enchere';
$user = 'root';
$pass = '';


$titre = htmlspecialchars($_POST['titre']);
$prix_depart = htmlspecialchars($_POST['prix_depart']);
$date_fin_enchere =  htmlspecialchars($_POST['date_fin_enchere']);
$modele =  htmlspecialchars($_POST['modele']);
$marque =  htmlspecialchars($_POST['marque']);
$puissance =  htmlspecialchars($_POST['puissance']);
$annee =  htmlspecialchars($_POST['annee']);
$description =  htmlspecialchars($_POST['description']);
$photo =  htmlspecialchars($_POST['photo']);




var_dump($_POST);


try {
  $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO annonces(titre_annonce,prix_depart,date_fin_enchere,modele,marque,puissance,annee,description,photo) VALUES(?,?,?,?,?,?,?,?,?)";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$titre,$prix_depart,$date_fin_enchere,$modele,$marque,$puissance,$annee,$description,$photo]);
  
  echo 'Entrée ajoutée dans la table';

} catch (PDOException $e) {
  $dbco->rollBack();
  echo "Erreur : " . $e->getMessage();
}

header('Location: connexion.php');
exit;

?>