<?php 
session_start();
include('header1.php');
$a=$_GET['aid'];
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');

$a1="select * from product where S_no='$a'";
$a2=mysql_query($a1);
while($f=mysql_fetch_array($a2))
{
?>
  <?php
  
$project_name="Gym";		//$_REQUEST['proname'];
$project_id="101";						//$_REQUEST['proid'];
$amount=	$_REQUEST['price'];							//$_REQUEST['price'];
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; 
$paypal_id='mehralsumitkumar-facilitator@gmail.com';  // sriniv_1293527277_biz@inbox.com
?>
	<?php 
$_SESSION['pname']=$project_name;
$_SESSION['pid']=$project_id;
echo $_SESSION['price']=$amount;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<form  method="post" action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal1' style="font-size:16px">
                    <input type='hidden' name='business' value='<?php echo $paypal_id;?>'>
                    <input type='hidden' name='cmd' value='_xclick'>

                    <input type='hidden' name='item_name' value='<?php echo $project_name;?>'>
                    <input type='hidden' name='item_number' value='<?php echo $project_id;?>'>
                                   <input type='hidden' name='amount' value='<?php echo $amount;?>'>

                    <input type='hidden' name='no_shipping' value='1'>
                    <input type='hidden' name='currency_code' value='USD'>
                    <input type='hidden' name='handling' value='0'>
                    <input type='hidden' name='cancel_return' value='http://localhost/paypal/cancel.php'>
                    <input type='hidden' name='return' value='http://localhost/paypal/success.php'>
					
					
					
<div style="margin-left:300px;"><table align="center">
<thead>
<tr>

<th><font color="#0099FF">CATEGORIES:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th><font color="#0099FF">PRODUCT&nbsp;IMAGE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th><font color="#0099FF">PRICE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

</tr><br>
</thead>

<tbody>
<tr>

  <td><div style="padding-top:40px; padding-left:20px">
  <?php echo $f['category'];?></div></td>

 <td><br><div style="width:100px; height:200px; border:thin; margin-left:0px;" ><img src="upload/<?php echo $f['image'];?>"height="150px" width="150px" style="border-radius:2px"/></div></td>
			 
   <td><div style="padding-top:40px; padding-left:px;">
   Rs. <?php echo $f['price']; ?></div></td>
</tr>
		
	</tbody>
			 </table>	</div>
			 
<div style="margin-left:550px;;height:30px; width:140px; border:thin">
			 <input type="button"  value="Proceed For Checkout" style="font:20;width:329px;height:32px; background-color:#0099FF; border:#8080FF; border-radius:2%;"></div>
<div style="padding-top:10px; padding-left:560px;">
			<input type="image" src="upload/download.png"  name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>  </body>	 
<!----------------------------------------------------->
</html>


<?php
}
?>
