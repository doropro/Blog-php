<?php

function getPosts(){

  require('connects/connect.php');
  /////////affichage des posts
  $affichagePosts = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billet ORDER BY date_creation');
  $affichagePosts->execute();
  //////////on recupere la liste des billets dans la variable
  return $affichagePosts;
}

function getPost($postid){

  require('connects/connect.php');
  /////////////affichage du post
  $affichagePost = $bdd->prepare('SELECT * FROM billet WHERE id = ?');
  $affichagePost->execute(array($postid));
  $post = $affichagePost->fetch();

  return $post;
}

function getComments($postid){

  require('connects/connect.php');
  ////////////affichage des commentaires
  $affichageCom = $bdd->prepare('SELECT auteur, commentaire, date_commentaire FROM commentaire WHERE billet = ? ORDER BY date_commentaire');
  $affichageCom->execute(array($postid));

  return $affichageCom;
}

function addComment (){

    require('connects/connect.php');
  $nxcomment = $bdd->prepare('INSERT INTO commentaire (billet, auteur, commentaire) VALUES (:billet, :auteur, :commentaire)');
  $nxcomment->execute(array(
    'billet' => $_GET['billet'],
    'auteur' => $_GET['auteur'],
    'commentaire' => $_GET['commentaire'],

  ));

  return $nxcomment;
}

function addbillet(){
  require('connects/connect.php');
  $nxBillet = $bdd->prepare('INSERT INTO billet (titre, contenu) VALUES (:titre, :contenu)');
  $nxBillet->execute(array(
    'titre' => $_GET['titre'],
    'contenu' => $_GET['contenu'],
  ));

  return $nxBillet;
}

function supbillet(){
  require('connects/connect.php');
  //$affichageBillet = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billet ORDER BY date_creation DESC LIMIT 0,5');
  //$affichageBillet->execute();
  $supBillet = $bdd->prepare('DELETE FROM billet WHERE id=:id');
  $supBillet->execute(array(
    'id'=> $_GET['id']
  ));

  return $supBillet;
}

 ?>
