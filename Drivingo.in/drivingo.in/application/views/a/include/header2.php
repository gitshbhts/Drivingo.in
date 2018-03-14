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
<script src="<?php echo base_url();?>public/a/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/a/js/rating.js" type="text/javascript"></script>   
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  
  <!--------------------Rating Stars---------------->
  <style>
            body{width:600; font-family:Verdana, Geneva, sans-serif; color:#333;}
            h2 {background-color: #CCC; padding: 15px; text-align: center;}
            h4 {color: #F60; margin-bottom: 0}
            ul {margin:0; padding:0;}
            li{cursor:pointer; list-style-type: none; display: inline-block; color: #F0F0F0; text-shadow: 0 0 1px #666666; font-size:1.4em;}
            p {text-align: justify;}
            .content {line-height:1.8em;}
            .post {border-bottom: #f0f0f0 1px solid; padding: 15px 5px;}
            .highlight, .selected {color:#F4B30A; text-shadow: 0 0 1px #F48F0A;}
        </style>
        <!--<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url();?>public/a/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function(){
	$('.post li').mouseout(function(){	

			$(this).siblings().andSelf().removeClass('selected highlight')	
		}).mouseover(function(){

				$(this).siblings().andSelf().removeClass('selected');
				$(this).prevAll().andSelf().addClass('highlight');			
			})
	
	
		$('.post li').click(function(){
			
			$(this).prevAll().andSelf().addClass('selected');
			var parent = $(this).parent();		
			var oldrate =  $('li.selected:last', parent).index();
			parent.data('rating',(oldrate+1))
			data = new Object();
			data.id = parent.data('id');
			data.rating = parent.data('rating')

				$.ajax({
				url: "<?php echo base_url(); ?>index.php/home/insert_rating_star",// path of the file
				data: data,
				type: "POST",
				success: function(data) {  
					alert('Your rating is accepted.');
				}
			});
		})	
	
	/* reset rating */
	jQuery('.post ul').mouseout(function(){ 
		var rating = $(this).data('rating');
		if( rating > 0)	{
			$('li:lt('+rating+')',this).addClass('selected');
		}
	})
})
</script>
<script src="<?php echo base_url();?>public/a/js/rating.js" type="text/javascript"></script> 	
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
		<!-------------button---------->
				<style>
				/* Global Button */
				.transparent_btn {
					display: inline-block;
					padding: 10px 14px;
					color: #FFF;
					border: 1px solid #FFF;
					text-decoration: none;
					font-size: 10px;
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
								</li><br>
							    	<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/setting">My Account</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/condition">Term & Conditions</a></li>
						
			
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/about">About us</a></li>

								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/contact">Help & Contact us</a></li>
								<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/rto">RTO Services</a></li>
							<li><a class=" link link--yaku" href="<?php echo base_url();?>index.php/home/purchase_history">Purchase History</a></li><br>
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
			 