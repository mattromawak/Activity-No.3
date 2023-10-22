<?php
$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'activity no.3';

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
