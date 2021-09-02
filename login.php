<?php
session_start();
?>
<html>
	<head>
	<title>Login page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<br><br><br>
		<h2 class="text-center"> Login</h2>
		<br><br><br>
			<?php
			// print_r($_POST);
				if(isset($_COOKIE['success']))
				{
				  echo "<p class='alert alert-success'>".$_COOKIE['success']."</p>";
				}
				if(isset($_COOKIE['error']))
				{
				  echo "<p class='alert alert-danger'>".$_COOKIE['error']."</p>";
				}
				function filterData($data)
				{
					return addslashes(strip_tags(trim($data)));
				}
				if(isset($_POST['submit']))
				{
					$Email=(isset($_POST['email']))? ($_POST['email']):'';
					$Password=(isset($_POST['pwd']))? ($_POST['pwd']):'';
					include("connect.php");
					$sql="SELECT * FROM user WHERE UserEmail='$Email' AND userPassword='$Password'" ;
					// echo $sql;die;
					$res=mysqli_query($con,$sql);
					$row=mysqli_fetch_assoc($res);
					// print_r($row);die;
					$count=mysqli_num_rows($res);
					// print_r($count);die;
					if($count >= 1)
					{
						setcookie("success", "Login successfully", time()+10);
						$_SESSION['UserEmail']= $row['UserEmail'];
						$_SESSION['UserMobile']= $row['UserMobile'];
						$_SESSION['Is_Login']=true;
						header("Location:home.php");
					}else{
					   setcookie("error", "SORRY Invalid credentials, Enter Valid Email And Password", time()+10);
					   header("location:login.php");
					}
				}
			?>
			<form action="" method="POST">
				<a class="btn btn-primary" href="signup.php">ADD</a>
				<a class="btn btn-success" href="login.php">login</a>

				
				<hr>
				<div class="form-group">
				<label>Email</label></br>
				<input type="text" class="form-control" name="email" id="email" required value="">
				</div>

				<div class="form-group">
				<label> Password</label></br>
				<input type="password" class="form-control" name="pwd" id="pwd" required value=""></br>
				</div>
				</br>


				<input class="btn btn-success " type="submit" name="submit"  value="login">			
			</form>
		</div>
	</body>
</html>
