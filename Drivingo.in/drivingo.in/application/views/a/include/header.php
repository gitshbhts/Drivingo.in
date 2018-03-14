<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from p.w3layouts.com/demos/aug-2016/02-08-2016/travel_hunt/web/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2017 11:37:05 GMT -->
<head>
<title>Drivingo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="keywords" content="Travel Hunt App Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="<?php echo base_url();?>public/a/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script>
        $('#username').on('input', function() {
	var input=$(this);
	var is_name=input.val();
	if(is_name){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
    });
</script>
		<script>  
		 $(document).ready(function(){  
		      $('#email').change(function(){  
		           var email = $('#email').val();  
		    
		           if(email != '')  
		           {  
		                $.ajax({  
		                     url:"<?php echo base_url(); ?>index.php/home/check_email_avalibility",  
		                     method:"POST",  
		                     data:{email:email},  
		                     success:function(data){  
		                        $("#email_result").html(data);
		                        
		                     }  
		                });  
		           }  
		      });  
		 });  
		 </script> 
	
	    <script type="text/javascript">  
	         $(document).ready(function() {  
	         $("#state_name").change(function(){  
	           $.ajax({  
	             url:"<?php echo  
	              base_url();?>index.php/backend/get_state",  
	              data: {id:  
	              $(this).val()},  
	             type: "POST",  
	               success:function(data){  
	             $("#stateDrp").html(data);  
	                     }  
	                  }); 
	                   
	               });  
	            });  
	         </script> 
	          <script type="text/javascript">  
	         $(document).ready(function() {  
	         $("#stateDrp").change(function(){  
	          var city = $(this).val();
	          
	           $.ajax({  
	             url:"<?php echo  
	              base_url();?>index.php/backend/get_city",  
	              data: {id:  
	              $(this).val()},  
	             type: "POST",  
	               success:function(data){  
	             $("#cityDrp").html(data);  
	                     }  
	                  }); 
	                 
	               });  
	            });  
	         </script> 

<script type="text/javascript">$(document).ready(function(){

	$('.post li').mouseout(function(){	
		alert('heloo');
			$(this).siblings().andSelf().removeClass('selected highlight')	
		}).mouseover(function(){

				$(this).siblings().andSelf().removeClass('selected');
				$(this).prevAll().andSelf().addClass('highlight');			
			})
	
	
	
	
	/* reset rating */

</script>	
  <style>
           
         
            h4 {color: #F60; margin-bottom: 0}
            ul {margin:0; padding:0;}
            li{cursor:pointer; list-style-type: none; display: inline-block; color: #F0F0F0; text-shadow: 0 0 1px #666666; font-size:1em;}
            p {text-align: justify;}
            .content {line-height:1.8em;}
            .post {border-bottom: #f0f0f0 1px solid; padding: 15px 5px;}
            .highlight, .selected {color:#F4B30A; text-shadow: 0 0 1px #F48F0A;}
        </style>
<!--font-awsome-css-->
    <link rel="stylesheet" href="<?php echo base_url();?>public/a/css/font-awesome.min.css"> 
<!--bootstrap-->
	<link href="<?php echo base_url();?>public/a/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--custom css-->
	<link href="<?php echo base_url();?>public/a/css/style.css" rel="stylesheet" type="text/css"/>
<!--component-css-->
	<script src="<?php echo base_url();?>public/a/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>public/a/js/bootstrap.min.js"></script>
<!--script-->
	<script src="<?php echo base_url();?>public/a/js/modernizr.custom.js"></script>
    <script src="<?php echo base_url();?>public/a/js/bigSlide.js"></script>
           <script>
				$(document).ready(function() {
				$('.menu-link').bigSlide();
				});
     </script>
    
<!-- web-fonts -->  
  <link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!-- //web-fonts -->
<!-- pop-up-box -->
<script src="<?php echo base_url();?>public/a/js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
		<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
        </script>
        
        
		<!-------------button---------->
				<style>
				/* Global Button */
				.transparent_btn {
					display: inline-block;
					padding: 10px 14px;
					color: #FFF;
					border: 1px solid #FFF;
					text-decoration: none;
					font-size: 14px;
					line-height: 120%;
					background-color: rgba(255,255,255, 0);
					-webkit-border-radius: 4px;
					-moz-border-radius: 4px;
					border-radius: 4px;
					-webkit-transition: background-color 300ms ease;
					-moz-transition: background-color 300ms ease;
					transition: background-color 300ms ease;
					cursor: pointer;
				}
				.transparent_btn:hover {
					background-color: rgba(255,255,255, 0.3);
					color: #FFF;
				}

				/* Orange Button */
				.transparent_btn.orange {
					color: #ffc65d;
					border-color: #ffc65d;
				}
				.transparent_btn.orange:hover {
					background-color: rgba(255, 198, 93, 0.3);
				}

				/* Blue Button */
				.transparent_btn.blue {
					color: #aeddf5;
					border-color: #aeddf5;
				}
				.transparent_btn.blue:hover {
					background-color: rgba(174, 221, 245, 0.3);
				}

				/* Green Button */
				.transparent_btn.green {
					color: #86ec93;
					border-color: #86ec93;
				}
				.transparent_btn.green:hover {
					background-color: rgba(134, 236, 147, 0.3);
				}
				</style>

<!--//pop-up-box -->
    </head>
    <body>
<div class="body-back">
	<div class="masthead pdng-stn1" >
		<div id="menu" class="panel" role="navigation" >
			<div class="wrap-content" >
				<div class="profile-menu text-center">
					<img class="border-effect" src="<?php echo base_url();?>public/a/images/image1.png" width="80" height="80" alt=" ">
						<h3><b>DRIVINGO</b></h3>

						<div class="pro-menu" >
							<div class="logo">
								<li><a class=" link link--yaku  active" href="<?php echo base_url();?>index.php">Home</a>
								</li>
								<br>
								<li><a  href="<?php echo base_url();?>index.php/home/login" class=" link link--yaku" >Login</li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/condition">Term & Conditions</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/policy">Privacy & Policy</a></li>
								<br>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/about">About us</a></li>

								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/contact">Help & Contact us</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/rto">RTO Services</a></li>
								<br><br><br>
                        <h5 style="color:white;line-height:25px;color:#fe7f09"><b>MADE IN INDIA<br>
                        WITH L<i class="fa fa-heart" aria-hidden="true"></i> VE</b></h5>
							</div>
				

						</div>
				</div>
			</div>
		</div>
		<div class="phone-box wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link" style="color:orange; "><a href="http://www.drivingo.in/"><b>DRIVINGO</b></a></h5>
				</div>
				<div class="Profile-right">
					<a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a> 
					<a href="#search" > <i class="fa fa-search" style="margin-left:20px;"></i></a>
						<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">D<span>r</span>i<span>v</span>i<span>n</span>g<span>o</span></a></h3>
						
	
							</div>
							<div class="login-form">
								<form action="<?php echo base_url();?>index.php/home/user_login" method="post">
									<p>User Name </p>
									<input type="text" name="user_name" required=""/>
									<p>User Password</p>
									<input type="password" name="user_password" required=""/>	 
									<div class="wthree-text"> 
										<ul> 
											<li>
												<input type="checkbox" id="brand" value="">
											</li>
											<li> <a href="<?php echo base_url();?>index.php/home/view_forgot_password">Forgot password?</a> </li>
										</ul>
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="">  
							<div class="booking-info">
							   <h3><a href="">D<span>r</span>i<span>v</span>i<span>n</span>g</span>o</a></h3>
							
	
							</div>
							<div class="login-form signup-form">
								<form action="<?php echo base_url();?>index.php/home/user_signup" method="post">
									<p>User Name </p>
									<input type="text" name="user_name"  id="username" required=""/>
										<p>User email </p>
									<input type="email" name="user_email"  id="email" required=""/>
									 <span id="useremail_result"></span>  
									<p>User Phone </p>
									<input type="text" name="user_phone"  id="email" required="" pattern="[7-9]{1}[0-9]{9}" title="Enter Your Phone number"/>
									 <span id="email_result"></span>  
								
									<p>User Password</p>
									<input type="password" name="user_password"  id="txtPassword" placeholder="" required=""/>	
									<p>Confirm Password</p>
									<input type="password" name="confirm_password" id="txtConfirmPassword" placeholder="" required=""/>	
								
									<input type="submit" value="Sign Up" onclick="return Validate()">	
								
								</form> 
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
					
				</div>
				<div class="clearfix"></div>
			</div> 
			 