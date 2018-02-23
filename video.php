<!DOCTYPE html>
<html lang="en">
<head>
<title>FreeLetic Gym</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(window).load(function(){
	$('.slider')._TMS({
	prevBu:'.prev',
	nextBu:'.next',
	pauseOnHover:true,
	pagNums:false,
	duration:800,
	easing:'easeOutQuad',
	preset:'Fade',
	slideshow:7000,
	pagination:'.pagination',
	waitBannerAnimation:false,
	banners:'fade'
	})
}) 	
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <div class="bg-img"></div>
  <!--==============================header=================================-->
  <header>
    <h1><a href="index.php">FreeLetic <strong>Gym</strong></a></h1>
    <nav>
     <div class="social-icons"> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
      <ul class="menu">
        <li><a href="view.profile.php"><b>View Profile</b></a></li>
        <li><a href="expert.php"><b>Expert Guidance</b></a></li>
                <li><a href="product.php"><b>Product</b></a></li>
       <li><a href="Video.php"><b>Videos</b></a></li>
		<li><a href="Index.php"><b>Log Out</b></a></li>

      </ul>
    </nav>
  </header>
  </body>
  </html>
  <?php
include'connection.php';
?>
<div style="width:820; height:700px;">
<iframe width="300" height="300" margin-left=50px src="https://www.youtube.com/embed/LaFVV3y-Fr8" frameborder="0" ></iframe>
<iframe width="300" height="300" src="https://www.youtube.com/embed/ZpwEHIL_UZ4" frameborder="0"margin-left=></iframe>
<iframe width="300" height="300" src="https://www.youtube.com/embed/SgvCMxYPOFs" frameborder="0" ></iframe>
<iframe width="300" height="300" src="https://www.youtube.com/embed/ZdM0CYodEbc" frameborder="0"></iframe>
<iframe width="300" height="300" src="https://www.youtube.com/embed/fZUSXWjFkqY" frameborder="0" allowfullscreen></iframe>
<iframe width="300" height="300" src="https://www.youtube.com/embed/UESUutVUQaE" frameborder="0" allowfullscreen></iframe>
</div>
<?php
include'footer.php';
?>