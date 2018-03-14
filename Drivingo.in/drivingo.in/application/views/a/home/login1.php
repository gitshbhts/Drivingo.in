	<div class="login-form">
	<div align="center">	<?php if(isset($message)){
		    echo $message;
		}
		else{
		    echo " ";
		} 
		?>
		<div style="background-color:#e05757;"><h3 style="color:white;text-align:center;"><?php if(isset($m1)){
echo $m1;}?></h3></div>
		<?php echo $this->session->flashdata('msg')?>
				</div>				<form action="<?php echo base_url();?>index.php/home/user_login_cod" method="post">
									<p>User Name </p>
									<input type="hidden" name="area_id" value="<?php echo $area_id;?>">
									<input type="hidden" name="date" value="<?php echo $date;?>">
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
									<input type="text" name="user_name" required=""/>
									<p>User Password</p>
									<input type="password" name="user_password" required=""/>	 
									<div class="wthree-text"> 
								
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don’t have an account ?		<form action="<?php echo base_url();?>index.php/home/cod_signup" method="post">
								<input type="hidden" name="date" value="<?php echo $date;?>">
								<input type="hidden" name="time" value="<?php echo $time;?>">
									<input type="hidden" name="area_id" value="<?php echo $area_id;?>">	
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

									<input type="submit" value="Sign Up">		
								</form></p>
			</div>