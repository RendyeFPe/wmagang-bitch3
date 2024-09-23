<?php
$server= "localhost";
$user = "root";
$password = "";
$dbname = "disperdagin";


// Create connection
$conn = new mysqli($server, $user, $password, $dbname);

// Check connection
if (!$conn) {
  echo ("koneksi gagal");
}

?>