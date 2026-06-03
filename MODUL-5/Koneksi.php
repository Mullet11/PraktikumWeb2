<?php

function koneksi()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mullet_book";
    $conn = mysqli_connect("localhost", "root", "", "mullet_book");
    
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}
?>