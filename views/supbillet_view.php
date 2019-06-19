<?php while($donnees = $affichagePosts->fetch()){?>
<div class="container mt-5">
  <h3>
    <?= $donnees["titre"];?>
    <em>le <?= $donnees["date_creation"];?></em>
  </h3>
  <p class="billet">
    <?= $donnees['contenu'];?>
  </br>
    <em><a name="submitsup" href="index.php?page=supbillet&amp;id=<?= $donnees['id'];?>&titre=<?= $donnees['titre'];?>&contenu=<?= $donnees['contenu'];?>&date_creation=<?= $donnees['date_creation'];?>">Supprimer</a></em>
  </p>
</div>
  <?php
  }
  ?>
