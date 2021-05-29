<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1="insert into account(amount,date) values(-$_GET[total],sysdate());";
$q2="insert into whols_acc(bill_no,seller_id) values((select max(bill_no) from account),$_GET[id]);";
mysqli_query($con,$q1);
mysqli_query($con,$q2);
mysqli_close($con);
?>