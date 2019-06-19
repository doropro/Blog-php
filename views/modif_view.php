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

<div class="container">
  <h3>Modifier le post</h3>
    <form>
      <label for="titre">Nouveau titre : <input type="text" name="titre"/>
      <label for="contenu">Nouveau Contenu : <input type="text" name="contenu"/>
      <input type="hidden" name="billet" value="<?= str_secur($_GET['billet'])?>"/>
      <input type="submit" name="submitmod"/>
    </form>
</div>
