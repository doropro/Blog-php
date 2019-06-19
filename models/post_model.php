<?php

function getPost($postid){

  require('connect/connect.php');
  /////////////affichage du post
  $affichagePost = $bdd->prepare('SELECT * FROM billet WHERE id = ?');
  $affichagePost->execute(array($postid));
  $post = $affichagePost->fetch();

  return $post;
}

$post = getPost($_GET['billet']);

function getComments($postid){

  require('connect/connect.php');
  ////////////affichage des commentaires
  $affichageCom = $bdd->prepare('SELECT auteur, commentaire, date_commentaire FROM commentaire WHERE billet = ? ORDER BY date_commentaire');
  $affichageCom->execute(array($postid));

  return $affichageCom;
}

$affichageCom = getComments($_GET['billet']);

function addComment (){

    require('connect/connect.php');
  $nxcomment = $bdd->prepare('INSERT INTO commentaire (billet, auteur, commentaire) VALUES (:billet, :auteur, :commentaire)');
  $nxcomment->execute(array(
    'billet' => $_GET['billet'],
    'auteur' => $_GET['auteur'],
    'commentaire' => $_GET['commentaire'],

  ));

  return $nxcomment;
}

$nxcomment = addComment();
