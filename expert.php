<?php
session_start();
include ('header1.php'); ?><!DOCTYPE html>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('gym');
$q="select * from tips";
$qr=mysql_query($q);
while($f=mysql_fetch_array($qr))
{
?>
<div style="width:750px; height:450px; border-radius:2%; border-color:#999999; float:left; margin-left:300px;">
<div style="font-size:30px; padding-left:230px; padding-top:20px;"><b><pre> <?php echo $f['title'];?></b></pre></div>

<div style="padding-top:20px;">
<img src="upload/<?php echo $f['image'];?>" width="300px" height="300px" style="border-radius:100%; float:left; margin-left:40px;"/>
&nbsp;&nbsp;&nbsp;<br/><b><?php echo $f['description'];?></b></div>
</div><br/><br/>
<?php }?>

<?php
include'footer.php';
?>
