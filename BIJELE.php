<?php

$num = fgets(STDIN);
$numbs = explode(" ", $num);
$tXadrez = [1, 1, 2, 2, 2, 8];
for($i = 0; $i < count($numbs); $i++){
  print($tXadrez[$i] - (int)$numbs[$i]. " ");
}
?>