<html>
<body>


<?php
session_start();
if(isset($_POST['sub']))
{
    if(md5($_POST['t1'])==$_SESSION['key'])
    {
    
        header("location:home.php");
    }

else
{
    echo "Please enter right code";
}
}
else
{
    ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Enter Code
<input type="text" name="t1"/>
<br/>
<input type="submit" name="sub" value="Submit"/>
</form>
<img src='gen_captcha.php' alt="no pic"/>

<?php }
?>

</body>
</html>