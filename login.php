<?php
		include_once('connection/dbcon.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
	
			$query = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
			$status =$row['status'];
			$pass=$row['password'];
		

		if( $num_row > 0 ) {
		session_start();			
		$_SESSION['id']=$row['staff_id'];
		
				 if ($status=='administrator' and $pass !='12345'){
					echo 'true_admin';
				}else
				 if ($status=='register' and $pass !='12345'){
					echo 'true_register';
				}else
				if ($status=='normal' and $pass !='12345')
				{
					echo 'true_normal';
				}else
				if ($status=='supervisor' and $pass !='12345')
				{
					echo 'true_supervisor';
				}else
				if ($status=='administrator' and $pass='12345')
				{
					echo 'admin_pass';
				}
				else
				if ($status=='register' and $pass='12345')
				{
					echo 'reg_pass';
				}else
				if ($status=='supervisor' and $pass='12345')
				{
					echo 'sup_pass';
				}else
				{
					echo 'normal_pass';
				}
				
				
	mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$username', 'logged In')")or die(mysqli_error());
	mysqli_query($conn,"update staff set online = 'yes'  where username = '$username' and password='$password' ")or die(mysqli_error());
				}
					
		else{ 
				echo 'false';
		}	
				
		?>