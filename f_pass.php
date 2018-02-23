<?php
session_start();
include ('header1.php'); 
?>
<?php
session_start();
$com=mysql_connect('localhost','root','');

mysql_select_db('freelatic_gym');
if(isset($_REQUEST['sub']))
{
$a=$_POST['em'];

$qr="select * from user where email_id='$a'";
$q=mysql_query($qr);
if(mysql_num_rows($q)>0)

{
$f=mysql_fetch_array($q);
echo $_SESSION['s']=$f['email_id'];
?>
<script> window.location="mygo.php";</script>
<?php 
}
else
{

echo "Error";}


}
?>



<html>
<head>

</head>
<body>
<div  style="width:700px; height:300px; border:solid; margin:auto">
<form method="post" >



<div align="center"><h2>Email Id </h2> <input type="text" size="20" name="em" placeholder="enter the Email Id" style="height:20px;" /></div>
<br/>
<div align="center"><input type="submit" name="sub" value="GO"/></div>

</form>
</div>
</body>
</html>