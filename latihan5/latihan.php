<?php
// variable Scope / lingkup variable
$x = 10;

function tampilx() {
    global $x;
    echo $x;
}

tampilx();



?> 