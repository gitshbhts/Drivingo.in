<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"> Manage School</div>
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
					                                            	<th> School</th>
					                                       
					                                          
					                                                
					                                                 <th> Contact 1 </th>
					                                                 <th> Contact 2</th>
					                                                  <th> Action</th>
					                                            </tr>
												</thead>

											   <?php foreach($school as $data){?>
					                                        <tbody>
																<tr class="odd gradeX">
															<td ><?php echo $data['school_id'];?></td>
																	<td><?php echo $data['school_name'];?></td>
																	
																	<td><?php echo $data['contact_no_1'];?></td>
																	<td><?php echo $data['contact_no_2'];?></td>
																	<td><?php echo $data['landline'];?></td>
																	
																	<td>
																		<button class="btn btn-primary btn-xs">
																			<a href="<?php echo base_url();?>index.php/backend/edit_school/<?php echo $data['school_id'];?>"  style="color:white;"  ><i class="fa fa-pencil"></i><a>
																		</button>
																		<button class="btn btn-primary btn-xs">
																			<a href="<?php echo base_url();?>index.php/backend/delete_school/<?php echo $data['school_id'];?>"  style="color:white;"  ><i class="fa fa-trash-o"></i><a>
																		</button>
																		<button class="btn btn-primary btn-xs">
																			<a href="<?php echo base_url();?>index.php/backend/view_school/<?php echo $data['school_id'];?>"  style="color:white;"  ><i class="fa fa-eye"></i><a>
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