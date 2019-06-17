<?php
while($donnees = $affichagePosts->fetch()){?>
<div class="container mt-5">
  <h3>
    <?php echo htmlspecialchars($donnees["titre"]);?>
    <em>le <?php echo $donnees["date_creation"];?></em>
  </h3>
  <p class="billet">
    <?php echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br/>

    <em><a href="controllers/supbillet_controller.php?id=<?php echo $donnees['id'];?>&titre=<?= $donnees['titre'];?>&contenu=<?= $donnees['contenu'];?>&date_creation=<?= $donnees['date_creation'];?>">Supprimer</a></em>
  </p>
</div>
  <?php
  }
  ?>
