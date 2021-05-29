<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1= "update account set status='$_POST[pay]' where status is null;";
$q2="insert into cust_acc(bill_no,cust_no) values((select max(bill_no) from account),(select max(cust_no) from customer));";
mysqli_query($con,$q1);
mysqli_query($con,$q2);
header('location:http://localhost/Project/sell.php');
mysqli_close($con);
?>