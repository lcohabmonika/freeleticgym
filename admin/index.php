<?php
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{
$a=$_POST['na'];
$b=$_POST['pa'];

 $q="select * from admin where email_id='$a' and password='$b'";
$qr=mysql_query($q); 
if(mysql_num_rows($qr)>0)
{
header('LOCATION:user_home.php');


echo("input welcome");
}
else
{
echo("plx register first");
}}
?>

<html>
<head>
</head>
<body bgcolor="#333366">
<form method="post">

<div style=" width:200px; height:240px; margin-left:500px; margin-top:235px">
<div style="margin-left:90px;"><font color="#CCCCCC" size="+6"><b>Login</b></font></div><br>
<div><input type="text" size="42"name="na" placeholder="USERNAME" style="font:20;widht:320px;height:32px"></div><br>
<div><input type="password" size="42" name="pa" placeholder="PASSWORD" style="font:20;width:328px;height:32px";></div><br>
<div><input type="submit" name="sub" value="LET ME IN." style="font:20;width:329px;height:32px; background-color:#8080FF; border:#8080FF"></div></div>
<div  style="border:thin; width:500px; height:40px; margin-top:-534px; margin-left:512px;">

</div>
</form>
</body>
</html>