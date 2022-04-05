<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="FoodOrderingSystemDB";

$conn=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("could not connect to database: " .mysqli_connect_errno());
}