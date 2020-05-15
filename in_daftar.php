<?php
    include 'koneksi.php';
if(isset($_POST['insert'])){
	
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$telfon = $_POST['telfon'];

$input = "INSERT INTO user(`id`, `username`, `password`,`email`, `no_telfon`, `name`) VALUES (NULL,'$username','$password','$email','$telfon','$nama')";
$result = mysqli_query($koneksi, $input);

if($result){
	header('Location: index.php');
}else{
	echo "mohon maaf";
}

}

?>