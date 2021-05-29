<?php
session_start();
?>

<html>
<head>
<title>Purcahse Page</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
<script type="text/javascript">
var name;
function f1()
{
	name=document.getElementById("seller").value;
	var name1=document.getElementById("seller").childNodes[name].innerHTML;
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/project/med1.php","true");
	req.send();
	document.getElementsByTagName("span")[0].innerHTML=name1+"<br>";
	document.getElementsByTagName("span")[1].innerHTML="<select id=\"mname\"><option>Select Medicine</option></select><button type=\"button\" id=\"b1\" style=\"padding:10px;height:auto;width:auto;border-radius:0px;font-size:15px;background-color:#05efea;\" onclick=\"f2()\">Select</button>";
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
	req.open("get","http://localhost/project/details1.php?med_id="+x,"true");
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
		req.open("get","http://localhost/project/purchase1.php?id="+name+"&med_id="+t.rows[1].cells[0].innerHTML+"&quantity="+a,"false");
		req.send();
		t.rows[i].cells[3].innerHTML=a;
		t.rows[i].cells[5].innerHTML=c;
		sum=sum+c;
	}
	var req1=new XMLHttpRequest();
	req1.open("get","http://localhost/project/purchase3.php?total="+sum+"&id="+name,"true");
	req1.send();
	document.getElementById("c1").innerHTML=sum;
	var z=document.getElementsByTagName("tfoot");
	z[0].innerHTML+="<tr><th colspan=\"2\">Payment Status</th><td colspan=\"2\"><select name=\"pay\"><option>Given</option><option>Pending</option></select></td><td colspan=\"2\"><input type=\"submit\"></td></tr>";
	document.getElementsByTagName("span")[3].innerHTML="";
}
function f4()
{
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/project/seller.php","true");
	req.send();
	req.onreadystatechange=function(){
	if(req.readyState==4&&req.status==200)
		{
			document.getElementById("seller").innerHTML=req.responseText;
		}
	};
}
</script>
<style>
#b1:hover{font-size:15px;}
</style>
</head>
<body onload="f4()">
<center><h1>Pharmacy Management System</h1></center>
<a href="home.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:left;border-radius:0px;font-size:20px;background-color:#0ae623;">Home</button></a>
<a href="logout.php"><button style="margin:0px;padding:15px;height:auto;width:auto;float:right;border-radius:0px;font-size:20px;background-color:#ff3939;">Logout</button></a>
<br>
<form action="purchase2.php" method="post" style="height:auto;">
<center><legend><h2>Purcahse<h2></legend></center>
<br>
<br>
<br><center>
Wholeseler's Name: <span><select id="seller"><option>select seller</option></select></span>
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
