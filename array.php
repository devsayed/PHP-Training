<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Array :';
$my_arr = array(1,2,3,4);
echo "$my_arr[1] </br>";
$my_arr1 = array("y",56,4,array(1,5,"g",7));
echo $my_arr1[3][1] . "</br>";
$asso_arr = array("f_name" => "Sayed" , "l_name" => "Ali");
echo "{$asso_arr[f_name]} {$asso_arr[l_name]}";