<?php
session_start();
?>

<html>
<head>
<title>Stocks</title>
<link rel="stylesheet" type="text/css" href="CSS1.css"/>
<script type="text/javascript">
function f()
{
	document.getElementsByTagName('iframe')[0].srcdoc="<center><table border=\"2px\" cellpadding=\"10px\"><tr><th>Medicine Id</th><th>Medicine Name</th><th>Company</th><th>Quantity</th><th>Price</th></tr>";
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/project/details2.php","false");
	req.send();
	req.onreadystatechange=function(){
	if(req.readyState==4&&req.status==200)
		{
			document.getElementsByTagName("iframe")[0].srcdoc+=req.responseText;
		}
	};
}
</script>
</head>
<body onload="f()">
<center><h1>Pharmacy Management System</h1>
<a href="home.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:left;border-radius:0px;font-size:20px;background-color:#0ae623;">Home</button></a>
<a href="logout.php">
<button type="submit" style="margin:0px;padding:15px;height:auto;width:auto;float:right;border-radius:0px;font-size:20px;background-color:#ff3939;">Logout</button></a>
<br>
<form>
<legend><h2>Stocks</h2></legend>
<iframe scrolling="yes" style="border:none;" height="95%" width="100%">
</iframe>
</form>
</center>
</body>
</html>