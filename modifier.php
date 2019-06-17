<?php
require('connect.php');
require('header.php');
require('footer.php');

/////////////affichage du post
$affichageBillet = $bdd->prepare('SELECT * FROM billet WHERE id = ?');
$affichageBillet->execute(array($_GET['billet']));
$donnees = $affichageBillet->fetch();

$modifBillet = $bdd->prepare('UPDATE billet SET titre=:titre contenu=:contenu WHERE billet=:billet');
$modifBillet->execute(array(
  'titre'=> $_GET['titre'],
  'contenu' => $_GET['contenu'],
  'billet' => $_GET['billet'],
));

 ?>
 <div class="container mt-5">
   <h3>
     <?php echo $donnees['billet'];?>
     <?php echo htmlspecialchars($donnees['titre']);?>
     <em>le <?php echo $donnees['date_creation'];?></em>
   </h3>
   <p class="billet">
     <?php
       echo nl2br(htmlspecialchars($donnees['contenu']));
     ?>
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
