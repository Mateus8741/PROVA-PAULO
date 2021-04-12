<?php

$arr = explode("-", fgets(STDIN));

foreach ($arr as $name) {
    echo($name[0]);
}

?>