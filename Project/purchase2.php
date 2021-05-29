<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1= "update account set status='$_POST[pay]' where status is null;";
mysqli_query($con,$q1);
header('location:http://localhost/Project/home.php');
mysqli_close($con);
?>