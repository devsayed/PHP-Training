<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$intarr = array(10,20,30,40,50,60,70,80,90);
foreach ($intarr as $value) {
    echo  $value . ", ";
}
foreach ($intarr as $key => $value) {
     echo  $key . ":" . $value ."</br>";
}
