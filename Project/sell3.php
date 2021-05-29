<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1="insert into account(amount,date) values('$_GET[total]',sysdate());";
mysqli_query($con,$q1);
mysqli_close($con);
?>