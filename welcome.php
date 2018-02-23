<?php
session_start();
include ('header1.php'); ?>
<div style=" font-size:36px; font-family:'Courier New', Courier, monospace; border:thin; margin-left:35%; width:940px">
<?php 
echo"<br><br><p>Welcome Mr.".$_SESSION['f'];echo $_SESSION['fl'];

//echo"<br><br><br><br><br><br><br><p>Your Email-address:".$_SESSION['e'];

?> </p>
<br /><br /><br /><br />    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../upload/<?php echo $_SESSION['im']; ?>" width="150px" height="150px" style=" border-radius:100%"/><br /><br /><br />

</div>