<?php
//require('connection.php');
include'header1.php';
error_reporting('ERROR');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="all" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" media="all" /><![endif]-->

</head>
<body>

<div id="body">
  <div class="featured" style="height:300px;">
  
  <?php
  
 $com=mysql_connect('localhost','root','');
  mysql_select_db('gym');
$query="select * from product";
$chk=mysql_query($query);
while($row=mysql_fetch_array($chk))
{
?>
<!------------------------------------------------>

<div align="center" style="height:235px; width:230px; margin-left:10px;margin-bottom:10px; float:left; ">
 <div style="height:170px; width:170px; margin-top:0px;"><img src="upload/<?php echo $row['image'];?>" style="border-radius:5px; height:170px; width:170px;" />
 </div>
 <a href="#"><?php echo $row['products']; ?></a>
<?php
$k=$_GET['aid'];
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
 $q="select * from product";
$r=mysql_query($q);
if(isset($_REQUEST['buy']))

?>
 <form method="post" action="buynow.php">
  <input type="hidden" name="s_no" value="<?php echo $row['cat']; ?>"> 
  <input type="hidden" name="pname" value="<?php echo $row['products']; ?>"> 
  <input type="hidden" name="price" value="<?php echo $row['price']; ?>"> 
  <input type="hidden" name="image" value="<?php echo "../upload/".$row['image']; ?>">
  <div style="background-color:#3F0; color:#3F0; height:20px; width:80px; border-radius:5px; border-color:#000; margin-top:10px;">
  <a href="<?php echo"buynow.php?aid=".$row['S_no'];?>">BUY</a></div>
  <?php
  $k=$_GET['aid'];
  ?>
 </form>
 
 </div>


 <!------------------------------------------------> 
<?php } ?>


</div>

  
 
  
  
  </div>
</div>
</body>
</html>