<?php
require('models/model.php');
require('templates/header.php');
require('templates/footer.php');
$affichagePosts = getPosts();
$supBillet = supbillet();
require('views/supbillet_view.php');
