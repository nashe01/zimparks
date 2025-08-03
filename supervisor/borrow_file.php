
<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
<?php include("../connection/dbcon.php"); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('borrow_sidebar.php'); ?>
				<div class="span6" id="adduser">
				<?php include('add_borrow.php'); ?>		   			
				</div>
				<div class="span3" id=""></div>
                <div class="span3" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Files in Possesion</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span9">
								 <div class="block-content collapse in">
							        <div class="span9">

								<?php 
								$query_student = mysqli_query($conn,"select * from borrow where employee_number = '$empno' and file_status ='borrowed'")or die(mysqli_error());
								$count_student = mysqli_num_rows($query_student);
								?>
								
                                <div class="span6">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Files</strong>

                                    </div>
                                </div>
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