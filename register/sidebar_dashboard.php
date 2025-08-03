
     <div class="span3" id="sidebar" >
                     </ul>
          
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active"> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
						<li>
                            <a href="borrow_request.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>Borrow Requests (
							<?php 
					$received = mysqli_query($conn,"SELECT * FROM borrow_request WHERE status = 'not_confirmed'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';

							?>  )</a>
                        </li>
						<li>
                            <a href="return_request.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>Return Requests ( 
							<?php 
					$received = mysqli_query($conn,"SELECT * FROM return_request WHERE status = 'not_confirmed'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';

							?>  )</a>
                        </li>
						<li >
                            <a href="file.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Add File</a>
                        </li>
						<li >
                            <a href="borrowed_files.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Borrowed Files</a>
                        </li>
						<li >
                            <a href="returned_files.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Free Files</a>
                        </li>
							<li>
                            <a href="search.php"><i class="icon-chevron-right"></i><i class="icon-search"></i>Search File</a>
                        </li>


                    </ul>
                </div>