<?php
require 'connection.php';

$conn    = Connect();

$vardas    = $conn->real_escape_string($_POST['vardas']);
$pavarde  = $conn->real_escape_string($_POST['pavarde']);
$email    = $conn->real_escape_string($_POST['email']);
$telefonas    = $conn->real_escape_string($_POST['telefonas']);
$kiekis    = $conn->real_escape_string($_POST['kiekis']);
$zinute    = $conn->real_escape_string($_POST['zinute']);
$query   = "INSERT into uzsakymu_forma (vardas,pavarde,email,telefonas,kiekis,zinute) VALUES('" . $vardas . "','" . $pavarde . "','" . $email . "','" . $telefonas . "','" . $kiekis . "','" . $zinute . "')";
$success = $conn->query($query);

if (!$success) {
    die("Can't do nothing. mysql is out of grandmas socks: ".$conn->error);
}

header("Location: http://fap.lt/uzsakymas_priimtas.html");

$conn->close();

?>