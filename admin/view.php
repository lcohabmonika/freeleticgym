<?php 
include('header.php');
$a=$_GET['aid'];
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');

$a1="select * from user where S_no='$a'";
$a2=mysql_query($a1);

while($f=mysql_fetch_array($a2))
{
?>
<head>
 <style>
 #a
 {
 height:700px;
 width:1350px;
 border:groove;
 border-color:#660000;
 border-radius:80px;
 margin-left:430px;
  height:655px;
 width:550px;
 }
 #a1
 {
 padding-left:160px;
 padding-top:40px;
 }
  #a2
 {
 padding-left:100px;
 padding-top:40px;
 }
 #a3
 {
 padding-left:280px;
 margin-top:-13px
 }
 #a4
 {
 margin-top:50px;
 font-size:24px;
 color:#660000;
 }
 #a5
 {
 margin-top:-510px;
 margin-left:720px; 
 border:solid;
 border-radius:360px;
 height:500px;
 width:500px;
 
 }
 </style>
 </head>
<body text="#660000">
<div id="a">
  <div id="a1"><?php echo "<h1>Details of  S_no:&nbsp;".$a."</h1>"; ?></div>
   <div id="a2"><?php echo "<h2><b>Profile Picture:</b></h2>";?></div>
   <div id="a3"><img src="upload/1.png><?php echo $f['pic'];?>" height="100px" width="100px" style="border-radius:80px"/></div>
   <div id="a2"><?php echo "<h2><b>First Name:</b></h2>";?></div>
   <div id="a3"><?php echo "<h2>".$f['fname']."</h2>"; ?></div>
  <div id="a2"><?php echo "<h2><b>Last Name:</b></h2>";?></div>
   <div id="a3"><?php echo "<h2>".$f['lname']."</h2>"; ?></div>
  <div id="a2"><?php echo "<h2><b>Gender:</b></h2>";?></div>
   <div id="a3"><?php echo "<h2>".$f['gender']."</h2>"; ?></div>
  <div id="a2"><?php echo "<h2><b>Mobile no:</b></h2>";?></div>
   <div id="a3"><?php echo "<h2>".$f['mobile']."</h2>"; ?></div>
  <div id="a2"><?php echo "<h2><b>Email id:</b></h2>";?></div>
   <div id="a3"><?php echo "<h2>".$f['email']."</h2>"; ?></div>
 
  
<?php
}
?>
</div>

</body>
<?php
include('footer.php');
?>

