<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'kawahedukasi';

$conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);


// Nilai tertinggi dan gaji tertinggi
$query2 = "SELECT * FROM kawahedukasi WHERE gaji = (SELECT MAX(gaji) FROM kawahedukasi) AND kelas = 'BACKEND'";
// $query2 = "SELECT MAX(gaji) FROM kawahedukasi WHERE kelas = 'BACKEND'";
$sql = $conn->prepare($query2);
$sql->execute();
