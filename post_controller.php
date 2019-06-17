<?php
require('models/model.php');
require('templates/header.php');
require('templates/footer.php');
$post = getPost($_GET['billet']);
$affichageCom = getComments($_GET['billet']);
$nxcomment = addComment();
require('views/post_view.php');


/*if (isset($_GET['billet']){

    $post = getPost($_GET['id']);
    $afichageCom = getComments($_GET['id']);
    require('post_view.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}
*/
