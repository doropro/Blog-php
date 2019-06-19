<?php

function addbillet(){
  require('connect/connect.php');
  $nxBillet = $bdd->prepare('INSERT INTO billet (titre, contenu) VALUES (:titre, :contenu)');
  $nxBillet->execute(array(
    'titre' => $_GET['titre'],
    'contenu' => $_GET['contenu'],
  ));

  return $nxBillet;
}

$nxBillet = addbillet();
