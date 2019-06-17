<?php
function getPosts(){

  require('connect.php');
  /////////affichage des posts
  $affichagePosts = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billet ORDER BY date_creation');
  $affichagePosts->execute();
  //////////on recupere la liste des billets dans la variable
  return $affichagePosts;
}
$affichagePosts = getPosts();
