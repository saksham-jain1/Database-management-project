<?php
session_start();
?>

<html>
<head>
<title>Add Medicine</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
<style>
</style>
</head>
<body>
<center><h1>Pharmacy Management System</h1></center>
<a href="home.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:left;border-radius:0px;font-size:20px;background-color:#0ae623;">Home</button></a>
<a href="logout.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:right;border-radius:0px;font-size:20px;background-color:#ff3939;">Logout</button></a>
<br>
<form action="addmed1.php" method="post" style="height:auto;">
<center><legend><h2>Add Medicine<h2></legend></center>
<br>
<br>
<br><center>
Medicine Name: <input style="margin-left:51px;margin-right:10px;" type="text" placeholder="Medicine's Name" name="med_name" required/>
<br>

Medicine Company Name: <input style="margin-left:13px;margin-right:40px;" type="text" placeholder="Company's Name" name="med_company_name" required/>
<br>
Medicine Price: <input style="margin-left:54px;margin-right:10px;" type="number" min="0" max="1000" placeholder="Price" name="med_price" required/>
<br>
Age Limit for Medicine: <input style="margin-left:30px;margin-right:40px;" type="number" min="0" max="199" placeholder="Age" name="med_age_limit" required/>
<br>
<input id="id5" type="reset"/>
<input id="id1" type="submit"/>
</center>
</form>
</body>
</html>
