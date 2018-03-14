
<!-- banner -->
   <div class="details-grid">
				<div class="details-shade">
						<div class="details-right">
							<h3>Welcome to</h3>
							<!-------------<img src="<?php echo base_url();?>public/a/images/image1.png" alt=" " width="100" height="100" alt=" " style="margin-bottom:-10px;" >-------------->
							<h3>Drivingo</h3>
							<h4>Learn. Drive. GO!</h4>
								
							
						</div>
					<div class="row" align="center">
								<button class="transparent_btn"  value="White Button" onclick="window.location.href='#search'"">Search schools</button>
								<button class="transparent_btn"  value="White Button" onclick="window.location.href='<?php echo base_url();?>index.php/home/rto'"">RTO Services</button>
						</div>

				
				</div>
			</div>
<?php echo $this->session->flashdata('msg')?>		
			<div style="padding-top:15px;padding-bottom:15px;background-color:white;"> 
			
<h4 style="text-align:center;">Welcome <span style="colorLred;"><b>	<?php 	echo $this->session->userdata('name'); ?></b></span> to the best place to find driving schools around you!</h4>
</div>
		<div class="w3agile banner-bottom" id="search">
				<ul>
				    <li><a class="hvr-radial-out"><i class="fa fa-fighter-jet" aria-hidden="true"></i></a><h6>Quick</h6></li>
					<li><a  class="hvr-radial-out"><i class="fa fa-coffee" aria-hidden="true"></i></a><h6>Easy</h6></li>
					<li><a  class="hvr-radial-out"><i class="fa fa-car" aria-hidden="true"></i></a><h6>Reliable</h6></li>
					<li><a  class="hvr-radial-out"><i class="fa fa-user" aria-hidden="true"></i></a><h6>Free</h6></li>
				</ul>
			</div>
   <!-- //banner -->
   <!--/welcome-->
<div class="w3agile welcome"> 
					<h4 class="w3ls-title"  style="text-align:center;">Search driving schools around you !</h4> 
					 <div class="w3agile contact">
			     
			       <div class="book-a-ticket">


							<div class=" bann-info" >
<form action="<?php echo base_url();?>index.php/home/search_result" method="post">
									<div class="ban-top">
										<div class="bnr-left">
											<label class="inputLabel">Enter city</label>
											<select name="area_id" id="state_name" required>
											<option value="">Select City</option>  
											<?php foreach($city as $data){?>
							  				<option value="<?php echo $data['city'];?>"><?php echo$data['city'];?></option>
							                 <?php } ?>
																												
											</select>
											</div>
										<div class="bnr-left">
											<label class="inputLabel">Enter Area</label>
											<select name="area" id="stateDrp" required >
									<?php  foreach($area as $row){?>		    
											<option value="<?php echo $row['area_id'];?>"><?php echo $row['area'];?></option>
											<?php } ?>
											</select>
										</div>
									<div class="clearfix"></div>
									</div>
									 <div class="ban-bottom">
									<div class="bnr-right">
										<label class="inputLabel">Preferred Date</label>
										<input class="datepicker" id="date" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" name="date" required>
									</div>

				<!---start-date-piker---->
				
									<link rel="stylesheet" href="<?php echo base_url();?>public/a/css/jquery-ui.css" />
									<script src="<?php echo base_url();?>public/a/js/jquery-ui.js"></script>
						
                            <script>
                            var dateToday = new Date();
                            var dates = $("#date").datepicker({
                                defaultDate: "+1w",
                                changeMonth: true,
                                numberOfMonths: 2,
                                minDate: dateToday,
                                onSelect: function(selectedDate) {
                                    var option = this.id == "from" ? "minDate" : "maxDate",
                                        instance = $(this).data("datepicker"),
                                        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                                    dates.not(this).datepicker("option", option, date);
                                }
                            });
                            	</script>					
									<div class="bnr-right">
									<label class="inputLabel" style="margin-bottom:15px;">Preferred Time
									<span class="opt"></span></label>
									
									<select name="time"><option></option>
									<option value="5:00 AM" >5:00 AM</option>
									<option value="5:30 AM" >5:30 AM</option>
									<option value="6:00 AM">6:00 AM</option>
									<option value="6:30 AM">6:30 AM</option>
									<option value="7:00 AM">7:00 AM</option>
									<option value="7:30 AM">7:30 AM</option>
									<option value="8:00 AM">8:00 AM</option>
									<option value="8:30 AM">8:30 AM</option>
									<option value="9:00 AM">9:00 AM</option>
									<option value="9:30 AM">9:30 AM</option>
									<option value="10:00 AM">10:00 AM</option>
									<option value="10:30 AM">10:30 AM</option>
									<option value="11:00 AM">11:00 AM </option>
									<option value="11:30 AM">11:30 AM </option>
									<option value="12:00 PM">12:00 PM</option>
									<option value="12:30 PM">12:30 PM</option>
									<option value="1:00 PM">01:00 PM</option>
									<option value="1:30 PM">01:30 PM</option>
									<option value="2:00 PM">02:00 PM</option>
									<option value="2:30 PM">02:30 PM</option>
									<option value="3:00 PM">03:00 PM</option>
									<option value="3:30 PM">03:30 PM</option>
									<option value="4:00 PM">04:00 PM</option>
									<option value="4:30 PM">04:30 PM</option>
									<option value="5:00 PM">05:00 PM</option>
									<option value="5:30 PM">05:30 PM</option>
									<option value="6:00 PM">06:00 PM</option>
									<option value="6:30 PM">06:30 PM</option>
									<option value="7:00 PM">07:00 PM</option>
									
									
									</select>
									</div>
								<div class="clearfix"></div>
				<!---start-date-piker---->
		
			<!---/End-date-piker---->
		</div>
			<div class="section_dest flight">
			<br>
			<label class="inputLabel"><h5><b>Type of Service</b></h5></label><br>
			<label class="radio-inline">
      	<input type="radio" name="licence" value="non_licence" required>Only Training
    	</label>
    	<label class="radio-inline">
      	<input type="radio" name='licence' value="licence" required>Training + licence
    	</label>
    
	</div>											 
									<div class="search">
										<input type="submit" value="Search">
									</div>
</form>
							</div>
					</div> 
			</div>
				</div>
		<!--//welcome-->
		<!--/footer-->
   