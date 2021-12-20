<?php

$server = "localhost";
$user = "id18080047_root";
$password = "B4jOxJ-nJvUq$/(1";
$nama_database = "id18080047_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>