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
                <li><a href="gallery1.php"><b>Gallery</b></a></li>
       <li><a href="Video.php"><b>Videos</b></a></li>
		<li><a href="Index.php"><b>Log Out</b></a></li>

      </ul>
    </nav>
  </header>
  </body>
  </html>
  <?php connection.php ?>
<title>Gallery1</title>
<style>
.gallery {height: 180px;width: 190px;-webkit-border-radius:10px;border-radius:10px; border:#FFF 2px solid;}
.gallery_container {display: block;width: 660px;margin: 30px auto;}

.scene3D {display: block;float: left;margin: 20px;-webkit-border-radius: 5px;border-radius: 5px;-webkit-perspective: 500px;perspective: 500px;}
.flip div {position: absolute;width: 190px;height: 180px;-webkit-border-radius: 5px;border-radius: 5px;-webkit-backface-visibility: hidden;backface-visibility: hidden;}
.flip div:first-child {-webkit-border-radius: 5px;border-radius: 5px;background: #333;-webkit-transform: rotateX(180deg);transform: rotateX(180deg);}
.flip div:first-child p {color: #FFF;text-shadow: 0 0 1px .111;padding-top: 50px;text-align: center;}
.flip {width: 190px;height: 180px;-webkit-border-radius: 5px;border-radius: 5px;-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);box-shadow: 0 0 15px rgba(0,0,0,0.3);-webkit-transform: rotateX(0deg);transform: rotateX(0deg);-webkit-transition: all 1s ease;transition: all 1s ease;-webkit-transform-style: preserve-3d;transform-style: preserve-3d;}
.scene3D:hover .flip {-webkit-transform: rotateX(360deg);transform: rotateX(360deg);

}
img{
width:180px;
height:190px;

}
img.hover{
width:300px;
height:300px;}
</style>
 <div id="a1" style="   background: #86c8b4; padding:3%;">
   <table align="center"  cellpadding="0" cellspacing="5px" style="width:60%; margin:auto;">
     <tr>
      <td>
    <div class="scene3D" style="height:180px; width:190px;">
	  <div class="flip">
        <img src="images/gallery-2.jpg"  class="gallery" />
      </div>
    </div>
     </td>
     <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/gallery-3.jpg" class="gallery" />
       </div>
      </div>
     </td> 
	 <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/gallery-5.jpg"  class="gallery" />
       </div>
      </div>
     </td>
     <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/gallery-big-4.jpg"
	  class="gallery" />
       </div>
      </div>
     </td>
     </tr>
	 
     <tr>
     <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/images/blog_single1 - Copy.jpg"class="gallery" />
       </div>
      </div>
     </td>
     <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/images/c4 - Copy.jpg" class="gallery" />
       </div>
      </div>
     </td>
     <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/images/c5 - Copy.jpg" class="gallery" />
       </div>
      </div>
      </td>
	  <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/images/c6.jpg"class="gallery" />
       </div>
      </div>
      </td>
     </tr>
	 
	 <tr>
      <td>
       <div class="scene3D" style="height:180px; width:190px;">
	    <div class="flip">
         <img src="images/images/c3 - Copy.jpg" class="gallery" alt=""/>
        </div>
       </div>
      </td>
      <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/images/girls-gym-workout.jpeg"  class="gallery" />
       </div>
      </div>
     </td>
	 <td>
       <div class="scene3D" style="height:180px; width:190px;">
	    <div class="flip">
         <img src="images/images/gym.jpg"  class="gallery" alt=""/>
        </div>
       </div>
      </td>
      <td>
      <div class="scene3D" style="height:180px; width:190px;">
	   <div class="flip">
        <img src="images/images/abd.jpg"  class="gallery" />
       </div>
      </div>
     </td>
    </tr>
  </table>
</div>
</body>
</html>
<?php include'footer.php' ?>