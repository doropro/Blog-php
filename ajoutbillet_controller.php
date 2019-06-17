<?php

require('models/model.php');
require('templates/header.php');
require('templates/footer.php');
$nxBillet = addbillet();
require('views/ajoutbillet_view.php');
