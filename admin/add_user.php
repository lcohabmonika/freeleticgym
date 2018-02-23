<?php
include('header.php');
?>
<?php
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{
$a=$_POST['na'];
$b=$_POST['la'];
$c=$_POST['gen'];
$d=$_POST['mo'];
$e=$_POST['sq'];
$f=$_POST['sa'];
$g=$_FILES['pp']['name'];
move_uploaded_file($_FILES["pp"]["tmp_name"],"upload/1.png".$_FILES["pp"]["name"]);
$h=$_POST['em'];
$i=$_POST['pa'];
$j=$_POST['cpa'];

 $q="insert into user(fname,lname,gender,mobile,email,password,qstn,ansr,pic) values('$a','$b','$c','$d','$h','$i','$e','$f','$g')";
$qr=mysql_query($q);
if($qr)
{
echo("welcome");
}
else
{
echo("error");
}
}
?>

<html>
<head>


</head>
<body>
<form method="post" enctype="multipart/form-data">
<div style=" margin-left:390px; margin-top:15px;width:540px; height:600px; border:solid; border-radius:16px">
<div style=" margin-left:70px; margin-top:40px;"><font size="-1">First Name:</font></div>
<div  style="margin-left:230px; margin-top:-14px;"><input type="text" name="na" ></div>
<div style="margin-left:70px; margin-top:35px;"><font size="-1">Last Name:</font></div>
<div  style="margin-left:230px; margin-top:-18px;"><input type="text" name="la"></div>
<div style="margin-left:70px; margin-top:35px;"><font size="-1">Gender:</font></div>
<div style=" margin-left:230px; margin-top:-13px;">
Male<input type="radio" value="Male" name="gen">&nbsp;&nbsp;
Female<input type="radio" value="Female" name="gen"></div>
<div style="margin-left:70px; margin-top:30px;"><font size="-1">Mobile no.</font></div>
<div style="margin-left:230px; margin-top:-17px;"><input type="text" name="mo"></div>
<div style="margin-left:70px; margin-top:30px;"><br><br><font size="-1">Security Question&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>
<datalist id="sq">
<select  name="sq">
 <option value="Which is your favourite color...">Which is your favourite color...</option>
<option value="Which is your favourite pet...">Which is your favourite pet...</option>
<option value="Which book do you read most...">Which book do you read most...</option>
<option value="What do you like to eat...">What do you like to eat...</option>
</select>
</datalist>
<input type="text" name="sq" list="sq">
</font>
</div>

<div style="margin-left:70px; margin-top:35px;"><font size="-1">Security Answer:</font>
</div>
<div style="margin-left:230px; margin-top:-17px;"><input type="text" name="sa"></div>
<div style="margin-left:70px; margin-top:35px;"><font size="-1">Profile Picture:</font></div>
<div style=" margin-left:230px; margin-top:-17px;"><input type="file" name="pp"></div>
<div style="margin-left:70px; margin-top:35px;"><font size="-1">Email id:</font></div>
<div style="margin-left:230px; margin-top:-17px;"><input type="email" placeholder="xyz@gmail.com" name="em"></div>
<div style="margin-left:70px; margin-top:35px;"><font size="-1">Password</font></div>
<div style=" margin-left:230px; margin-top:-17px;"><input type="password" name="pa"></div>
<div style="margin-left:70px; margin-top:35px;"><font size="-1">Confirm Password:</font></div>
<div style=" margin-left:230px; margin-top:-17px;"><input type="password" name="cpa"></div>
<div style="margin-left:235px; margin-top:35px;"><input type="submit" name="sub" value="Submit"></div>
</div>
</body>
</html>