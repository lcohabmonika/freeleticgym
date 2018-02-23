<?php

include ('header1.php'); 
?>

<?php
session_start();
  $x=$_SESSION['e'];

$com=mysql_connect('localhost','root','');
mysql_select_db('gym');

$a1="select * from user where email='$x'";
$a2=mysql_query($a1);

while($f=mysql_fetch_array($a2))
{
?>
<head>
 <style>
 #a{
color:#000099;
margin-left:40px;
margin-top:50px;
}

#b{
margin-left:40px;
margin-top:20px;
color:#000099;}

#c{
margin-left:40px;
margin-top:20px;
color:#000099;}

#d{
margin-left:40px;
margin-top:20px;
color:#000099;}

#e{
margin-left:40px;
margin-top:20px;
color:#000099;}

#f{
margin-left:40px;
margin-top:20px;
color:#000099;}

#g{
margin-left:34px;
margin-top:20px;
color:#000099;}

#h{
margin-left:40px;
margin-top:20px;
color:#000099;}

#i{
margin-left:40px;
margin-top:35px;
color:#000099;}


#x{
width:450px;
height:550px;
border:double;
margin-left:530px;
margin-top:10px;
border-color:#CC0000;
box-shadow:#CC0000 15px 15px 30px;}

#a2{
margin-left:210px;
margin-top:-34px;}

#b2{
margin-left:210px;
margin-top:-34px;}

#c2{
margin-left:210px;
margin-top:-34px;}

#d2{
margin-left:210px;
margin-top:-34px;}

#e2{
margin-left:210px;
margin-top:-34px;}

#f2{
margin-left:210px;
margin-top:-15px;}

#g2{
margin-left:210px;
margin-top:-15px;}

#h2{
margin-left:210px;
margin-top:-15px;}

#i2{
margin-left:170px;
margin-top:5px;}

 </style>
 </head>
<body text="#660000">
<div id="x">
  
   <div id="i2"> <img src="upload/1.png><?php echo $f['pic'];?>" height="100px" width="100px" style="border-radius:80px"/></div>
   <div id="a"><?php echo "<h2><b>First Name:</b></h2>";?></div>
   <div id="a2"><?php echo "<h2>".$f['fname']."</h2>"; ?></div>
  <div id="b"><?php echo "<h2><b>Last Name:</b></h2>";?></div>
   <div id="b2"><?php echo "<h2>".$f['lname']."</h2>"; ?></div>
  <div id="e"><?php echo "<h2><b>Gender:</b></h2>";?></div>
   <div id="e2"><?php echo "<h2>".$f['gender']."</h2>"; ?></div>
  <div id="c"><?php echo "<h2><b>Mobile no:</b></h2>";?></div>
   <div id="c2"><?php echo "<h2>".$f['mobile']."</h2>"; ?></div>
  <div id="d"><?php echo "<h2><b>Email id:</b></h2>";?></div>
   <div id="d2"><?php echo "<h2>".$f['email']."</h2>"; ?></div>
  
<?php
}
?>
</div>

</body>
<?php
include('footer.php');
?>

