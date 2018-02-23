<?php include 'header.php' ?>
<title>Gallery</title>
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
<?php include'footer.php';
 ?>