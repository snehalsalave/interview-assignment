<?php include("header.php"); ?>

<?php
	if(isset($_REQUEST['id'])&& !empty($_REQUEST['id']))
	{
		$id=$_REQUEST['id'];
		$sql="select * from user where id='$id'";
		// echo $sql;die;
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_assoc($res);
?>

<?php

print_r($_POST);
function filterData($data)
{
    return addslashes(strip_tags(trim($data)));
}
if(isset($_POST['submit'])) 
{
    $Name=(isset($_POST['name'])) ? ($_POST['name']) : '';
    $Email=(isset($_POST['email'])) ? ($_POST['email']) : '';
    $Mobile=(isset($_POST['mobile'])) ?  ($_POST['mobile']) : '';    
   include("connect.php");
   $sql="UPDATE user SET UserName='$Name', UserEmail='$Email', UserMobile='$Mobile' where id=$id";
   // echo $sql;die;
   $res=mysqli_query($con,$sql);
  //  echo $res;die;
   if(!mysqli_error($con))
   {
       setcookie("success", "User Updated successfully",time()+10);
       header("Location:user_view.php");
   }else
   {
      setcookie("Error","SORRY, Something went wrong User NOT updated",time()+10);
      header("Location:user_edit.php?id=".$id);
   }
  }
?>
    <form action="" method="post">
        <div class="container">
            <h2>Edit Page</h2>

         <a class="btn btn-success" href="User_view.php">Back</a>
         <hr>
            <div class="form-group">
                <label>Full Name</label></br>
                <input class="form-control" type="text" name=name id=Name required value="<?php echo $row['UserName']; ?>" /></br>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['UserEmail']; ?>">
            </div>

            <div class="form-group">
                <label>Mobile</label></br>
                <input class="form-control" type="text" name=mobile id=mobile required value="<?php echo $row['UserMobile']; ?>"  minlength="10" maxlength="12"/></br>
            </div>

            <button type="submit"   name="submit" class="btn btn-primary form-control" value="Edit">Edit</button>
   
    </div>
	 </form>
 <?php
 }else{
     echo "Record Not Found";
 } ?>
<?php } else{
echo "unauthorized access";
}
?>

<?php include("footer.php"); ?>