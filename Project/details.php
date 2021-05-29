<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q="select *from medicine where med_id='$_GET[med_id]';";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<tr><td>$row[med_id]</td><td>$row[name]</td><td>$row[company]</td><td><input type=\"number\" value=\"0\" min=\"0\" max=\"$row[quantity]\"/></td><td>$row[price]</td><td></td></tr>";
}
mysqli_close($con);
?>