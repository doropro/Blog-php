<?php
require('header.php');
require('footer.php');
require('connect.php');

$affichageBillet = $bdd->prepare('SELECT id, titre, contenu, date_creation FROM billet ORDER BY date_creation DESC LIMIT 0,5');
$affichageBillet->execute();

$supBillet = $bdd->prepare('DELETE FROM billet WHERE id=:id');
$supBillet->execute(array(
  'id'=> $_GET['id']
));


 while($donnees = $affichageBillet->fetch()){?>
 <div class="container mt-5">
   <h3>
     <?php echo htmlspecialchars($donnees["titre"]);?>
     <em>le <?php echo $donnees["date_creation"];?></em>
   </h3>
   <p class="billet">
     <?php echo nl2br(htmlspecialchars($donnees['contenu']));
     ?>
     <br/>
     
     <em><a href="supprim.php?id=<?php echo $donnees['id'];?>&titre=<?= $donnees['titre'];?>&contenu=<?= $donnees['contenu'];?>&date_creation=<?= $donnees['date_creation'];?>">Supprimer</a></em>
   </p>
 </div>
   <?php
   }
   ?>
