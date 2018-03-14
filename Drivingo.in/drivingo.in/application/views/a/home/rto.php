

<div class="container">
	
<div class="col-sm-12" style="background-color:white">
<br>
<h2 align="center" style="padding-top:10px; padding-bottom:10px;color:black; "><b><u> RTO SERVICES</u></b></h2>
<div class="row" style="padding-top:50px; ">

<div class="w3agile contact">
			     <div class="contact-form">
			             <?php echo $this->session->flashdata('msg'); ?>
								<form action="<?php echo base_url();?>index.php/home/insert_rto" method="post">
									<p>Your Name </p>
									<input type="text" name="name" placeholder="Name"  required=""/>
									<p>Your Contact </p>
									<input type="text" name="contact" placeholder="Contact no."  required=""/>
									<p>RTO Service Type</p>
									<select value="service_type" name="service_type">
										<option id="$licence" value="licence_2W">Licence-2 Wheeler</option>
										<option id="$licence" value="licence_4W">Licence-4 Wheeler</option>
										<option name="RC">RC</option>
									</select>
									
									<p>Your Message</p>
									<textarea placeholder="Enter Message" required="" name="msg"></textarea>
								     <input type="submit" value="Submit" style="background-color:#29d1c8; border-radius:5px;">		
								</form> 
				</div> 
							
			</div>




 
 <br><br>
 <div class="row"><h4 style="padding-bottom:10px; "><h3> <p align="center"><b></b></h4></div>
  
</div>

</div>
<div>
