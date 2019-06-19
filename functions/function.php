<?php

//permet de sécuriser une chaine de caractère
function str_secur($string) {
  return trim(htmlspecialchars($string));
}

//debug plus lisible des #variables
function debug($var) {
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}
 ?>
