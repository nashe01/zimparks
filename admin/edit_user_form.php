   <div class="row-fluid">
 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($conn,"select * from staff where staff_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								$edit_status = $row['status'];
								$edit_emplnumber = $row['emplnumber'];
								$edit_firstname = $row['firstname'];
								$edit_lastname = $row['lastname'];
								?>
								
								<form method="post">
										<div class="control-group">
											<label>Staff Status:</label>
                                          <div class="controls">
                                            <select name="status"  class="" required>
                                             	<option value ="normal"> Normal</option>
												<option value ="register"> Register</option>
												<option value ="supervisor"> Supervisor</option>
												<option value ="administrator">Administrator</option>
                                            </select>
											
                                          </div>
                                        </div>
										<div class="control-group">
										<label>Employee Number </label>
                                          <div class="controls">
                                            <input class="input focused" name="emplnumber" id="focusedInput" type="text"   value="<?php  echo $edit_emplnumber ?>" required>
                                          </div>
                                        </div>
										<div class="control-group">
										<label>First Name </label>
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text"  value="<?php  echo $edit_firstname ?>" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
										<label>Last Name </label>
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text"  value="<?php  echo $edit_lastname ?>" required>
                                          </div>
                                        </div>
										<div class="control-group">
											<label>Region:</label>
                                          <div class="controls">
                                            <select name="region"  class="" required>
                                             	<option value ="Zimbabwe"> Zimbabwe</option>
												<option value ="Outside Zimbabwe"> Outside Zimbabwe</option>
											
                                            </select>
                                          </div>
                                        </div>
										
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<?php		
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emplnumber = $_POST['emplnumber'];
$status = $_POST['status'];
$username =$firstname.'.'.$lastname;
$password=12345;;
$region = $_POST['region'];


mysqli_query($conn,"update staff set username = '$username'  , firstname = '$firstname' , lastname = '$lastname', emplnumber = '$emplnumber', status = '$status',region = '$region' where staff_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_name','Edit User $username from $region Region')")or die(mysqli_error());
?>
<script>
  window.location = "admin_user.php"; 
</script>
<?php
}
?>