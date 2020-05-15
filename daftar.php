<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div>
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
				</div>				
				<h4 class="modal-title">Daftar</h4>	
			</div>
			<div class="modal-body">
				<form action="in_daftar.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="nama" placeholder="nama" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div> 
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="email" required="required">	
					</div>  
					<div class="form-group">
						<input type="number" class="form-control" name="telfon" placeholder="telfon" required="required">		
					</div>      
					<div class="form-group">
						<button type="submit" name="insert" id="insert"  class="btn btn-primary btn-lg btn-block login-btn" >Daftar</button>
					</div>
				</form>
				<p><a href="index.php">Login</a></p>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   
</body>
</html>