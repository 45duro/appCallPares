<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'proyectodellamadas';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn,$sql);
header("Location:tables.php");
?>