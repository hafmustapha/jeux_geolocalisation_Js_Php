<?php
//connexion à la base de données
try {
$bdd = new PDO('mysql:host=127.0.0.1;dbname=geo','root','');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$conn = mysqli_connect("localhost","geo","")
if(isset($_POST['forminscr'])){
  $nom = htmlspecialchars($_POST['nom']);
  $prénom = htmlspecialchars($_POST['prénom']);
  $email = htmlspecialchars($_POST['email']);
  $mdp = sha1($_POST['pwd']);
  $mdp2 = sha1($_POST['pwd2']);
  $date_naiss = htmlspecialchars($_POST['date_naiss']);
  $civilite = htmlspecialchars($_POST['civilité']);
  if($mdp == $mdp2){
    //insertion
    $req = $bdd->prepare("INSERT INTO membre(nom, prénom, email, pass, date_naiss, civilité) VALUES (?,?,?,?,?,?) ");
    $req -> execute(array($nom, $prénom, $email, $mdp, $date_naiss, $civilite));
    echo "vous etes bien inscrit";
  }else{
    echo "vos mots de passes ne correspandent pas! ";
  }
}
/*
$req -> bindValue(':nom',$_POST['nom'],PDO::PARAM_STR);
$req -> bindValue(':prénom',$_POST['prénom'],PDO::PARAM_STR);
$req -> bindValue(':email',$_POST['email'],PDO::PARAM_STR);
$req -> bindValue(':pass',$pass_hash,PDO::PARAM_STR);
$req -> bindValue(':date_naiss',$_POST['date_naiss'],PDO::PARAM_STR);
$req -> bindValue(':civilité',$_POST['civilité'],PDO::PARAM_STR);
*/

 ?>
