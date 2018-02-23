<?php
include'header.php';
?>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('freelatic_gym');
$q="select * from tips";
$qr=mysql_query($q);
while($f=mysql_fetch_array($qr))
{?>

<div style="width:300px; height:300px; border:thin; border-radius:15px; border-color:blue; margin-left:350px">

<b style="margin-left:10px">Title: <?php echo $f['Title'];?></br></b></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="upload/<?php echo $f['Image'];?>" width="200px" height="200px"  style="border-radius:100%" /></br></br>
<b>Tip:<?php echo $f['Description'];?> </br></b>
<b style="margin-left:140px"> By&nbsp;Neha Sharma</b>
<?php }?>
</div>
</br></br></br></br>
<?php
include'footer.php';
?>