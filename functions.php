<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$str = "Below you will find a list of all your registered customer(s) in our branches,also you can view all customer's detailed Accounts.";
$intarr = array(10,20,30,40,50,60,70,80,90);
foreach ($intarr as $value) {
    echo  $value . ", ";
}
foreach ($intarr as $key => $value) {
     echo  $key . ":" . $value ."</br>";
}
function say_hellow() {
    echo "hellow world </br>";
}

say_hellow();

function say_hellow2($arg) {
    echo "hellow {$arg} </br>";
}

say_hellow2($str);

function say_hellow3($gteeting, $target, $punct) {
    echo "{$gteeting} {$target} {$punct} </br>";
}
say_hellow3("Hi", $str, "...!");

function addition($val1, $val2) {
    $sum = $val1 + $val2;
    return $sum;
}

$result = addition(12, 20);
echo $result;

function add_sub($val1, $val2) {
    $sum = $val1 + $val2;
    $sub = $val1 - $val2;
    $result = array($sum, $sub);
    return $result;
}
$val = add_sub(20, 5);
echo " Addition : " . $val[0] ."</br>";
echo " Subtraction : " . $val[1] ."</br>";
