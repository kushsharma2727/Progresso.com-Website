<?php
echo("<a href=index.php>Home</a>
");
if(isset($_GET['act']))
{
$do=$_GET['act'];
switch($do)
{
case 'form': show_form(); break;
case 'sm': submited(); break;
default: show_form();
}

}
else
show_form();
function show_form()
{
?>
<form name=frm method=POST action=admin.php?act=sm>
Nederlands: 
  <input type=text name="nl" />

Thai: 
<input type=text name="th">

<input type=submit name=sm value="Submit">
</form>
<?
}
function submited()
{
require("dbconn.inc");
if(isset($_POST['sm']))
{
$nl=$_POST['nl'];
$th=$_POST['th'];
$sql="Insert into words(nl, th) values('".$nl."','".$th."')";
$res=mysql_query($sql,$link);
//header("Location: admin.php");
?>
<script language=Javascript>window.location="admin.php";</script>
<?

}
else
echo("Insert data !!");
mysql_close($link);
}
?> 