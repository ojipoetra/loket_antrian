<?php
// Koneksi ke database (gantilah sesuai dengan informasi database Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "loket";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Ambil nomor antrian terakhir dari database
$query = "SELECT MAX(nomor_antrian) AS max_nomor FROM antrian";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nomor_antrian = $row["max_nomor"] + 1;
} else {
    $nomor_antrian = 1;
}

// Tambahkan nomor antrian baru ke database
$insert_query = "INSERT INTO antrian (nomor_antrian) VALUES ($nomor_antrian)";
$conn->query($insert_query);

// Tutup koneksi
$conn->close();

// Kembalikan nomor antrian yang baru diambil
echo $nomor_antrian;
?>
