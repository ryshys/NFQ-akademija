<?php
header('Content-type: text/html; charset=utf-8');
require 'connection.php';

$conn    = Connect();
$results = $conn->query("SELECT `ID`,`vardas`,`pavarde`,`email`,`telefonas`,`kiekis`,`zinute` FROM uzsakymu_forma");

echo '<table class="box" border="1">';
while($row = $results->fetch_array()) {
    echo '<tr>';
    echo '<td>'.$row["ID"].'</td>';
    echo '<td>'.$row["vardas"].'</td>';
    echo '<td>'.$row["pavarde"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '<td>'.$row["telefonas"].'</td>';
    echo '<td>'.$row["zinute"].'</td>';
    echo '<td>'.$row["kiekis"].'</td>';
    echo '</tr>';

}   
print '</table>';

$results->free();

$conn->close();
?>