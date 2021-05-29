<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q="select *from medicine;";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	echo "<tr><td>$row[med_id]</td><td>$row[name]</td><td>$row[company]</td><td>$row[quantity]</td><td>$row[price]</td></tr>";
}
echo "</table></center>";
mysqli_close($con);
?>