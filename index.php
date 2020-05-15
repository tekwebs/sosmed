<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <title>Sign in</title>
  </head>
  <body>


  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo ' <script src="include/js/sweetalert.min.js"></script>';
            echo '<script language="javascript">';
            echo 'sweetAlert("Oops..","Password Or Username Wrong","error")';
            echo '</script>';
      
    }else if($_GET['pesan'] == "belum_login"){
      echo ' <script src="include/js/sweetalert.min.js"></script>';
            echo '<script language="javascript">';
            echo 'alert("Anda harus login untuk mengakses halaman admin")';
            echo '</script>';
    }
  }
  ?>
      <div class="d-flex justify-content-center p-5 align-items-center">
        <div class="card" style="width: 500px; margin-top: 10vh;">
            <div class="card-header p-5" style="background: rgb(183,33,255);
            background: linear-gradient(340deg, rgba(183,33,255,1) 0%, rgba(33,212,253,1) 100%);">
                <h1 class="text-white text-center">Login!</h1>
              </div>
              <div class="card-body ">
            <form  action="cek_login.php" method="post">
                <div class="form-group">
                  <label for="usr">Username</label>
                 <input name="username" id="usr" type="text" class="form-control" placeholder="Username" required="required">   
                </div>
                <div class="form-group">
                  <label for="pass">Password</label>
                  <input name="password" id="pass" type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me!</label>
                </div>
                <p>Belum Punya Akun ? <a href="daftar.php">Klik Disini</a></p>
                <button type="submit" class="btn text-white float-right" style="background: rgb(183,33,255);
                background: linear-gradient(340deg, rgba(183,33,255,1) 0%, rgba(33,212,253,1) 100%);">Submit</button>
              </form>
              </div>
          </div>
      </div>

   <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>