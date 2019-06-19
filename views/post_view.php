<div class="container mt-5">
  <h3>
    <?= str_secur($post['id']);?>
    <?= str_secur($post['titre']);?>
    <em>le <?= str_secur($post['date_creation']);?></em>
  </h3>
  <p class="billet">
    <?= str_secur($post['contenu']);?>
  </p>
</div>

<div class="container mt-5">
  <h3>Commentaires</h3>
    <?php while ($donnees = $affichageCom->fetch()){ ?>
  <h6><strong><?= $donnees['auteur'];?></strong> le <?= $donnees['date_commentaire'];?></h6>
    <p><?= $donnees['commentaire'];?></p>
    <?php
    }
    ?>
</div>

<div class="container mt-5">
   <h3>Ajouter un commentaire</h3>

     <form class="mt-5" method="GET" action="">
       <label for="auteur">Auteur</label> : <input type="text" name="auteur" />
       <label for="commentaire">Commentaire</label> : <input type="text" name="commentaire" />
       <input type="hidden" name="billet" value="<?php echo $_GET['billet']?>"/>
       <input type="submit" name="submitcom" />
     </form>
 </div>
