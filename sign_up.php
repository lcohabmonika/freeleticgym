<?php
include'header.php';
?>
<?php
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['submit']))
{
$a=$_POST['email'];
$b=$_POST['pa'];
$q="select * from user where email='$a' and password='$b'";
$qr=mysql_query($q); 
if(mysql_num_rows($qr)>0)
{
  while($u=mysql_fetch_array($qr))
  {
 
 echo  $_SESSION['e']=$u['email'];
 $_SESSION['f']=$u['fname'];
 $_SESSION['fl']=$u['lname'];
 $_SESSION['im']=$u['pic'];
 
  ?>
<script> window.location="welcome.php";</script>
<?php }
}
else
{
echo"please register first";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
</head>
<body>
<div style="width:500px; height:300px;box-shadow:4px 4px 5px #0099FF; border-color:#0099FF; border-radius:5px;  margin-left:200px; margin-right:100px; margin-top:50px;">
<form name="Form" method="post"></br></br></br>
<div style="margin-left:50px; margin-top:30px;"><b>Email_id:</b></div>
<div style="margin-left:200px; margin-top:-24px;"><input type="text" size="30" name="email" placeholder="xyz@mail.com"/></div>
<div style="margin-left:50px; margin-top:30px;"><b>Password:</b></div>
 <div style="margin-left:200px; margin-top:-24px;"><input type="password" size="30" name="pa" password="password" required="required"/></div>
 <div align="center" style="margin-top:30px;">
            	<input type="submit" name="submit" id="submit"value="Log In">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset">
				
				<!--<a href="f_pass.php">PAssword</a><!-->
            </div>
		<div style="margin-left:190px; margin-top:30px;"><a href="new_account.php"><b>Create an account!</b></a></h2></div>
		
</form>
</div>
</html>
<?php
include'footer.php';
?>