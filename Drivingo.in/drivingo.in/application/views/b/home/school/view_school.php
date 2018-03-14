<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"> View School </div>
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
                      <table class="table display product-overview mb-30" id="support_table" border="1">
                        <thead>
                             <tr>
                                  <th>School</th>
                                  <th>Area</th>
                                  <th>City</th>
                                   <th>Licence</th>
                                  <th>Licence Fee</th>
                                 
                                  <th>Address Line</th>
                                  <th colspan="3" style="text-align:center;">Contact no.</th>
                                 
                                  
                                  <th colspan="4" style="text-align:center;">Services</th>
                                  <th colspan="5" style="text-align:center;">Packages</th>
                                                      </tr>
                        </thead>

                         <?php foreach($school as $row){?>
                                                  <tbody>
                                <tr class="odd gradeX">
                                <td><?php echo $row['school_name'] ;?></td>
                                        <td><?php foreach($area as $row1){?><br><?php echo  $row1['area'] ;?> <?php } ?><br></td>
                                        <td><?php echo $row1['city'] ;?></td>
                                         <td><?php echo $row['licence'] ;?></td>
                                        <td><?php echo $row['license_fee'] ;?></td>
                                         <td><?php echo $row['address_line'] ;?></td>
                                        <td><?php echo $row['contact_no_1'] ;?></td>
                                        <td><?php echo $row['contact_no_2'] ;?></td>
                                        <td ><?php echo $row['landline'] ;?></td>
                                        <td><b>Free Fuel:</b>
                                          <?php echo $row['free_fuel'] ;?></td>
                                         <td ><b>Driver:</b><?php echo $row['driver'] ;?><br></td>
                                          <td ><b>Highway Learning:</b> <?php echo $row['highway_learning'];?></td>
                                          <td ><b>Traffic Learning:</b> <?php echo $row['traffic_learning'];?> </td>
                                            
                                          <td ><b>Vehicle:</b> <br> <?php foreach($package as $row2){?> <?php echo  $row2['vehical'];?><br>
                                               <?php } ?>
                                          </td>
                                          <td><b>Type:</b> <br> <?php  foreach($package as $row2){   echo  $row2['vehical_type'];?><br>
                                          <?php } ?></td>
                                          <td><b>Fee:</b> <br><?php foreach($package as $row2){ ?>Rs-<?php echo  $row2['fee'];?><br>
                                          <?php } ?></td>
                                          <td><b>Tax:</b> <br> <?php foreach($package as $row2){ ?>Rs-<?php echo  $row2['tax'];?><br>
                                          <?php } ?></td>
                                          <td><b>3 Days:</b> <br><?php foreach($package as $row2){ ?>Rs-<?php echo  $row2['trill'];?>
                                            <br><?php } ?></td>
                                 
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