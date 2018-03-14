   <div class="w3agile contact">
			       <h3 class="w3ls-title2">User</h3>
			       <div class="book-a-ticket">


							<div class=" bann-info">
								<form action="https://p.w3layouts.com/demos/aug-2016/02-08-2016/travel_hunt/web/flight-single.html" method="post">
									<div class="ban-top">
								
								
							<div class="clearfix"></div>
									</div>
									 <div class="section_dest flight">
									 <br>
						 <form>
	<div class="ban-bottom">
    <label class="inputLabel">Name</label>
      <input type="text" name="user_name" >
  </div>
  <div class="ban-bottom">
    <label class="inputLabel"> Email  </label>
      <input type="text" name="user_email">
</div>

     <label class="inputLabel">Password</label>
      <input type="text" name="user_phone">
   	<label class="inputLabel">Phone    </label>
      <input type="text" name="user_password">

    
  </form>
																		 </div>
																		 <br>
																		 <br>
									 <div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel"><h5><b>Preferred Date</b></h5></label>
				<input class="date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
			</div>
			<div class="bnr-right">
				<label class="inputLabel"><h5><b>Preferred Time</b></h5><span class="opt"></span></label>
				<input class="date" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
			</div>
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="<?php echo base_url();?>public/a/css/jquery-ui.css" />
				<script src="<?php echo base_url();?>public/a/js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->
		</div>
						  
									<div class="search">
									
										<input type="submit" value="Search">
									</div>
								</form>
							</div>
					</div> 
			</div>