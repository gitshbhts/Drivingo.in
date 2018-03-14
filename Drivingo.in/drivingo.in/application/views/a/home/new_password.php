

<div class="container">
	
<div class="col-sm-12">
<br>
<h2 align="center" style="padding-top:10px; padding-bottom:10px; "><b><u> Setting </u></b></h2>
<div class="row" style="padding-top:50px; ">
<?php echo $this->session->flashdata('msg')?>
<div class="w3agile contact">
			     <div class="contact-form">
		
			         <?php  foreach($get_data as $data){?>
								<form action="<?php echo base_url();?>index.php/home/update_user" method="post">
								    	<input type="hidden" id="user_id" value="<?php echo $data['user_id'];?> " name="user_id"  required="" />
								
									<input type="hidden"  value="<?php echo $data['user_name'];?> " name="user_name"  required="" />
								
					<input type="hidden" name="user_phone"   id="email"  value="<?php echo $data['user_phone'];?>"  required=""/>
									 <span id="email_result"></span>  
					<input type="hidden" name="old_password" id="old_password"  value="<?php echo $data['user_password'];?>"  required=""/>	
							
					<input type="hidden"  value="<?php echo $data['user_email'];?> "name="user_email"   required=""/>
						<p>New Password</p>
					<input type="password" name="new_password" id="txtPassword"  value=""  required=""/>	
				<p>Confirm Password</p>
				<input type="password" name="confirm_password" id="txtConfirmPassword" placeholder="" required=""/>
					<input type="submit"  value="confirm password" style="background-color:#29d1c8; border-radius:5px;">		
								</form> 
								<?php  } ?>
				</div> 
							
			</div>

 <br><br>
 <div class="row"><h4 style="padding-bottom:10px; "><h3> <p align="center"><b></b></h4></div>
  
</div>

</div>
</div>