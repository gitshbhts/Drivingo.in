  <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add City</div>
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
                        <form class="form-horizontal" action="<?php echo base_url();?>index.php/backend/insert_city" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                         
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-info"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                                                        <h3 class="block">Add your City details...</h3>
                                                       
                                                
                                                        
                                                         <div class="form-group">
                                                            <label class="control-label col-md-3">Add State
                                                                <span class="required"> * </span>
                                                            </label>
                                                        <div class="col-md-5">
                                                          <select  class="form-control" name="state_name" id="city">
                                          <option value="">---Select State---</option>  
                                           <?php foreach($state as $data){?>
                            <option value="<?php echo $data['state_name'];?>"><?php echo$data['state_name'];?></option>
                        <?php } ?>
                                          
                                        </select>
                                                            </div>
                                                        </div> 
                                                         <div class="form-group">
                                                            <label class="control-label col-md-3">Add City
                                                                <span class="required"> * </span>
                                                            </label>
                                                        <div class="col-md-5">
                                                        <textarea name="city" rows="10" class="form-control input-height" placeholder="enter your City" required></textarea>
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
            <!-- end chat sidebar -->
        </div>