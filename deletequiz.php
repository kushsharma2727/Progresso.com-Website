<HTML>
<link rel="stylesheet" href="quiz.css" type="text/css">
<center>
<?php
include("contentdb2.php");
$id=$_GET['id'];
mysql_query("DELETE FROM $table WHERE id=$id",$db);
echo "<P>&nbsp;</P>";

echo "<B>Admin area - delete a quiz question<br><br></B>";

echo "Question deleted<br><br>";
echo "<a href='editquizlist.php'>Back to list of quiz questions</a>";
?>
</center>
</HTML>