<?php
session_start();
include "koneksi.php";

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, md5($_POST['password']));

$login = mysqli_query($db, "select *from tbl_user where username = '$username' and password = '$password'"); 

$cekdata = mysqli_num_rows($login); 
$data = mysqli_fetch_assoc($login);

if($cekdata >0){
	if($data['level'] == "administrator"){
		session_start();
		$_SESSION['user'] = $data['username'];
		$_SESSION['lv'] = $data['level'];
		header("Location: indexadmin.php");
	} else{
		echo "<script>window.alert('Username dan password Salah!'), window.location.replace('index.php')</script>"; 
}
	
}else{
	echo "<script>window.alert('Maaf Data tidak ditemukan'), window.location.replace('index.php')</script>";
}



?>
