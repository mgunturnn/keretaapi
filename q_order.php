<?php
require 'server/config.php';

session_start();
$user_id = $_SESSION['user_id'];


if (isset($_POST['btn-order'])) {

	$jadwal = $_POST['id_jadwal'];
	$nama = mysqli_real_escape_string($conn, $_POST['nama']);
	$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
	$kategori_penumpang = mysqli_real_escape_string($conn, $_POST['kategori_penumpang']);
	$tgl_order = mysqli_real_escape_string($conn, $_POST['tgl_order']);
	$tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
	$jml_penumpang = mysqli_real_escape_string($conn, $_POST['jml_penumpang']);
	$id_user = $user_id;
	$id_jadwal = $jadwal;
	// echo "<script type='text/javascript'>alert('$jadwal $nama $no_hp $kategori_penumpang $tgl_order $jml_penumpang $id_user $id_jadwal');</script>";

	// order
	$sql = " INSERT INTO `order` (nama, no_hp, kategori_penumpang, tgl_order, jml_penumpang, id_user, id_jadwal ) VALUES ('$nama', '$no_hp', '$kategori_penumpang', '$tgl_order', '$jml_penumpang', '$id_user', '$id_jadwal' )";
	$result = mysqli_query($conn, $sql);
	// tiket (adding durasi)
	$sql2 = "INSERT INTO tiket (nama, no_hp, kategori_penumpang, tgl_berangkat, jml_penumpang, id_user, id_jadwal ) VALUES ('$nama', '$no_hp', '$kategori_penumpang', '$tanggal', '$jml_penumpang', '$id_user', '$id_jadwal')";
	$result2 = mysqli_query($conn, $sql2);

	if ($result === true) {
		header("location:payment.php");
	} else {

		$message = "Gagal memasukan ke database";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
