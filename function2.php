<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var = "outside";
function foo() {
    $var = "inside";
}
foo();
echo "$var";

$var = "outside";
function foo2($vad) {
    $vad = "inside";
    return $vad;
}
$var = foo2($var);
echo "$var";

// default value for passed argument 
function color($color) {
    echo "</br></br> the color of the room is {$color}";
    
}
color($color = "red");