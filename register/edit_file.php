	<!-- Modal -->
		<div class="modal fade" id="<?php echo $mytin; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<?php
		$user_query = mysqli_query($conn,"select * from file where tin_number = '$mytin'")or die(mysqli_error());
		while($row = mysqli_fetch_array($user_query)){
		$myid=$row['file_id'];
		$myfile=$row['file_name'];
		$mytrade=$row['trade_name'];
		$mytype=$row['file_type'];
		$mycategory=$row['file_category'];
		$myblock=$row['block'];
		}?>	
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">EDIT FILE <?php echo $mytin; ?></h4>
			</div>
			
			
			<div class="modal-body">
				 <form  role="form" class="login_form" method="post" action="editfile.php">
					<div class="form-group">
					<input type="hidden" id="" name="myid1" value="<?php echo $myid; ?>" >
					<p>FILE NAME :<input class="input focused" name="file_name1" id="focusedInput" type="text"  value="<?php  echo $myfile; ?>" required></p>
					<p>TRADE NAME:<input class="input focused" name="trade_name1" id="focusedInput" type="text"  value="<?php  echo $mytrade; ?>" ></p>
					<p>TIN NUMBER:<input class="input focused" name="tin_number1" id="focusedInput" type="text"  value="<?php  echo $mytin; ?>" required></p>
					<p>FILE TYPE :		
									<select name="file_type1"  class="" required>
                                     <option value ="individual"> Individual </option>
									<option value ="entity">Entity </option>
                                     </select> </p>
					<p>CATEGORY  :	
									<select name="file_category1"  class="" required>
                                     <option value ="main">Main </option>
									<option value ="request">request </option>
									<option value ="memo"> memo </option>
									<option value ="invitation">invitation </option>
                                     </select> </p>
										
					<p>BLOCK     :	
									<select name="block_name1"  class="" required>
										  <?php
											if ($staff_region =="Zimbabwe"){ ?>
                                          
                                             	<option value ="Harare Province">Harare Province </option>
												<option value ="Bulawayo Province">Bulawayo Province </option>
												<option value ="Masvingo Province">Masvingo Province </option>
                                               	<option value ="Manicalnd Province">MManicaland Province </option>
                                                <option value ="Masvingo Province">Masvingo Province </option>
												<option value ="Mashonaland East Province">Mashonaland East Province </option>
												<option value ="Mashonaland West Province">Mashonaland West Province </option>
                                               	<option value ="Mashonaland Central Province">Mashonaland Central Province </option>
                                                <option value ="Matebeleland North Province">Matebeleland North Province </option>
												<option value ="Matebeleland South Province">Matebeleland South Province </option>
												
                                        
                                        
                                        
                                            </select>
                        <select>
                        
											<?php }else{ ?>
								
                                             	<option value ="ECOWAS">ECOWAS </option>
												<option value ="COMESA">COMESA </option>
	                                           	<option value ="SACU">SACU </option>
                                                <option value ="COMOROS">COMOROS </option>
												<option value ="CEMAC">CEMAC </option>
	                                           	<option value ="SADCC">SADCC </option>
                                                <option value ="AU">AU</option>
                                                    <option value ="EU">EU </option>

                        
                                            </select>
											<?php } ?></p>

					</div>
					
					<button  type="submit" class="btn btn-success" class="fa fa-save"></i> Update</button>
					</form>
			
			</div>
					
			<div class="modal-footer">
									
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
			</div>
			</div>
			
		</div>
		</div>