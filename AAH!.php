<?php

fscanf(STDIN, "%s", $input1);
fscanf(STDIN, "%s", $input2);
if (strlen($input1) >= strlen($input2)) {
    echo("go");
}
else {
    echo("no");
}

?>