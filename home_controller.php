<?php

require('models/model.php');
require('templates/header.php');
require('templates/footer.php');
$affichagePosts = getPosts();
require('views/home_view.php');
