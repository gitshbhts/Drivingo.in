<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Manage City</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>index.php/backend">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">area</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                            </ol>
                        </div>
                    </div>

                     <?php echo $this->session->flashdata('msg'); ?>

                           <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-topline-yellow">
                                <div class="card-head">
                                	    <a href="<?php echo base_url();?>index.php/backend/add_city"><button>Add City</button></a>
                                    <header>Category</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                             
                                    </div>
                                </div>

                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
												     <tr>
					                                            	<th>S.no</th>
					                                            	
					                                                <th> City</th>
					                                                <th> State</th>
					                                          
					                                                <th> Action </th>
					                                            </tr>
												</thead>
											   <?php foreach($category as $data){?>
					                                        <tbody>
																<tr class="odd gradeX">
																	<td class="patient-img">
																<?php echo $data['city_id'];?>
																	</td>
																	
																	
																	<td class="center"><?php echo $data['city'];?></td>
												<td class="patient-img">
																<?php echo $data['state'];?>
																	</td>
																	<td>
																
						<button class="btn btn-danger btn-xs"><a href="<?php echo base_url();?>index.php/backend/delete_city/<?php echo $data['city_id'];?>">
					<i class="fa fa-trash-o "></i></a>
					</button>
																	</td>
																</tr>
																
															</tbody>
															<?php } ?>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- end chat sidebar -->
        </div>