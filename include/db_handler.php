<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="FoodOrderingSystemDB";
//change this to new db when done
$conn=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("could not connect to database: " .mysqli_connect_errno());
}