<?php
session_start();
if( !isset($_SESSION['Is_Login']) && $_SESSION['Is_Login'] != true){
	header("Location:login.php");
}
?>
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
<div class="container">
<h1 class="text-center">User System</h1>
<?php 
include("menu.php");
include("connect.php");
?>
<?php if( isset($_COOKIE['success']) ){ ?>
<div class="alert alert-success" role="alert">
	<?php echo $_COOKIE['success']; ?> 
</div>
<?php } ?>

<?php if( isset($_COOKIE['error']) ){ ?>
<div class="alert alert-danger" role="alert">
	<?php echo $_COOKIE['error']; ?> 
</div>
<?php } ?>


