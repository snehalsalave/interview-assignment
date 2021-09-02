<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sigup Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    
print_r($_POST);
function filterData($data)
{
    return addslashes(strip_tags(trim($data)));
}
if(isset($_POST['submit'])) 
{
    $Name=(isset($_POST['name']))? ($_POST['name']):'';
    $Email=(isset($_POST['email']))? ($_POST['email']):'';
    $password=(isset($_POST['pwd']))? ($_POST['pwd']):'';
    $mobile=(isset($_POST['mobile']))?  ($_POST['mobile']):'';    
   include("connect.php");
   $sql="INSERT INTO user(id, UserName, UserEmail, userPassword, UserMobile) 
		VALUES
			('NULL','$Name','$Email','$password','$mobile')";
  //  echo $sql;die;
   $res=mysqli_query($con,$sql);
  //  echo $res;die;
   if(mysqli_affected_rows($con)==1)
   {
       setcookie("success","signup is successfully",time()+3);
       header("Location:home.php");
   }else
   {
      setcookie("error","Something went wrong, Try again",time()+3);
      header("Location:signup.php");
   }
  }
?>
    <form action="" method="post">
        <div class="container">
            <h2>Signup Page</h2>

         <a class="btn btn-success" href="login.php">Back</a>
         <hr>
            <div class="form-group">
                <label>Full Name</label></br>
                <input class="form-control" type="text" name=Name id=Name required value="" /></br>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd">
            </div>

            <div class="form-group">
                <label>Mobile</label></br>
                <input class="form-control" type="text" name=mobile id=mobile required value=""  minlength="10" maxlength="12"/></br>
            </div>


            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary" value="signup">Submit</button>
    </form>
    </div>

</body>

</html>