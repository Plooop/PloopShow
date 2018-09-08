<?php

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private");
session_start();

$mot_de_passe = '$2y$10$4Ztm57y27QreRjhf8wVHYOg3b/ih4/NZN03.8tL6lojPv506tFfxG';


//si pas de mdp dans session ou dans le post, user need connexion
//retour à l'index
//the @ sign suppresses any errors

if(!@$_POST['pass'] && !@$_SESSION['pass']) {

header("location: index.php?notlogin=1");
}

else {

//si session existante, on le renvoie sur le slideshow

  if(@$_SESSION['pass']){

    header("location: slideshow.php");
  }

//si mdp POST, mais pas de session, on verif le mdp

  else {

//get et verif du mdp fourni

$isloggedin=(password_verify($_POST['pass'], $mot_de_passe));

//si ok, on ajoute les infos à la session et on le renvoie sur le slideshow
//sinon retour à l'index

    if ($isloggedin==1) {

      $_SESSION['pass']=$_POST['pass'];
      header("location: slideshow.php");
    }

    else {

      header("location: index.php?fail=1");
    }
  }
}

?>
