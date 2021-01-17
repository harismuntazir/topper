<?php

$lmtd = explode(" ", $desc);

$i=0;
while ($i < 20) {
    echo @$lmtd[$i] . " ";
    $i++;
}