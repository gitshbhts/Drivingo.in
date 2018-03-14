
 <div class="w3agile contact">
			     <div class="contact-form">
			       
								<form action="<?php echo base_url();?>index.php/home/online_payment" method="post">
								    <input type="hidden" name="trill" value="<?php if($trill==null){
								    echo '0';}else {echo $trill;}?>">
									<input type="hidden" name="area_id" value="<?php echo $area_id;?>">	
									<input type="hidden" name="date" value="<?php echo $date;?>">	
									<input type="hidden" name="payment_mode" value="<?php echo $payment_mode;?>">
									<input type="hidden" name="time" value="<?php echo $time;?>">	
									<input type="hidden" name="school_name" value="<?php echo $school_name;?>">
									<input type="hidden" name="school_id" value="<?php echo $school_id;?>">
									<input type="hidden" name="address_line" value="<?php echo $address_line;?>">
									<input type="hidden" name="area" value="<?php echo $area;?>">
									<input type="hidden" name="city" value="<?php echo $city;?>">
									<input type="hidden" name="licence" value="<?php echo $licence;?>">
									<input type="hidden" name="license_fee" value="<?php echo $license_fee;?>">
								    <input type="hidden" name="total_fee" value="<?php echo $total;?>">
								    <input type="hidden" name="discount" value="<?php echo $discount;?>">
								    <input type="hidden" name="vehical_type" value="<?php echo $vehical_type;?>">
								    <input type="hidden" name="vehical" value="<?php echo $vehical;?>" >
								    <input type="hidden" name="fee" value="<?php echo $fee;?>">
								    <input type="hidden" name="tax" value="<?php echo $tax;?>">
								    <input type="hidden" name="id" value="<?php echo $id;?>">
									<input type="hidden" name="user_name" value="<?php echo $this->session->userdata('name');?>"  required=""/>
									<input type="hidden" name="order_id" value="<?php echo $id ;?>"  required=""/>
									<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id');?>" required=""/>
									<input type="hidden" name="user_phone" value="<?php echo $this->session->userdata('user_phone');?>"  required=""/>	
									<p>Address Line 1</p>
									<input type="text" placeholder="enter your Address line 1" name="address1">
									<p>Address Line 2</p>
									<input type="text" placeholder="enter your Address line 2 "  name="address2">
									<p>City</p>
									<input type="text" placeholder="enter your City" required="" name="city" required>
									<p>Area</p>
									<input type="text" placeholder="enter your Area"  name="area">
									<p>Contact No.</p>
									<input type="text" placeholder="enter your Contact"  name="contact" required>
							
								     <input type="submit" value="Confirm Order" style="background-color:#29d1c8; border-radius:5px;">	
										
									
								</form> 
				</div> 
							
			</div>

