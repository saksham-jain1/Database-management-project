<?php
session_start();
?>

<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="CSS1.css"/>
</head>
<body>
<center><h1>Pharmacy Management System</h1>
<a href="logout.php">
<button type="submit"style="margin:0px;padding:15px;height:auto;width:auto;float:right;border-radius:0px;font-size:20px;background-color:#ff3939;">Logout</button></a>

<h2> Welcome <?php echo $_SESSION['username']; ?></h2>
<br>
<form>
<legend><h2>Home</h2></legend>
<br>
<button type="submit" formaction="sell.php">Sell Details</button>
<button type="submit" formaction="purchase.php">Purchase Details</button>
<button type="submit" formaction="newmed.php">New Medicines</button>
<button type="submit" formaction="wholesaler.php">New Wholesaler</button>
<button type="submit" formaction="stocks.php">Stocks</button>
<button type="submit" formaction="update.php">Update Records</button>
</form>
</center>
</body>
</html>