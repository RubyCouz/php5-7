<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
<?php
//création du tableau associatif country
$country = array (
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme');
  $country[51] = 'Marne';
  echo $country [51];

?>
    </p>
  </body>
</html>
