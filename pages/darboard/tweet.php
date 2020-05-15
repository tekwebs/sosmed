<?php
    include '../../koneksi.php';
if(isset($_POST['insert'])){
	
	$id_user = $_POST['id_user'];
	$tweetposting = $_POST['tweetposting'];
	$tanggal = date("Y:m:d");
	$waktu = date("H:i:s");

$input = "INSERT INTO posting(`id`, `user`, `tweet`, `waktu`, `tanggal`) VALUES (NULL,'$id_user','$tweetposting','$tanggal','$waktu')";
$result = mysqli_query($koneksi, $input);

if($result){
	header('Location: index.php');
}else{
	echo "mohon maaf";
}

}

?>