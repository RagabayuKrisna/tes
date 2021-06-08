<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "dbmahasiswa";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tb_mahasiswa_nilai, tb_mahasiswa, tb_matakuliah WHERE mk_id.tb_mahasiswa_nilai = 'MK303' and mhs_id.tb_mahasiwa == mhs_id.tb_mahasiswa_nilai asc";
$result = $conn->query($sql);


$conn->close();
?>