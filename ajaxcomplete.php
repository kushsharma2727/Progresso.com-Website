<?php
	$q=$_GET['q'];
	$my_data=$q;
	$conn=mysql_connect('localhost','root','') or die("Database Error");
	mysql_select_db('test',$conn);
	$sql="SELECT value FROM countries WHERE value LIKE '%$my_data%' ORDER BY value LIMIT 10";
	$result = mysql_query($sql) or die(mysql_error());
	
	if($result)
	{
		while($row=mysql_fetch_array($result))
		{
			echo $row['value']."\n";
		}
	}
?>