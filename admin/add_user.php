   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_user">
										 <div class="control-group">
											<label>Staff Status:</label>
                                          <div class="controls">
                                            <select name="status"  class="" required>
                                             	<option value ="normal"> Normal</option>
												<option value ="register"> Register</option>
												<option value ="supervisor"> Supervisor</option>
												<option value ="administrator"> Administrator</option>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
										<label>Employee Number:</label>
                                          <div class="controls">
                                            <input class="input focused" name="emplnumber" id="focusedInput" onkeydown='return (event.which >= 48 && event.which <= 57) 
												|| event.which == 8 || event.which == 46' type="text"  maxlength="6" placeholder = "Employee Number" required>
                                          </div>
                                        </div>
										<div class="control-group">
										<label>First Name:</label>
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>Last Name:</label>
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
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
												<button  data-placement="right"  title="Click to Save" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Save</button>
														
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>

                    </div>
								<script>
	 											jQuery(document).ready(function(){
												jQuery("#add_user").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "save_user.php",
															data: formData,
															success: function(html){
															alert('User saved succesfully');
															window.location = 'admin_user.php';
															}
														});
														return false;
														});
										}); 
										</script>