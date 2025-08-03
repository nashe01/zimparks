			<form id="login_form1" class="form-signin" method="post">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign in</h3>
						<input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
						<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
						<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button><br><br>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>		
			</form>
			
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true_admin')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
									}else
										if (html == 'true_register'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'register/dashboard.php'  }, delay);  
									}else 
										if (html == 'true_normal'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'normal/dashboard.php'  }, delay);  
									}
									else
									if (html == 'true_supervisor'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'supervisor/dashboard.php'  }, delay);  
									}
									else
									if(html=='admin_pass')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/change_password2.php'  }, delay);  
									}else
									if(html=='reg_pass')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'register/change_password2.php'  }, delay);  
									}else
									if(html=='sup_pass')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'supervisor/change_password2.php'  }, delay);  
									}else
									if(html=='normal_pass')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to ZIMPARKS FILE MANAGER", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'normal/change_password2.php'  }, delay);  
									}
									else
									{
									$.jGrowl("Please Check your username and Password/Contact IT Department for help", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
				