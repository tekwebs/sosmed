<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
//md5 untuk menecrypt
$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if($cek > 0){
	$_SESSION['username'] = $username;
	header("location:pages/timeline/index.php");	
}else{
	header("location:index.php?pesan=gagal");
}
?>