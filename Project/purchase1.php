<?php
session_start();
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'project');
$q1="insert into whols_med values($_GET[id],$_GET[med_id],$_GET[quantity]);";
$q2="update medicine set quantity=(quantity+$_GET[quantity]) where med_id=$_GET[med_id];";
mysqli_query($con,$q1);
mysqli_query($con,$q2);
mysqli_close($con);
?>
