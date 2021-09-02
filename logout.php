<?php

session_start();
session_destroy();
 setcookie("success", "You Logout Successfully",time()+10);
header("Location: login.php");

?>