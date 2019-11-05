<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Helow world </br>";
$my_var = "Helow World </br>";
echo "{$my_var} Again.";
$first_str ="hi first str ";
$sec_str ="thi is the sec string";
$third = $first_str;
$third .= $sec_str;
echo "{$third} yes this is the str. </br>";

echo 'lower case : ' . strtolower($my_var);
echo 'Uper  case : ' . strtoupper($my_var);
echo 'Uper  case chr : ' . ucfirst($my_var);
echo 'Uper  case word : ' . ucwords($my_var);
echo 'lenght : ' . strlen($my_var);
echo 'Trim : ' . trim($my_var);
echo 'Uper  case chr : ' . ucfirst($my_var);
echo 'Uper  case word : ' . ucwords($my_var);

