<?php

while($donnees = $affichagePosts->fetch()){?>

<div class="container mt-5">
  <h3>
    <?= $donnees["titre"];?>
    <em>le <?= $donnees["date_creation"];?></em>
  </h3>
    <p class="billet">
    <?= $donnees['contenu'];
    ?>
    <br/>

    <em><a href="index.php?page=post&amp;billet=<?= $donnees['id'];//transmet le n°debillet dans l'url ?>">Commentaires</a></em>
    <em><a href="index.php?page=modif&amp;billet=<?= $donnees['id'];?>">Modifier le post</a></em>
  </p>
</div>

  <?php
  }
  ?>
<div class="container">
    <em><a href="index.php?page=ajoutbillet">Ajouter un nouveau post</a></em>
</div>
<script src="assets/js/app.js"></script>
