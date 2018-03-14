	<div class="login-form">
	    <?php echo $this->session->flashdata('msg'); ?>
								<form action="<?php echo base_url();?>index.php/home/user_login" method="post">
									<p>User Name </p>
									<input type="text" name="user_name" required=""/>
									<p>User Password</p>
									<input type="password" name="user_password" required=""/>	 
									<div class="wthree-text"> 
										<ul> 
								
										
							
											<li> <a href="<?php echo base_url();?>index.php/home/view_forgot_password">Forgot password?</a> </li>
										</ul>
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
			</div>