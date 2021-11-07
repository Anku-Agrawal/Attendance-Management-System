<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "akash05";
$dbname = "attsystem";

$con = mysqli_connect($host, $dbuser, $dbpass, $dbname, "3307");

if(mysqli_connect_error()) 
{ 
 echo "Connection establishment failed!"; 
}

?>