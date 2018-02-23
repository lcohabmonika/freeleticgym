<?php
ob_start();
error_reporting('ERROR');
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style1.css"/>
</head>
<body>
<!-- Header -->

	<?php include "header.php";?>

<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
    <br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- table -->
<div class="box" style="width:75%; float:left;" >
					<!-- Box Head -->
					<div class="box-head">
					  <h2 class="left">Manage User</h2>
						
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table" >
						<table width=" 100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th>User Id</th>
					            <th>User Name</th>
		                         <th>Email</th>
                                <th colspan="3"><center>Action</center></th>
                                </tr>
                                <?php 
$com=mysql_connect('localhost','root','');
mysql_select_db('gym');

$a1="select * from user";
$a2=mysql_query($a1);

while($f=mysql_fetch_array($a2))
{


?> 

						
							<tr>
                             <td><?php echo $f['S_no'];  ?></td>
						      <td><?php echo $f['fname']; ?></td>
				              <td><?php echo $f['email'];?></td>
             				  <td> 
		<img src="images/30_free_office_icons_icons_pack_1207192.jpg" width="14"/> <a href="<?php echo "view.php?aid=".$f['S_no'];?>">View</a></td>
                              <td> 
		<img src="images/30_free_office_icons_icons_pack_1207191.jpg" width="14"/> <a href="<?php echo "update.php?aid=".$f['S_no'];?>">Edit</a></td>
                              <td> 
	     <img src="images/30_free_office_icons_icons_pack_1207193.jpg" width="14"/> <a href="<?php echo "delete.php?aid=".$f['S_no'];?>">Delete</a>
		 </td>										
						  </tr>
                          
                       <?php
							}
							?>
                            <tr>
                            <td colspan="6">
                            <center>Record Doesnot Exist</center>
                            </td>
							<?php
							 
							 ?>
                             	
					
							
		        </table>
                
						
						
					
						<!---------------------- Pagging ----------------------------->
						<div class="pagging">
							
							<div class="right">
                
<?php
//Now select all from table
$query = "select * from a_add_admin";
$result = mysql_query($query);
// Count the total records
$total_records = mysql_num_rows($result);
//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);
//Going to first page
echo "<center> ";
for ($i=1; $i<$total_pages; $i++) {
	
echo "<a href='manage_admin.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='manage_admin.php?page=$total_pages'>".'Last Page'."</a></center> ";
?>						
							</div>
						</div>
<!----------------- End Pagging ----------------------------->

						
						
					</div>
					<!-- Table -->
					
				</div>
			<!-- table end -->
			
			<!-- Sidebar -->
            <div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2> Add & Search</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="add_user.php" class="add-button"><span>Add new user</span></a>
						<div class="cl">&nbsp;</div>
                      
						<!-- Search--->
                        <br/>
						<div>
                        <form method="post">
							<label><b>User Name<b></label>
							<input type="text"  name="search" class="field small-field" />
							<p style="margin-left:50px;"><input  type="submit" value="search" /></p>
                            </form>
						</div>
						
						<!-- End search -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<?php include "footer.html";?>
<!-- End Footer -->
	
</body>
</html>