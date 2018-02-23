<?php
include'header.php';
include'connection.php';
?>
<html>
<body>
<div style="width:430px; height:300px;box-shadow:4px 4px 5px #0099FF; border-color:#0099FF:; border-radius:5px; "></br>
<font style="font-size:36px; font-family:Algerian; margin-top:10px"><center>CONTACT US</center></font>
<div style="width:400px; height:200px; border:thin; margin-top:50px; margin-bottom:50px ">
<h2 style="color:#0066FF"><center>ADDRESS:Near Suresh Petrol Pump,Raja Colony</br>Ismailabad</br>Ph.no.:7837370825</br>Email:monikalochab@gmail.com</center></h2>
</div>
</div>
<div style="width:430px; height:300px;box-shadow:4px 4px 5px #0099FF; border-color:#0099FF; border-radius:5px;margin-top:100px; margin-left:500px; margin-top:-307px">
<iframe src="images/er.jpg" width="430" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</body>
</html></br></br></br></br></br>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{
$a=$_POST['em'];
$b=$_POST['p_no'];
$c=$_POST['fee'];
$q="insert into feedback(emailid,contactno,feedback)values('$a','$b','$c')";
$qr=mysql_query($q);
if($qr)
{
echo"Thank you";
}
else
{
echo"Error";
}
}

?>
<html>
<body>
<div style="width:300px; height:300px;border-radius:15px; margin-left:350px; margin-top:10px; margin-top:-100px; box-shadow:4px 4px 5px #0099FF; border-color:0099FF">

<form name="registration form" method="post"></br>
<div style="margin-left:10px; margin-right:10px; width:50px"><h4 style="font-size:18px">Email_id:</h4><input type="text" size="30px" width="20px" name="em" required="required" placeholder="xyz@mail.com"/></div></br>
<div style="margin-left:10px; margin-right:10px ; width:50px"><h4 style="font-size:18px">Ph_no:</h4><input type="text"  size="30px" width="20px" name="p_no" placeholder="0123456789"/></div></br>
<div style="margin-left:10px; margin-right:10px ; width:100px"><h4 style="font-size:18px">Feedback:</h4><textarea rows="2"  name="fee" cols="30"></textarea></br></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="res" value="Reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value"SUBMIT"/>
</form> 
</div>			
</body>
</html>
</br></br>
</br>
</br>


<?php
include'footer.php';
?>