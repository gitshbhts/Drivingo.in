<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <SCRIPT language="javascript">
function add(type) {

    //Create an input type dynamically.
    var element = document.createElement("input");

    //Assign different attributes to the element.
    element.setAttribute("type", type);
    element.setAttribute("value", type);
    element.setAttribute("name", type);


    var foo = document.getElementById("fooBar");

    //Append the element in page (in span).
    foo.appendChild(element);

}
</SCRIPT>

  <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Contact</div>
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
                        <form class="form-horizontal" action="<?php echo base_url();?>index.php/backend/update_contact" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                         
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-info"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                          <h3 class="block">Add your contact details...</h3>
                                                        <?php  foreach($contact as $data){?>
                                           <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <input type="text"  class="form-control input-height" name="id" value="<?php echo $data['id'];?>">
                                                            </div>
                                                        </div>
                                                           <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <input type="text"  class="form-control input-height" name="contact_a" value="<?php echo $data['contact_a'];?>">
                                                            </div>
                                                        </div>
                                                              <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control input-height"  name="contact_b" value="<?php echo $data['contact_b'];?>">
                                                            </div>
                                                        </div>
                                                              <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <input type="text"  class="form-control input-height" name="contact_c" value="<?php echo $data['contact_c'];?>">
                                                            </div>
                                                        </div>
                                                              <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <input type="text"  class="form-control input-height" name="contact_d" value="<?php echo $data['contact_d'];?>">
                                                            </div>
                                                        </div>
                                                              <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <input type="text"  class="form-control input-height" name="contact_e" value="<?php echo $data['contact_e'];?>">
                                                            </div>
                                                        </div>
                                                              <div class="form-group">
                                                            <label class="control-label col-md-3">Contact
                                                                <span class="required"> * </span>
                                                            </label>

                                                            <div class="col-md-5">
                                                                <textarea  name="address"  class="form-control input-height" value=""><?php echo $data['address'];?></textarea> 
                                                            </div>
                                                        </div>
                                            <?php } ?>                                                             
                                                    
                                                          
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