<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from p.w3layouts.com/demos/aug-2016/02-08-2016/travel_hunt/web/main.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2017 11:37:05 GMT -->
<head>
<title>Drivingo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Hunt App Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta charset utf="8">

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

 <script type="text/javascript">  
       function submitForm(url){

    var data = $("$update-form").serialize();
    $.ajax({
        type : 'POST',
        url  : url,
        data : data,
        success :  function(data){
            $(".display").html(data);
        }
    });
} 
         </script> 
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.checked {
    color: orange;
}
</style>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>  
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  
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
	<div class="masthead pdng-stn1">
		<div id="menu" class="panel" role="navigation">
			<div class="wrap-content">
				<div class="profile-menu text-center">
					<img class="border-effect" src="<?php echo base_url();?>public/a/images/image1.png" width="80" height="80" alt=" ">
						

						<div class="pro-menu">
							<?php if ($this->session->userdata('is_logged_in')): ?> 
							<h3 style="color:white;"><?php echo $this->session->userdata('name'); ?></h3><br><br>
							<div class="logo">
								<li><a class=" link link--yaku  active" href="<?php echo base_url();?>index.php">Home</a>
								</li>
							    	<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/setting">My Account</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/condition">Term & Conditions</a></li>
						
			
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/about">About us</a></li>

								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/contact">Help & Contact us</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/rto">RTO Services</a></li>
							<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/purchase_history">Purchase History</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/logout">Log Out</a></li>
							</div>
				<?php else:  redirect('home'); ?>
                         <?php endif; ?>
    			<br><br><br>
                          <h5 style="color:white;line-height:25px;color:#fe7f09"><b>MADE IN INDIA<br>
                        WITH L<i class="fa fa-heart" aria-hidden="true"></i> VE</b></h5>
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
			
					<a href="<?php echo base_url();?>index.php/home/#search" > <i class="fa fa-search" style="margin-left:20px;"></i></a>
						<!-- modal -->
				
					<!-- //modal --> 
					<!-- modal-two -->
			
					<!-- //modal-two --> 
					
				</div>
				<div class="clearfix"></div>
			</div> 
			 