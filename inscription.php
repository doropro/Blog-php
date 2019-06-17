<?php
require('header.php');
require('connect.php');

  $req = $bdd->prepare('INSERT INTO membres(pseudo, pwd, mail) VALUES(:pseudo, :pwd, :mail)');
  $req->execute(array(
  'pseudo' => $_GET['pseudo'],
  'pwd' => $_GET['pwd'],
  'mail' => $_GET['mail'],

  ));

?>
<div class="container mt-5">
  <h2 class="mb-5">Inscription : </h2>
    <form method="GET">
      <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" />
      <label for="password">Mot de passe</label> : <input type="password" name="pwd" />
      <label for="mail">Adresse email</label> : <input type="text" name="mail" />
      <input type="submit" name="submit"/>
    </form>
</div>
