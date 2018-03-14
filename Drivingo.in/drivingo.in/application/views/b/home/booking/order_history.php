<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Order History</div>
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
					                                              <th> 3 days Package </th>
					                                            <th> User Name </th>
					                                            <th> Contact </th>
					                                                           <th>Delivery  Address </th>
					                                            <th> School</th>
					           
					                                            <th> Payment mode</th>
					                                            <th> Total Price</th>
					                                            <th> Discount</th>
					                                            <th> Licence fee</th>
					                    <th> Preffred Time</th>
					                                                           <th> Preffred Date</th>
					                                                           <th> Order Date</th>
					                                            <th> Order id</th>
					                                       <th> Action</th>     
					               
					                                                
					                                            </tr>
												</thead>
											   <?php foreach($user as $data){?>
					                                        <tbody>
																<tr class="odd gradeX">
																    <td class="patient-img">
																        <input type="checkbox" name="id[]" value="<?php echo $data['id'];?>">
																        </form>
																<?php echo $data['id'];?>
																	</td>
																	<td class="patient-img">
																<?php echo $data['trill_pack'];?>
																	</td>
																	<td class="patient-img">
																<?php echo $data['user_name'];?>
																	</td>
																	<td><?php echo $data['user_phone'];?></td>
																								<td><?php echo $data['address_line_1'];?><br>
																							<?php echo 	$data['address_line_2'];?>
													<?php echo 												$data['area'];?>
															<?php echo 										$data['city'];?><br>
															<?php echo 										$data['contact'];?></td>
																	<td><?php echo $data['school_name'];?></td>
									
									
																											<td><?php echo $data['payment_mode'];?></td>
																	<td><?php echo $data['actuall_price'];?></td>
																	<td><?php echo $data['Discount_price'];?></td>
																	<td><?php echo $data['licence_fee'];?></td>
																		<td><?php echo $data['prefred_time'];?></td>
											<td><?php echo $data['prefered_date'];?></td>						
																
																	<td><?php echo $data['date'];?></td>
																		<td><?php echo $data['order_id'];?></td>
																		
																	
																	
									
																	<td>
								
											<a href="<?php echo base_url();?>index.php/backend/delete_order/<?php echo $data['id'];?>"   >Delete<a>
									
													
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