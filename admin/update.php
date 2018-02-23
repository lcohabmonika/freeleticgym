<?php 
include('header.php');
$a=$_GET['aid'];
$com=mysql_connect('localhost','root','admin');
mysql_select_db('gym');

$a1="select * from user where S_no='$a'";
$a2=mysql_query($a1);

while($f=mysql_fetch_array($a2))
{
?>

<html>
 <head>
<style>
 #a1
 {
 border:solid;
 border-color:#660000;
 border-radius:50px;
 height:450px;
 width:550px;
 margin-left:400px;
 margin-top:10px;
 }
 .a2
 {
 padding-left:80px;
 padding-top:50px;
 
 }
 .a3
 {
 margin-left:280px;
 margin-top:-20px;
 }
 .a4
 {
 color:#660000;
 font-size:17px;
 font-family:"comic Sans MS", Constantia, "Curlz MT";
 }
</style>
  </head>
  <body>
  <?php
$a=$_GET['aid'];
$com=mysql_connect('localhost','root','admin');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{
$b1=$_POST['fn'];
$b2=$_POST['ln'];
$b3=$_POST['mb'];
$b4=$_POST['email'];
$b5=$_POST['pa'];
$b="UPDATE user SET fname='$b1',lname='$b2',mobile='$b3',email='$b4',password='$b5' WHERE S_no='$a'";
$b6=mysql_query($b);
if($b6)
{
echo "Updated successfully";
}
else
{
echo "Not updated";
}}

?>
  <div id="a1">
 <form method="post" enctype="multipart/form-data">
  <div class="a2"><font class="a4">First Name:</font></div>
  <div class="a3"><input type="text" name="fn" value="<?php echo $f['fname']; ?>" /></div>
        <div class="a2"><font class="a4">Last Name:</font></div>
        <div class="a3"><input type="text" name="ln" value="<?php echo $f['lname']; ?>"/></div>
<div class="a2"><font class="a4">Mobile no.:</font></div>
<div class="a3"><input type="number" id="tel" name="mb" value="<?php echo $f['mobile']; ?>"/></div>
                <div class="a2"><font class="a4">E-mail:</font></div>
                <div class="a3"><input type="email" id="email" name="email" placeholder="ex:abc123@example.com" value="<?php echo $f['email']; ?>"/>
				</div>
<div class="a2"><font class="a4">Password:</font></div>
<div class="a3"><input type="password" name="pa" value="<?php echo $f['password']; ?>"/></div>
                <div class="a2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 	<input type="submit" value="Update" name="sub"/></div>
                <div class="a3">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="Reset" name="set"/></div>
</form>

<?php
}
?>
</div>
</body>
</html>