<?php
session_start();
$name=$_POST['med_name'];
$cname=$_POST['med_company_name'];
$price=$_POST['med_price'];
$age=$_POST['med_age_limit'];
$q1="insert into medicine(name,company,price,for_age_greaterthen) values('$name','$cname',$price,$age);";
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$R=mysqli_query($con,$q1);
if($R==1)
{
	header('location:http://localhost/project/home.php');
}
else
{
	header('location:http://localhost/project/newmed.php');
}
?>