   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Enter File TIN Number</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
											<label>Search By:</label>
                                          <div class="controls">
                                            <select name="searchby"  class="" required>
												<option></option>
												<option value ="tin"> TIN Number</option>
                                             	<option value ="filename"> File Name</option>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="tin_number" id="focusedInput" type="text" placeholder = "Search File" required>
                                          </div>
                                        </div>
										
										
											<div class="control-group">
                                          <div class="controls">
											<button name="search" class="btn btn-info"><i class="icon-search icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
        
                    </div>
<?php
if (isset($_POST['search'])){
$tin_number = $_POST['tin_number'];
$searchby=$_POST['searchby'];

if ($searchby=="tin"){
	$query = mysqli_query($conn,"select * from file where tin_number = '$tin_number' ")or die(mysqli_error());
	$count = mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	if ($count>0){
					$mytin = $tin_number;
					$myfilename=$row['file_name'];
					$mystatus = $row['status'];
							if ($mystatus=="borrowed"){
								$query1 = mysqli_query($conn,"select * from borrow where tin_number = '$mytin' and file_status ='borrowed' ")or die(mysqli_error());
								$row1=mysqli_fetch_array($query1);
									$borrowedby = $row1['employee_number'];
									$borrowdate = $row1['date_borrow'];
							}else{
									$borrowedby ='None';
									$borroweddate = 'None';
							}
					?>
					<script>
						window.location = "search.php";
						</script>
<?php
	
		}else
		{   ?>  
			<script>
		alert('Invalid TIN Number');
			</script>
			
			<?php
}}
else{
	$query = mysqli_query($conn,"select * from file where file_name = '$tin_number' ")or die(mysqli_error());
	$count = mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	if($count>0){
					$mytin = $tin_number;
					$myfilename=$row['file_name'];
					$mystatus = $row['status'];
							if ($mystatus=="borrowed"){
								$query1 = mysqli_query($conn,"select * from borrow where tin_number = '$mytin' and file_status ='borrowed' ")or die(mysqli_error());
								$row1=mysqli_fetch_array($query1);
									$borrowedby = $row1['employee_number'];
									$borrowdate =  $row1['date_borrow'];
							}else{
									$borrowedby ='None';
									$borroweddate = 'None';
							}
	
						?>
								<script>
								window.location = "search.php";
								</script>
<?php
	}else { ?>
		<script>
		alert('Invalid File Name');
		</script>
	<?php
	}
}



}
?>
					
		