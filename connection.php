<?php

function Connect()
{
 $dbhost = "localhost";
 $dbuser = "nfq";
 $dbpass = "";
 $dbname = "nfq";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
