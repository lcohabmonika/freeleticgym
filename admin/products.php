<?php
include('header.php');
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
if(isset($_REQUEST['sub']))
{

$a=$_POST['na'];
$b=$_FILES['img']['name'];
//move_uploaded_file($_FILES["img"]["temp_name"],"upload/".$_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["tmp_name"],"/xampp/htdocs/free/upload/".$_FILES["img"]["name"]);

$c=$_POST['ca'];
$d=$_POST['pr'];
$a1="insert into product(product_name,image,category,price) values('$a','$b','$c','$d')";
$a2=mysql_query($a1);
if($a2)
{
echo "Product Added";
}
else 

{
echo "Product Not Added";
   }
   }
?>
<head>

<style>
#a{
width:460px;
height:420px;
margin-left:480px;
margin-top:20px; 
border:solid; 
}

#b{
font-size:38px;
margin-top:30px;
margin-left:150px;
color:#FFFFFF;
}

#c{
margin-top:30px;
margin-left:40px;
color:#CC3300;
font-size:18px;}

#d{
margin-top:-17px;
margin-left:220px;}

#e{
margin-top:50px;
margin-left:40px;
color:#CC3300;
font-size:18px;}

#f{
margin-top:-17px;
margin-left:220px;}

#g{
margin-top:50px;
margin-left:40px;
color:#CC3300;
font-size:18px;}

#h{
margin-top:-17px;
margin-left:220px;
}


#i{
margin-top:40px;
margin-left:200px;
}
#j{
width:460px;
height:80px;
border:double;
margin-left:-2px;
margin-top:-2px;
background-color:#990000;}

#k{
margin-top:50px;
margin-left:44px;
color:#CC3300;
font-size:18px;
}

#l{
margin-top:-17px;
margin-left:220px;}
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data" >
<div id="a"> 
<div id="j">
<div id="b">  Product </div> </div>
<div id="c">  PRODUCT NAME :  </div>
<div id="d"> <input type="text" width="20" name="na" autofocus="autofocus" >   </div>
<div id="e"> IMAGE : </div>
<div id="f"> <input type="file" name="img"> </div>
<div id="g"> CATEGORY : </div>
<div id="h"> <label>
<datalist id="qstn">
<?php
$b1="select * from categories";
$b2=mysql_query($b1);

while($f=mysql_fetch_array($b2))
{
echo $f['category'];
?>
<select name="ca">

<option value="<?php $c?>"> <?php $c ?></option>
</select>
<?php } ?>
</datalist>
<input type="text" name="ca" list="qstn" placeholder="Select your choice..." autofocus="autofocus" required="required" ></label> </div>

<div id="k">  PRICE : </div>
<div id="l"> <input type="number" name="pr" autofocus="autofocus"> </div>

<div id="i"> <input type="submit" name="sub" value="Submit" > </div>

</div>
</form>
</body>
