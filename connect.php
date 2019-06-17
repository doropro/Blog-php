<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'phpmyadmin','user');
}
  catch(Exception $bdd)
{
  die('Erreur : '.$bdd->getMessage());
}

?>
