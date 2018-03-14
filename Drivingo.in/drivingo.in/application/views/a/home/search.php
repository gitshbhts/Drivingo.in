   <div class="w3agile contact">
   	 <?php echo $this->session->flashdata('name'); ?>
   	 
			   <form method="post" action="<?php echo base_url();?>index.php/home/search_result">
			   <div class="ban-top">
										 <div class="section_dest flight">
						   <label class="inputLabel"><h5><b>Select Your City</b></h5></label>
						<select name="area_id" id="state_name">
						<option value="">Select City</option>  
					<?php foreach($area as $data){?>
  					<option value="<?php echo $data['city'];?>"><?php echo$data['city'];?></option>
                        <?php } ?>
																					
																				</select>
					
									<div class="section_dest flight">
			<label class="inputLabel"><h5><b>Select your Area</b></h5></label>
																	<select name="area" id="stateDrp">
																		<option value="0">Select Your Area</option>
																					
																					
																		</select>
																		 </div>
											<div class="clearfix"></div>
									</div>
									 <div class="section_dest flight">
									 <br>
						   <label class="inputLabel"><h5><b>Type of Service</b></h5></label><br>
																			 <form>
    <label class="radio-inline">
      <input type="radio" name="licence" value="non_licence">Only Training
    </label>
    <label class="radio-inline">
      <input type="radio" name='licence' value="licence">Training + licence
    </label>
    
  </form>
																		 </div>
																		 <br>
																		 <br>

									 <div class="ban-bottom">
			
													<div class="bnr-right">
				<label class="inputLabel"><h5><b>Preferred Date</b></h5></label>
				<input class="date" id="datepicker" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" name="date" required>
			</div>
			
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="<?php echo base_url();?>public/a/css/jquery-ui.css" />
				<script src="<?php echo base_url();?>public/a/js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script><br>
			<!---/End-date-piker---->

											<div class="bnr-right">
												<label class="inputLabel"><h5><b>Preferred time</b></h5><span class="opt"></span></label>
												<input input="timepicker" name="time" id="timepicker1" class="timepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
											</div>
												<div class="clearfix"></div>
												<!---start-date-piker---->
												<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
												<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
													<script>
														$(document).ready(function(){
    										$('input.timepicker').timepicker({});
												});
													</script>
											<!---/End-date-piker---->
										</div>





			
			
			<div class="search">
									
										<input type="submit" value="search" >
										<br>
									</div>
			   </form>
			     

