 <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                      <li> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
					<li >
                            <a href="borrow_file.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>Borrow File</a>
                        </li>
						<li>
                            <a href="return_file.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>Return File</a>
                        </li>
						<li >
                            <a href="files_in.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>Files In Possesion</a>
                        </li>
						<li >
                            <a href="pending_borrow.php"><i class="icon-chevron-right"></i><i class="icon-envelope"></i>Pending to Borrow (
							<?php 
					$received = mysqli_query($conn,"SELECT * FROM borrow_request WHERE status = 'not_confirmed' and employee_number='$empno'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';

							?>  )</a>
				
                        </li>	
						<li >
                            <a href="pending_return.php"><i class="icon-chevron-right"></i><i class="icon-envelope"></i>Pending to Return (
							<?php 
					$received = mysqli_query($conn,"SELECT * FROM return_request WHERE status = 'not_confirmed' and employee_number='$empno'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';

							?>  )</a>
							
                        </li>
						<li>
                            <a href="user_report.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>Borrow HIstory</a>
                        </li>
                    </ul>
                </div>