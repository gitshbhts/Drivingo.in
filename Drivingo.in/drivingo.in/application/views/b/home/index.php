
  <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>index.php/">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>

                     <?php echo $this->session->flashdata('msg'); ?>
                   <!-- start widget -->
      
					<div class="row">
							<div class="state-overview">
							<div class="col-lg-4 col-sm-6">
								<div class="overview-panel purple">
									<div class="symbol">
										<i class="fa fa-book"></i>
									</div>
									<div class="value white">
										<?php foreach($id as $data){?>
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php echo $data['count(id)'];?>">0</p>
										<p>Total Booking </p>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel green-bgcolor">
									<div class="symbol">
										<i class="fa fa-car"></i>
									</div>
									<div class="value white">

									<?php foreach($school_id as $data1){?>	
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php echo $data1['count(school_id)'];?>">0</p>
										<p>Total School</p>
										<?php } ?>
									</div>
								</div>
							</div>
					
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-users"></i>
									</div>
									<div class="value white">
										<?php foreach($user_id as $data2) { ?>
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php echo $data2['count(user_id)'];?>">0</p><span></span>
										<p>Total User</p>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						</div>
					<!-- end widget -->
                     <!-- chart start -->
                   
                     <!-- Chart end -->
                    
                     <!-- start admited patient list -->
           
                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
   
            <!-- end chat sidebar -->
        </div>