     <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li > <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>

						<li>
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Add Staff</a>
                        </li>
						<li class="active">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> User Log</a>
                        </li>
						<li>
                            <a href="password.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>Reset Password</a>
                        </li>
						<li>
                            <a href="reports.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>View Reports</a>
                        </li>
						<li>
						<a href="online.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>Online (
						<?php 
					$received = mysqli_query($conn,"SELECT * FROM staff WHERE online = 'yes'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';
							?>  )</a>
						</li>
                    </ul>
                </div>