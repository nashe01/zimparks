<?php include('refresh.php'); ?>
 <?php include('header2.php'); ?>
<?php include('../session.php'); ?>
       <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('returnrequest_sidebar.php'); ?>
				   
                <div class="span7" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Return Requests</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
											
												
												<th>Message</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
								<?php
									$query = mysqli_query($conn,"select * from return_request where status = 'not_confirmed' ") or die(mysqli_error());
									while ($row = mysqli_fetch_array($query)) {
									$id = $row['not_id'];
									$empno=$row['employee_number'];
									$user=$row['username'];
									$tinno =$row['tin_number'];
							
								?>
								
									
										<tr>
										
										<td><?php echo $row['username'].' requested to return file '.$row['tin_number'].'  on  '.$row['time']; ?></td> 
											
								<td width="40">
									<button name="update" class="btn btn-success"><i class="icon-large">Confirm</i></button>
									</td>
												</tr>
												
										<?php		
									$query1 = mysqli_query($conn,"select * from borrow where tin_number='$tinno' and file_status = 'borrowed' ") or die(mysqli_error());
									while ($row1 = mysqli_fetch_array($query1)) {
											$borrow_id = $row1['borrow_id'];
									
									}			
									
												 } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>
					
<?php		
if (isset($_POST['update'])){

mysqli_query($conn,"update return_request set status = 'confirmed' where not_id = '$id' ")or die(mysqli_error());
mysqli_query($conn,"update borrow  set  date_return = NOW(), file_status='returned' where borrow_id='$borrow_id' ")or die(mysqli_error());
mysqli_query($conn,"update file set status = 'returned' where tin_number = '$tinno' ")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (username,date,action) values('$user_name',NOW(),'Returned file $tinno')")or die(mysqli_error());

?>
<script>
  window.location = "return_request.php"; 
</script>
<?php
}
?>

