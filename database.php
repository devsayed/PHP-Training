<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// create db connection 

$connection = mysqli_connect("localhost", "root", "","sayed_learn");
if (!$connection) {
    die("cannot connect to mysql database : " . mysqli_connect_error());
}

// MYSQL query

$result = mysqli_query($connection, "select * from subject");
if (!$result) {
    die("Cannot query the database : " . mysqli_error($connection));
}
// get data from database
while ($row = mysqli_fetch_array($result)) {
    echo $row[1] ."---". $row[2] ."</br>";
}
// close the connection
mysqli_close($connection);