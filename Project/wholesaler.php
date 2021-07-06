<?php
session_start();
?>

<html>
<head>
<title>Add Wholesaler</title>
<link rel="stylesheet" type="text/css" href="CSS1.css"/>
<style>
#b1:hover{font-size:15px;}
</style>
</head>
<body>
<center><h1>Pharmacy Management System</h1></center>
<a href="home.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:left;border-radius:0px;font-size:20px;background-color:#0ae623;">Home</button></a>
<a href="logout.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:right;border-radius:0px;font-size:20px;background-color:#ff3939;">Logout</button></a>
<br>
<form action="wholesaler1.php" method="post" style="height:auto;">
<center><legend><h2>Add Wholesaler<h2></legend></center>
<br>
<br>
<br><center>
Wholesaler Name: <input style="margin-left:10px;margin-right:10px;" type="text" placeholder="Name" name="name" required/>
<br>
Phone No.: <input style="margin-left:35px;margin-right:40px;" id="id3" type="number" min="6000000000" max="9999999999" placeholder="Phone No." name="phoneno" required/>
<br>
E-mail Id: <input style="margin-left:63px;margin-right:10px;" type="email" placeholder="E-mail Id" name="email" required/>
<br>
<input id="id5" type="reset"/>
<input id="id1" type="submit"/>
</center>
</form>
</body>
</html>
