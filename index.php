<?php

include_once 'functions/function.php';
//déclaration de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
  } else {
    $page = 'home';
  }

$allPages = scandir('controllers/');

if(!empty($_GET) && isset($_GET['submitcom'])){
  include_once 'controllers/post_controller.php';
}

elseif (!empty($_GET) && isset($_GET['submitbil'])) {
  include_once 'controllers/ajoutbillet_controller.php';
}

elseif (!empty($_GET) && isset($_GET['submitsup'])) {
  include_once 'controllers/supbillet_controller.php';
}

elseif (!empty($_GET) && isset($_GET['submitsup'])) {
  include_once 'controllers/modif_controller.php';
}

elseif (in_array($page.'_controller.php', $allPages)) {
  include_once 'controllers/'.$page.'_controller.php';
}

else {
  echo "erreur 404";
}





 ?>
