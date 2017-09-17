<?php

function Connect()
{
 $dbhost = "localhost";
 $dbuser = "nfq";
 $dbpass = "ibumetin123";
 $dbname = "nfq";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>