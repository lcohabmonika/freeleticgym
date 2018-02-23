<?php
include'header.php';
include'connection.php';
?>
<html>
<?php
	
	if(isset($_REQUEST['submit']))
	{
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if($password==$cpassword)
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];	
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$security_q=$_POST['security_q'];
			$security_a=$_POST['security_a'];
			$p_pic=$_FILES['image']['name'];
			$email_id=$_POST['email_id'];
			move_uploaded_file($_FILES['image']['tmp_name'],"Profile/".$_FILES['image']['name']);
			$query="INSERT INTO `user` (fname,lname,email_id,password,gender,dob,security_q,security_a,image)values('$fname','$lname','$email_id','$password','$gender','$dob','$security_q','$security_a','$p_pic')";
			$run=mysql_query($query);
			if($run)
			{
				echo ("Regitration Successfull");
			}
			else
				echo "Retry......";
		}
		else
		{
			?> <script>alert("Passoword is not matched.....");</script><?php
		}
	}
?>
</br></br>
</br>
</br>
<body>
<div style=" margin:auto; height:700px; width:500px;  margin-top:13px;box-shadow:4px 4px 5px #0099FF; border-color:#0099FF; border-radius:5px;">
		<form method="post" onSubmit="return validation();" enctype="multipart/form-data"><b>
			<div style="margin-left:50px; margin-top:30px;">First Name :</div>
            <div style="margin-left:200px; margin-top:-19px;"><input type="text" size="30" name="fname" id="fname" autofocus title="Enter your fisrt name"></div>
            <div style="margin-left:50px; margin-top:30px;">Last Name :</div>
            <div style="margin-left:200px; margin-top:-19px;"><input type="text" size="30" name="lname" id="lname" title="Enter your last name"></div>
            <div style="margin-left:50px; margin-top:30px;">Gender :</div>
            	<div style="margin-left:200px; margin-top:-19px;">
                	<input type="radio" name="gender" value="Male" checked>Male&nbsp;&nbsp;&nbsp;
                	<input type="radio" name="gender" value="Female">Female
                </div>
            <div style="margin-left:50px; margin-top:30px;">D.O.B :</div>
            	<div style="margin-left:200px; margin-top:-18px;"><input type="date" size="30" name="dob" id="dob" title="Enter your date of birth" placeholder="e.g dd/mm/yy"></div>
            <div style="margin-left:50px; margin-top:30px;">Security Question :</div>
                <div style="margin-left:200px; margin-top:-18px;">   	
                    <select name="security_q" id="security_q">    
                        <option value="#">-----Choose Security Question------</option>
                    	<option value="What is your fav. color?">What is your fav. color?</option>
                    	<option value="What is your first school?">What is your first school?</option>
                    	<option value="What is your nic name?">What is your nic name?</option>
                    </select>
                 </div>
            <div style="margin-left:50px; margin-top:30px;">Security Answer :</div>
            	<div style="margin-left:200px; margin-top:-18px;"><input type="text" size="30" name="security_a" id="security_a"></div>
            <div style="margin-left:50px; margin-top:30px;">Profile Pic :</div>
            	<div style="margin-left:200px; margin-top:-19px;"><input type="file" name="image" id="image"></div>
                <div style="margin-left:50px; margin-top:30px;">Email ID :</div>
            	<div style="margin-left:200px; margin-top:-18px;"><input type="email" size="30" name="email_id" id="email_id" placeholder="example@gmail.com">
                </div><div style="margin-left:50px; margin-top:30px;">Password :</div>
            	<div style="margin-left:200px; margin-top:-18px;"><input type="password" size="30" name="password" id="password" maxlength="16" minlength="6"></div>
                <div style="margin-left:50px; margin-top:30px;">Confirm Password :</div>
            	<div style="margin-left:200px; margin-top:-18px;"><input type="password" size="30" id="cpassword" name="cpassword"></div>
            <div align="center" style="margin-top:30px;">
            	<input type="submit" name="submit" value="Register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset">
            </div>
		</b></form>
	</div><br />


</body>
</html></br></br>

<?php
include'footer.php';
?>
