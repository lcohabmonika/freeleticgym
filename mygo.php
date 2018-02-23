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
$a=$_POST['qr'];
$b=$_POST['an'];

$qr="select * from user where security_q='$a' and security_a='$b' ";
$q=mysql_query($qr);
if(mysql_num_rows($q)>0)

{
$f=mysql_fetch_array($q);
echo $_SESSION['pa']=$f['password'];
?>
<script> window.location="mypass.php";</script>
<?php 
}
else
{

echo "Error";}


}
?>

<?php
session_start();
$com=mysql_connect('localhost','root','');

mysql_select_db('freelatic_gym');

$q=$_SESSION['s'];

echo $qr="select * from user where email_id='$q'";
$q1=mysql_query($qr);
if(mysql_num_rows($q1)>0)

{
$f=mysql_fetch_array($q1);
?>





<html>
<head>

</head>
<body>
<div  style="width:700px; height:300px; border:solid; margin:auto">
<form method="post" >



<div align="center"><h2>Email Id </h2> <input type="text" size="50" name="qr" placeholder="enter the Email Id" style="height:20px;" value="<?php echo $f['security_q']; ?>" /></div>
<br/>

<div align="center"> <input type="text" size="50" name="an" placeholder="enter the Email Id" style="height:20px;"  /></div>
<br/>
<div align="center"><input type="submit" name="sub" value="GO"/></div>

</form>
</div>
</body>
</html>
<?php 
}
?>