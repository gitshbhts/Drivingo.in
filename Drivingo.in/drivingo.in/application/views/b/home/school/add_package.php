   <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add school</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">school</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Package</li>
                            </ol>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-topline-aqua" id="form_wizard_1">
                                <div class="card-head">
                                </div>
                                <div class="card-body" id="bar-parent">
                                <form class="form-horizontal" action="<?php echo base_url();?>index.php/home/add_school" id="submit_form" method="POST">
<h4 style="font-family: 'Concert One', cursive; margin-left:120px;" ><b> Packages We Offered:

</b></h4>
    <div class="form-group">
     <label class="control-label col-md-3">Vehicle Type
    <span class="required"> * </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="Type" required>
    
    <option value="own" >2 Wheeler</option>
    <option value="client">4 Wheeler</option>
</select>
</div>
</div>   
 <div class="form-group">
  
    <label class="control-label col-md-3">Vehicle Name:


    <span class="required"> * </span>
    </label>
    <div class="col-md-5">
    <textarea type="text" class="form-control input-height" placeholder="Vehicle Name:" name="vehicle_name" required /></textarea>
    </div>
    </div>
     <div class="form-group">
 
    <label class="control-label col-md-3">Vehicle fee


    <span class="required"> * </span>
    </label>
    <div class="col-md-5">
    <textarea type="text" class="form-control input-height" placeholder="Vehicle fee" name="fee" required /></textarea>
    </div>
    </div>
     <div class="form-group">
 
    <label class="control-label col-md-3">Tax
    <span class="required"> * </span>
    </label>
    <div class="col-md-5">
    <textarea type="text" class="form-control input-height" placeholder="Tax" name="tax" required /></textarea>
    </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>