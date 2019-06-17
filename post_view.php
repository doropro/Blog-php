


<div class="container mt-5">
  <h3>

    <?php echo $post['id'];?>
    <?php echo htmlspecialchars($post['titre']);?>
    <em>le <?php echo $post['date_creation'];?></em>
  </h3>
  <p class="billet">
    <?php
      echo nl2br(htmlspecialchars($post['contenu']));
    ?>
  </br>

</p>
</div>


<div class="container mt-5">
<h3>Commentaires</h3>

<?php
  while ($donnees = $affichageCom->fetch()){
?>
  <h6><strong><?php echo htmlspecialchars($donnees['auteur']);?></strong> le <?php echo $donnees['date_commentaire'];?></h6>
    <p><?php echo nl2br(htmlspecialchars($donnees['commentaire']));?></p>
<?php
}
?>
<em><a href="controllers/ajoutcom_controller.php?billet=<?php echo $donnees['id'];?>">Ajouter un commentaire</a></em>
</div>

<div class="container mt-5">
   <h3>Ajouter un commentaire</h3>

     <form class="mt-5" method="GET">
       <label for="auteur">Auteur</label> : <input type="text" name="auteur" />
       <label for="commentaire">Commentaire</label> : <input type="text" name="commentaire" />
       <input type="hidden" name="billet" value="<?php echo $_GET['billet']?>"/>
       <input type="submit" name="submit" />
     </form>
 </div>
