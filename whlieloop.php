<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$count = 0;
while ($count <= 10){
    echo $count  ;
    if ($count < 10) {
      echo  ", ";
    }
    $count ++;
}