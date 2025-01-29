
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('file_sidebar.php'); ?>
				<div class="span3" id="addfile">
				<?php include('add_file.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 
							$query = mysqli_query($conn,"select * from file  ")or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> File List</div>
                                <div class="muted pull-right">
									Number of Files: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>																					
												<th>TIN NUMBER</th>
												<th>FILE NAME </th>
												<th>CATEGORY</th>
												<th></th>
											
							
										   </tr>
										</thead>
										<tbody>
													<?php
													$user = mysqli_query($conn,"select * from file where region ='$staff_region' ")or die(mysqli_error());
													while($row1 = mysqli_fetch_array($user)){
													$id = $row1['file_id'];
													$mytin=$row1['tin_number'];
													$myfile=$row1['file_name'];
													$mystatus =$row1['file_category'];
													?>
				
												<tr>
												<td><?php echo $mytin; ?></td>
												<td><?php echo $myfile;?> </td>
												<td><?php echo $mystatus; ?></td>		
												<td width="40">
											
											<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" data-toggle="modal" href="#<?php echo $mytin; ?>"  class="btn btn-success"><i class="icon-pencil icon-large"></i>
											</a> 
											<?php include('edit_file.php') ?>	
												</td>
												</tr>
												<?php } ?>
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