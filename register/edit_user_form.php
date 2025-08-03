   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
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
								?>
								<form method="post">
										<div class="control-group">
											<label>Staff Status:</label>
                                          <div class="controls">
                                            <select name="status"  class="" required>
                                             	<option value ="administrator"> Administrator</option>
												<option value ="register"> Register</option>
												<option value ="normal"> Normal</option>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="emplnumber" id="focusedInput" type="text" placeholder = "Employee Number" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
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


mysqli_query($conn,"update staff set username = '$username'  , firstname = '$firstname' , lastname = '$lastname', emplnumber = '$emplnumber', status = '$status' where staff_id = '$get_id' ")or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit User $username')")or die(mysqli_error());
?>
<script>
  window.location = "admin_user.php"; 
</script>
<?php
}
?>