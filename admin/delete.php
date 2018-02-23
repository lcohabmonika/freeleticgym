<?php 
include('header.php');

$a=$_GET['aid'];
$com=mysql_connect('localhost','root','admin');
mysql_select_db('gym');

$a1="delete from user where S_no='$a'";
$a2=mysql_query($a1);
if($a2)
{
echo "Record is successfully deleted";
}
else 
{
echo "Record is not deleted";
}
include('footer.php');
?>
