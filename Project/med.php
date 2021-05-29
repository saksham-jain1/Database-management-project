<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1="select med_id,name,company from medicine where for_age_greaterthen<=$_GET[age] order by name;";
$q2="insert into customer(name,age,phone_no) values('$_GET[name]',$_GET[age],$_GET[phone]);";
$result=mysqli_query($con,$q1);
mysqli_query($con,$q2);
$num=mysqli_num_rows($result);
echo "<option value=\"0\">Select Medicine</option>";
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<option value=\"$row[med_id]\">$row[name]--$row[company]</option>";
}
mysqli_close($con);
?>
