 <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.radixtouch.in/hospital/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2017 06:21:45 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Drivingo.com</title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    
	<!-- icons -->
    <link href="<?php echo base_url();?>public/b/js/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/b/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
	<!--bootstrap -->
    <link href="<?php echo base_url();?>public/b/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/b/js/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Theme Styles -->
    <link href="<?php echo base_url();?>public/b/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo base_url();?>public/b/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/b/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/b/css/responsive.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script src="script.js"></script>
 
        <script type="text/javascript">  
         $(document).ready(function() {  
         $("#city").change(function(){  
    
           $.ajax({  
             url:"<?php echo  
              base_url();?>index.php/backend/get_state",  
              data: {id:  
              $(this).val()},  
             type: "POST",  
               success:function(data){  
             $("#stateDrp").html(data);
          
              $('#stateDrp').multiselect();  
                     }  
                  }); 
                   
               });  
            });  
         </script> 

    
	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/b/img/image1.png" /> 
 </head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-container-bg-solid page-content-white page-md">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                 
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- logo end -->
             
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                      <?php if ($this->session->userdata('is_logged_in')): ?> 
                    <ul class="nav navbar-nav pull-right">
                    	<!-- start language menu -->
                
                        <!-- end language menu -->

                        <!-- start notification dropdown -->
            
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 				
                        <!-- end manage user dropdown -->
 						
                    </ul>
                </div>
                     <?php else:  redirect('backend/login'); ?>
                         <?php endif; ?> 
            </div>
        </div>
        <!-- end header -->
        <div class="clearfix"> </div>
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="<?php echo base_url();?>public/b/img/image1.png" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p>Admin</p>
	                                   
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start active open">
	                            <a href="<?php echo base_url()?>index.php/backend" class="nav-link "> <i class="fa fa-tachometer"></i> <span class="title">Dashboard</span>
	                            </a>
	                        </li>
                           
	                       <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-map-marker"></i>
                                    <span class="title">City & Area</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/manage_area" class="nav-link "> <span class="title">Manage Area</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/add_area" class="nav-link "> <span class="title">Add Area</span>
                                        </a>
                                    </li>
                                   <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/Manage_city" class="nav-link "> <span class="title">Manage  City</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-car"></i>
	                                <span class="title">Driving Schools</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url();?>index.php/backend/manage_school" class="nav-link "> <span class="title">Manage School</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                           <a href="<?php echo base_url();?>index.php/backend/add_school" class="nav-link "> <span class="title">Add School</span>
	                            </a>
	                                </li>
	                              
	                              
	                            </ul>
	                        </li>
	                        <li class="nav-item  ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-book"></i>
	                                <span class="title">Booking & Payment</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url();?>index.php/backend/order_history" class="nav-link "> <span class="title">Booking History</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url();?>index.php/backend/new_order" class="nav-link "> <span class="title">New Order</span>
	                                    </a>
	                                </li>
	                            </ul>


	                        </li>

                                <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-users"></i>
                                    <span class="title">User</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/manage_user" class="nav-link "> <span class="title">Manage User</span>
                                        </a>
                                    </li>
                                </ul>

                                          </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-book"></i>
                                    <span class="title">Discount Code</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                     <a href="<?php echo base_url();?>index.php/backend/manage_discount" class="nav-link "> <span class="title">Manage Discount Code</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/add_discount" class="nav-link "> <span class="title">Add Discount Code</span>
                                        </a>
                                    </li>
                                </ul>


                            </li>
                                
                            </li>
                               <li class="nav-item  ">
                                <a href="#" class="nav-link nav-toggle"> <i class="fa fa-cog"></i>
                                    <span class="title">Setting</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/manage_admin" class="nav-link "> <span class="title">Change Password</span>
                                        </a>
                                    </li>
                                     <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/manage_contact" class="nav-link "> <span class="title">Manage Contact </span>
                                        </a>
                                    </li>
                                     <li class="nav-item  ">
                                        <a href="<?php echo base_url();?>index.php/backend/manage_terms_condition" class="nav-link "> <span class="title">Manage Terms & Condition</span>
                                        </a>
                                    </li>
                            
                                </ul>

                                
                            </li>
                               <li class="nav-item start active open">
                                <a href="<?php echo base_url()?>index.php/backend/rto" class="nav-link "> <i class="fa fa-tachometer"></i> <span class="title">Rto Enquiry</span>
                                </a>
                            </li>
                               <li class="nav-item start active open">
                                <a href="<?php echo base_url()?>index.php/backend/logout" class="nav-link "> <i class="fa fa-tachometer"></i> <span class="title">Logout</span>
                                </a>
                            </li>
	                    </ul>
	                </div>
                </div>
            </div>