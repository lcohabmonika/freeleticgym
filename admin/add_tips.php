<?php

include('header.php');
?>
<?php
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{
$a=$_POST['ti'];
$b=$_FILES['img']['name'];
$c=$_POST['des'];
move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
$q="insert into tips(title,image,description) values('$a','$b','$c')";
$qr=mysql_query($q);
if($qr)
{
echo"added";
}
else
{
echo"not added";
}
}
?>

<html>

<head>
<body>
<form method="post" enctype="multipart/form-data">
<div style="border:solid; width:500px; height:550px; margin-left:400px;">
<div style=""><marquee style="background-color:#993333; height:60px;" behavior="alternate" ><h1>EXPERT GUIDENCE<h1></marquee></div>
<div style=" margin-left:67px; margin-top:50px;"><font size="+2">Title:</font></div>
<div style="margin-left:250px; margin-top:-25px;"><input type="text" name="ti"></div>
<div style="margin-left:67px; margin-top:70px;"><font size="+2">Image:</font></div>
<div style="margin-left:250px; margin-top:-17px;"><input  type="file" name="img"></div>
<div style="margin-left:67px; margin-top:80px;"><font size="+2">Description:</font></div>
<div style="margin-left:250px; margin-top:-10px;"><textarea rows="8" cols="20" name="des"></textarea></div>
<div style="margin-left:300px; margin-top:30px;"><input type="submit" name="sub" value="submit"></div>
</div>

</body>
</head>
</html>