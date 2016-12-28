<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="margin-top:15%", background="bg1.jpg">
<center>
<a href="test.html"><button type="button">Home</button></a><br/><br/>
<?php
	$id=$_GET['id'];
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		 echo("Unable to Connect local host");	
	}
	mysql_select_db("datacloud") or die("Can't connect to the database");
	$s=mysql_query("delete from data_center where id='$id'") or die("Unable to Delete");
	if($s)
	{
		echo "Record Deleted";	
	}
	
	mysql_close($con);
		
?>
</center>
</body>
</html>