<?php 
	session_start();
      include '../../koneksi.php';
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:../../index.php?pesan=gagal");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>sosmed</title>
	<link rel="shortcut icon" href="">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
     include '../../include/navbar.php'
?>
<div class="container">
    <br>
    <br>
    <!-- ================== sampul ==================================================== -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="https://mcdn.wallpapersafari.com/medium/32/47/PkcWet.jpg"
        </div>
    </div>
    <!-- ================== sampul ==================================================== -->

    <div class="wall">
        <div class="profil">
            <h1><?php echo $_SESSION['username']; ?></h1>
        </div>
        <div class="status">
             <?php
                $user = $_SESSION['username'];
                $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE username = '$user ' "); 
                $row = mysqli_fetch_assoc($query)
            ?>
            <form action="tweet.php" method="post">
                    <input type="hidden" name="id_user" id="id_user" value="<?php  echo $row['id']?>" class="active"/>
					<div class="form-group">
                        <textarea style="resize:none; height: 150px; width: 100%;" name="tweetposting" id="tweetposting"></textarea>
					</div>        
					<div class="form-group">
                        <button  type="submit" name="insert" id="insert" class="btn btn-primary ">Tweet</button>
					</div>
			</form>
        </div>
         <?php
            $user1 = $row['id'];
            $query1 = "SELECT * FROM `posting` WHERE user = '$user1 ' ";
            $result1 = mysqli_query($koneksi, $query1);
            while($row1 = mysqli_fetch_array($result1)  )  
                  {  
        ?>
            <div class="tweet">
                <p><?php echo $row1['tweet'] ?></p>
            </div>
        <?php 
                }  
        ?> 
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
</body>
</html>