<?php
include('header.php');
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{
$a=$_POST['cat'];
$a1="insert into categories(category) values('$a')";
$a2=mysql_query($a1);
if($a2)
{
echo "Successfull";
}
else 
{
echo "not done";
 }}
?>

<html>
<head>
</head>
<body>
<form  method="post">
<div style=" border:solid; height:350px; width:400px; margin-left:480px; margin-top:20px; border:solid; border-radius:10%;">
<div style="margin-left:100px; margin-top:100px"><font size="+3" color="#660000">CATEGORIES</font></div>
<div style="margin-left:120px; margin-top:60px"><input type="text" name="cat" ></div>
<div style="margin-left:180px; margin-top:40px"><input type="submit" name="sub" value="submit"></div>
</div>
</form>


</body>
</html>