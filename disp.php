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
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		 echo("Unable to Connect local host");	
	}
	mysql_select_db("datacloud") or die("Can't connect to the database");
	$s=mysql_query("select * from data_center") or die("Unable to Retrive");
	echo "<table id='table' border=\"1\"><tr><th>Name</th><th>ID</th></tr>";
	while($a=mysql_fetch_array($s))
	{
		echo "<tr><td>".$a['name']."</td><td>".$a['id']."</td></tr>";	
	}
	echo "</table>";
	?>
    <?php
	mysql_close($con);
		
?>
</center>
</body>
</html>