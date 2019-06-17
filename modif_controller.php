<?php
require('models/model.php');
require('templates/header.php');
require('templates/footer.php');
$post = getPost($_GET['billet']);
require('views/modif_view.php');
