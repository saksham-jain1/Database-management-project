<?php
session_start();
?>

<html>
<head>
<title>Sell Page</title>
<link rel="stylesheet" type="text/css" href="CSS1.css"/>
<script type="text/javascript">
function f1()
{
	var name=document.getElementsByName("Cust_name")[0].value;
	var age=document.getElementsByName("Cust_age")[0].value;
	var phone=document.getElementsByName("ph_no")[0].value;
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/project/med.php?age="+age+"&name="+name+"&phone="+phone,"true");
	req.send();
	document.getElementsByTagName("span")[0].innerHTML=name+"<br>";
	document.getElementsByTagName("span")[1].innerHTML=age;
	document.getElementsByTagName("span")[2].innerHTML=phone+"<br>";
	document.getElementsByTagName("span")[3].innerHTML="<select id=\"mname\"><option>Select Medicine</option></select><button type=\"button\" id=\"b1\" style=\"padding:10px;height:auto;width:auto;border-radius:0px;font-size:15px;background-color:#05efea;\" onclick=\"f2()\">Select</button>";
	req.onreadystatechange=function(){
	if(req.readyState==4&&req.status==200)
		{
			document.getElementById("mname").innerHTML=req.responseText;
		}
	};
}
function f2()
{
	var x=document.getElementById("mname").value;
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/project/details.php?med_id="+x,"true");
	req.send();
	req.onreadystatechange=function(){
	if(req.readyState==4&&req.status==200)
		{
			var str=document.getElementById("t1").innerHTML;
			document.getElementById("t1").innerHTML=str+req.responseText;
		}
	};
}
function f3()
{
	var t=document.getElementById("t1");
	var req=new XMLHttpRequest();
	var sum=0;
	for(var i=1;i<t.rows.length-1;i++)
	{
		var x=t.rows[i].cells[3].childNodes;
		var y=t.rows[i].cells[4].innerHTML;
		var a=x[0].value;
		var c=a*y;
		req.open("get","http://localhost/project/sell1.php?med_id="+t.rows[1].cells[0].innerHTML+"&quantity="+a,"false");
		req.send();
		t.rows[i].cells[3].innerHTML=a;
		t.rows[i].cells[5].innerHTML=c;
		sum=sum+c;
	}
	var req1=new XMLHttpRequest();
	req1.open("get","http://localhost/project/sell3.php?total="+sum,"true");
	req1.send();
	document.getElementById("c1").innerHTML=sum;
	var z=document.getElementsByTagName("tfoot");
	z[0].innerHTML+="<tr><th colspan=\"2\">Payment Status</th><td colspan=\"2\"><select name=\"pay\"><option>Recived</option><option>Pending</option></select></td><td colspan=\"2\"><input type=\"submit\"></td></tr>";
	document.getElementsByTagName("span")[3].innerHTML="";
}
</script>
<style>
#b1:hover{font-size:15px;}
</style>
</head>
<body>
<center><h1>Pharmacy Management System</h1></center>
<a href="home.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:left;border-radius:0px;font-size:20px;background-color:#0ae623;">Home</button></a>
<a href="logout.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:right;border-radius:0px;font-size:20px;background-color:#ff3939;">Logout</button></a>
<br>
<form action="sell2.php" method="post" style="height:auto;">
<center><legend><h2>Sell<h2></legend></center>
<br>
<br>
<br><center>
Costumer's Name: <span><input style="margin-left:15px;margin-right:40px;" type="text" placeholder="Customer's Name" name="Cust_name" required/></span>
Costumer's Age: <span><input type="number" name="Cust_age" placeholder="Age" min="8" max="199" style="width:70px;" required/></span>
<br>
Mobile No: <span><input class="id3" type="number" name="ph_no" placeholder="Phone Number" min="6000000000" max="9999999999" style="margin-top:15px;margin-right:30px"/></span>
<span>
<button type="button" id="b2" style="padding:10px;height:auto;width:150px;border-radius:0px;font-size:15px;background-color:#05efea;" onclick="f1()">Next</button>
</span>
<br>
<br>
<br>
<div id="div1" style="margin-top:0px;">
<table id="t1" border="2px">
<tr>
<th>Medicine ID</th>
<th>Medicine Name</th>
<th>Company</th>
<th>Quantity</th>
<th>Price</th>
<th>Total Price</th>
</tr>
<tfoot>
<tr>
<th colspan="5">Grand Total</th>
<td id="c1"><button type="button" style="padding:10px;height:auto;width:auto;border-radius:0px;font-size:15px;background-color:#05efea;float:right;" onclick="f3()">Get Total</button></td>
</tr>
</tfoot>
</table>
</div>
</center>
</form>
</body>
</html>
