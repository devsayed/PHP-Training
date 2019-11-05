<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$bool1 = True ;
$bool2 = False ;
$maxwidth = 980 ;
$var2 = "cat" ;
$var3 = 0 ;

echo " Constant</br>";
echo " max width : $maxwidth </br>";
define("MAX_WIDTH", 980);
echo " max width : ". MAX_WIDTH ." </br>";
echo $maxwidth += 1;


for ($i =0 ; $i <= 10 ; $i ++){
    if ($i == 5 ) {
        //continue;
        break;
    }
    echo "the I value : {$i} </br>";
}

$arr = array(1,2,3,4,5,6,7,8,9);









