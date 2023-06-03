<?php 
include 'server/config.php';

// $email = "";
// $password = "";
// $lvl = "user";

$nama = "";
$email = "";
$password = "";
$role = "user";


// $email = $_POST['email'];
// $pwd = $_POST['password'];
// $password = MD5($pwd);
// $level = $lvl;
// $date_created = date('Y-m-d H:i:s');

$nama = $_POST['nama'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$role = $role;

$sql = "INSERT INTO user (nama,email,password,role) VALUES ('$nama','$email','$password','$role')";
$result = mysqli_query($conn,$sql);
if ($result) {
	header("Location: login.php");
}else{
	header("Location: registration.php");
	echo "error : ".$sql;
}