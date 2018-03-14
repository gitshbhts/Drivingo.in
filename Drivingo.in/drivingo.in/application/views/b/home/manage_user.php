<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">User List</div>
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
                                    <header>User list</header>
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
					                               <th> User Name</th>
					                               <th> User Phone</th>
					                               <th>View Adhaar</th>
					                               <th>Action</th>
					                               </tr>
												</thead>
											   <?php foreach($category as $data){?>
					                                        <tbody>
																<tr class="odd gradeX">
																	<td class="patient-img">
																<?php echo $data['user_id'];?>
																	</td>
									<td><?php echo $data['user_name'];?></td>
																	
									<td class="center"><?php echo $data['user_phone'];?></td>
										
																	
									<td class="center"><img src="<?php echo base_url().$data['adhaar_image_path'].'/'.$data['adhaar_image'];?>" style="width:200px;"></td>	
										<td>
																		<button class="btn btn-primary btn-xs">
																			<a href="<?php echo base_url();?>index.php/backend/delete_user/<?php echo $data['user_id'];?>"  style="color:white;"><i class="fa fa-trash-o"></i><a>
																		</button>
													
																	</td>		
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