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


<div class="container">
<h3>Modifier le post</h3>
<form>
  <label for="titre">Nouveau titre : <input type="text" name="titre"/>
  <label for="contenu">Nouveau Contenu : <input type="text" name="contenu"/>
  <input type="hidden" name="billet" value="<?php echo $_GET['billet']?>"/>
  <input type="submit" name="submit"/>
</form>
</div>
