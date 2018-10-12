<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";

$conn = new mysqli($host, $username, $password, $db);

if (isset($_POST['kirim'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jenis'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['alamat'];
	$pass = $_POST['pass'];
	# code...

	$qry = $conn -> query("INSERT INTO 'data_mhs' VALUES ('nim','nama','$kelas','jenis','hobi','fakultas','alamat','password')");
	if ($qry) {
		echo "Pendaftaran Berhasil, Silahkan <a href=login.php>Masuk</a>";
		# code...
	}else{
		echo "Pendaftaran Gagal";
	}
}
?>