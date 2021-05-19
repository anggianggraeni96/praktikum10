<?php
//konfigurasi database
$servername = "localhost"; //inisialisasi servername : localhost
$username ="root"; //inisialisasi username : root
$password = ""; //inisialisasi password : (Tidak ada password)
$dbname = "latihan"; //inisialisasi dbname (db yang digunakanan) : latihan

//perintah untuk akses database
$koneksi = mysqli_connect($servername,$username,$password,$dbname);
?>