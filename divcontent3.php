<html>
<head>
<link rel="shortcut icon" href="../favicon.ico">
		
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		
<link rel="stylesheet" type="text/css" href="css/demo.css" />
		
<link rel="stylesheet" type="text/css" href="css/icons.css" />
		
<link rel="stylesheet" type="text/css" href="css/component.css" />
		
<script src="js/modernizr.custom.js"></script>
</head>


<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("progresso",$conn);

$sql_select1="select text from home where id=1";
$sql_select2="select text from home where id=2";
$sql_select3="select text from home where id=3";
$sql_select4="select text from home where id=4";
$sql_select5="select text from home where id=5";
$sql_select6="select text from home where id=6";





$result1 = mysql_query($sql_select1);
$row1 = mysql_fetch_array($result1);

$result2 = mysql_query($sql_select2);
$row2 = mysql_fetch_array($result2);

$result3 = mysql_query($sql_select3);
$row3 = mysql_fetch_array($result3);

$result4 = mysql_query($sql_select4);
$row4 = mysql_fetch_array($result4);

$result5 = mysql_query($sql_select5);
$row5 = mysql_fetch_array($result5);

$result6 = mysql_query($sql_select6);
$row6 = mysql_fetch_array($result6);





mysql_close($conn);
?>


<body>
<p>
<font face="Segoe Print">
<font color="#dc9eeb" size="10px"><b><?php echo $row1[0]; ?></b></font></br>
<?php echo $row2[0]; ?>
<font align="center"><?php echo $row3[0]; ?></font></br>
<?php echo $row4[0]; ?></br>
<?php echo $row5[0]; ?>



<h1 align="center" style="position: absolute; left:250px"> <?php echo $row6[0]; ?>
</h1></font></p>




</body>
</html>
