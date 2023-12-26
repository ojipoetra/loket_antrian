
<?php
include "config.php";
// ... (Koneksi database)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $loket_nomor = $_POST["loket_add"];

    // Menyimpan data ke database
    $sql = "INSERT INTO jumlah VALUES ($loket_nomor)";

    if ($connection->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

// Menutup koneksi database
$connection->close();
