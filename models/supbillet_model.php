<?php

function getPosts(){

  require('connect/connect.php');
  /////////affichage des posts
  $affichagePosts = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billet ORDER BY date_creation');
  $affichagePosts->execute();
  //////////on recupere la liste des billets dans la variable
  return $affichagePosts;
}

$affichagePosts = getPosts();

function supbillet(){
  require('connect/connect.php');
  //$affichageBillet = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billet ORDER BY date_creation DESC LIMIT 0,5');
  //$affichageBillet->execute();
  $supBillet = $bdd->prepare('DELETE FROM billet WHERE id=:id');
  $supBillet->execute(array(
    'id'=> $_GET['id']
  ));

  return $supBillet;
}

$supBillet = supbillet();
