  <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Area</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>index.php/backend">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="<?php echo base_url();?>index.php/backend/manage_area">Manage Area</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Area</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-topline-aqua" id="form_wizard_1">
                                <div class="card-head">
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <?php foreach($area as $data){?>
                        <form class="form-horizontal" action="<?php echo base_url();?>index.php/backend/update_area" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                         
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-info"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">

                                            
                                                        <h3 class="block">Add your Area details...</h3>
                                                                <div class="form-group">
                                                    <label class="control-label col-md-3">
                                                                <span class="required">  </span>
                                                            </label>
                                                            <div class="col-md-5">
                                                                <input type="hidden" class="form-control input-height" placeholder="enter your city" name="area_id"   value="<?php echo $data['area_id'];?>" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Area
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-5">
                                                               <textarea name="area"  class="form-control input-height" placeholder="enter your area" ><?php echo $data['area'];?></textarea>
                                                            </div>
                                                        </div>
                                                          <div class="form-group">
                                                            <label class="control-label col-md-3">City
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control input-height" placeholder="enter your city" name="city" value="<?php echo $data['city'];?>"  />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">State
                                                                <span class="required"> * </span>
                                                            </label>
                                                <div class="col-md-5">

                                                <select class="form-control input-height" name="state_name" required>
                                               
                                                      <?php foreach($state as $row){?>
                                                  <option value="<?php echo $row['state_name'];?>"><?php echo $row['state_name']; ?></option>
                                                    <?php } ?>
                                                   
                                                                 
                                                    </select>
                                                 <h5 style="color:red;">Selected *   <?php echo $data['state'];?></h5>
                                                    </div>
                                                        </div>
                                                          
                                                     <div class="form-group">
                                                     <button type="submit" class="btn btn-primary" style="margin-left:620px; ">submit</button>
                                                        </div>
                                                    </div>
                                                   
                                          
                                                    
                    </div>
                    
                </div>
            </div>
        </form>
        <?php } ?>
            <!-- end chat sidebar -->
        </div>