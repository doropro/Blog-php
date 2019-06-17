<?php


///////////permet de mettre bcq de code html dans une variable

while($donnees = $affichagePosts->fetch()){?>
<div class="container mt-5">
  <h3>
    <?php echo $donnees["titre"];?>
    <em>le <?php echo $donnees["date_creation"];?></em>
  </h3>
  <p class="billet">
    <?php echo ($donnees['contenu']);
    ?>
    <br/>
    <em><a href="controllers/post_controller.php?billet=<?php echo $donnees['id'];//transmet le n°debillet dans l'url ?>">Commentaires</a></em>
    <em><a href="controllers/modif_controller.php?billet=<?php echo $donnees['id'];?>">Modifier le post</a></em>
  </p>
</div>
  <?php
  }
  ?>
  <div class="container">
        <em><a href=controllers/ajoutbillet_controller.php>Ajouter un nouveau post</a></em>
  </div>
