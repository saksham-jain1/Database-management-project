<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1="select seller_id,name from wholesalers;";
$result=mysqli_query($con,$q1);
$num=mysqli_num_rows($result);
echo "<option value=\"0\">Select seller</option>";
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<option value=\"$row[seller_id]\">$row[seller_id]. $row[name]</option>";
}
mysqli_close($con);
?>