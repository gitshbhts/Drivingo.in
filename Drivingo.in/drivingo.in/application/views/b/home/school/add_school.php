    <html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html;  
      charset=utf-8" />  
    <!-------ajax city------>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>  
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  


<script src="script.js"></script>
        <script type="text/javascript">  
         $(document).ready(function() {  
         $("#city").change(function(){  
      
           $.ajax({  
             url:"<?php echo  
              base_url();?>index.php/backend/get_state",  
              data: {id:  
              $(this).val()},  
             type: "POST",  
               success:function(data){  
             $("#stateDrp").html(data);
             $("#stateDrp").multiselect(data);    
                     }  
                  }); 
                   
               });  
            });  
         </script> 
          <script type="text/javascript">  
         $(document).ready(function() {  
         $("#stateDrp").multiselect(function(){  
          alert('hello');
          var city = $(this).val();
         
           $.ajax({  
             url:"<?php echo  
              base_url();?>index.php/backend/get_city",  
              data: {id:  
              $(this).val()},  
             type: "POST",  
               success:function(data){  
             $("#cityDrp").html(data);  
                     }  
                  }); 
                 
               });  
            });  
         </script> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Vehicle Type<span class="required">  </span></label><div class="col-md-5"><select class="form-control input-height" name="vehicle_type[]" ><option value="Hatchback" >Hatchback</option><option value="Sedan">Sedan</option><option value="SUV">SUV</option></select></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Vehicle Name:<span class="required"></span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="Vehicle Name:" name="vehicle_name[]"  /></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Vehicle fee <span class="required">  </span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="Vehicle fee" name="fee[]"  /></div></div></div> <div class="field-wrap"><div class="form-group"> <label class="control-label col-md-3">Tax: <span class="required">  </span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="Tax" name="tax[]"  /></div></div></div>  <div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">For 3 Day fees: <span class="required">  </span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="For 3 dat package" name="trill[]"  /></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3"></label><div class="fileinput fileinput-new" data-provides="fileinput" style=""><span class="btn btn-default btn-file"><span>Choose file</span><input type="file"  name="image[]" multiple  ></span><span class="fileinput-filename"></span><span class="fileinput-new"></span></div></div></div></td></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click','.btn_remove', function(){
                var button_id = $(this).attr("id");
                $("#row"+button_id+"").remove();
            });

         
        });
    </script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='licence']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>
</script>         
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
                                <li class="active">Add School</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-topline-aqua" id="form_wizard_1">
                                <div class="card-head">
                                </div>
                                <div class="card-body" id="bar-parent">
                                <form class="form-horizontal"  enctype="multipart/form-data" action="<?php echo base_url();?>index.php/backend/insert_school" id="submit_form" method="POST">
                    <div class="form-wizard">
                <div class="form-body">
                <ul class="nav nav-pills nav-justified steps">
            
        <div id="bar" class="progress progress-striped" role="progressbar">
    <div class="progress-bar progress-bar-info"> </div>
    </div>
    <div class="tab-content">
    <div class="tab-pane active" id="tab1">
    <h3 class="block">School Detail</h3>
    <div class="form-group">
    <h4 style="font-family: 'Concert One', cursive; margin-left:220px;" ><b> School:</b></h4>
    <label class="control-label col-md-3">School Name
    <span class="required">  </span>
    </label>
    <div class="col-md-5">
    <input type="text" class="form-control input-height" placeholder="school Name" name="school_name"  />
    </div>
    </div>

    <h4 style="font-family: 'Concert One', cursive; margin-left:200px;" ><b> Address:</b></h4>
     <div class="form-group">
  
       <label class="control-label col-md-3">Select your City
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
  
  <select  class="form-control" name="area_id" id="city">
                                          <option value="">---Select City---</option>  
                                           <?php foreach($area as $data){?>
  <option value="<?php echo $data['city'];?>"><?php echo$data['city'];?></option>
                        <?php } ?>
                                          
                                        </select>

</div>
</div> 
 <div class="form-group">
     <label class="control-label col-md-3">Select your Area
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
 <select  class="form-control"  name="area_id[]" id="stateDrp"  multiple>  
  <option value="">---Select Area---</option>  
  </select>
</div>
</div> 

   <div class="form-group">
   
    <label class="control-label col-md-3">Contact no. 1
    <span class="required">  </span>
    </label>
    <div class="col-md-5">
    <input type="text" class="form-control input-height" placeholder="Contact no. 1:" name="contact_no_1" pattern="[7-9]{1}[0-9]{9}" title="Phone number"  />
    </div>
    </div>
       <div class="form-group">
  
    <label class="control-label col-md-3">Contact No.2
    <span class="required">  </span>
    </label>
    <div class="col-md-5">
    <input type="text" class="form-control input-height" placeholder="Contact No.2" name="contact_no_2" pattern="[7-9]{1}[0-9]{9}" title="Phone number"  />
    </div>
    </div>

      <div class="form-group">
  
    <label class="control-label col-md-3">LandLine
    <span class="required">  </span>
    </label>
    <div class="col-md-5">
    <input type="text" class="form-control input-height" placeholder=" LandLine" name="landline"  pattern="[0-9]{1}[0-9]{9}" title="Phone number" />
    </div>
    </div>
<h4 style="font-family: 'Concert One', cursive; margin-left:150px;" ><b> Type Of service:
</b></h4>

<div class="form-group">
     <label class="control-label col-md-3">Free Fuel
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="free_fuel" >
    
    <option value="Yes" >Yes</option>
    <option value="No">No</option>
</select>
</div>
</div> 
<div class="form-group">
     <label class="control-label col-md-3">Pick & drop
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="driver" >
    
    <option value="Available" >Available</option>
    <option value="Not Available">Not Available</option>
</select>
</div>
</div> 
<div class="form-group">
     <label class="control-label col-md-3">Air Conditioning
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="air_conditioner">
    
   <option value="AC " >AC</option>
    <option value="Non AC">Non AC</option>
</select>
</div>
</div> 
<div class="form-group">
     <label class="control-label col-md-3">Highway learnings
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="highway_learning" >
    
    <option value="Yes" >Yes</option>
    <option value="No">No</option>
</select>
</div>
</div> 
<div class="form-group">
     <label class="control-label col-md-3">Card Payment
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="traffic_learning" >
    
    <option value="Yes" >Yes</option>
    <option value="No">No</option>
</select>
</div>
</div> 

<label class="radio-inline" style="margin-left:300px; padding-bottom: 30px;">
      <input type="radio" name="licence" value="licence" id="chkYes" >Licence
    </label>
<div id="dvPassport"  style="display: none">
   <label class="control-label col-md-3">Fee
    <span class="required"> * </span>
    </label>
        <div class="col-md-2">
    <input type="text" class="form-control input-height" name="license_fee" id="txtPassportNumber"  pattern="[0-9]+" title="Enter Numeric value" />
  </div>
</div>

    <label class="radio-inline" style="margin-left:60px; padding-bottom: 30px;">
      <input type="radio" name="licence" value="non_licence" id="chkNo">Without Licence
    </label>

    <div class="form-group">
    <label class="control-label col-md-3">published_date
    <span class="required">  </span>

    </label>
    <div class="col-md-5">
    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
    <input class="form-control input-height"  placeholder="published_date" name="published_date" size="16" type="text" value="" >
    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                                        </div>
    <input type="hidden" id="dtp_input5" value="" />
    </div>
    </div>
    <h4 style="font-family: 'Concert One', cursive; margin-left:120px;" ><b> Packages We Offered:

</b></h4>
     <div id="internship_details">
     <table class="table table-bordered" id="dynamic_field">
                <tr>
                    <td>
                        <!--div class="top-row"-->
                        <div class="field-wrap">
                           <div class="form-group">
                           <label class="control-label col-md-3">Vehicle Type
                          <span class="required">  </span>
                          </label>
                         <div class="col-md-5">
                         <select class="form-control input-height" name="vehicle_type[]" >
                          
                          <option value="Hatchback" >Hatchback</option>
                          <option value="Sedan">Sedan</option>
                          <option value="SUV">SUV</option>
                        </select>
                        </div>
                        </div> 
                        </div>

                        <div class="field-wrap">
                           <div class="form-group">
  
                            <label class="control-label col-md-3">Vehicle Name:


                            <span class="required">  </span>
                            </label>
                            <div class="col-md-5">
                            <input type="text" class="form-control input-height" placeholder="Vehicle Name:" name="vehicle_name[]"  />
                            </div>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <div class="form-group">
 
                            <label class="control-label col-md-3">Vehicle fee


                            <span class="required">  </span>
                            </label>
                            <div class="col-md-5">
                            <input type="text" class="form-control input-height" placeholder="Vehicle fee" name="fee[]"  pattern="[0-9]+" title="Enter Numeric value" />
                            </div>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <div class="form-group">
  
                        <label class="control-label col-md-3">Tax:


                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="Tax" name="tax[]"  pattern="[0-9]+" title="Enter Numeric value" />
                        </div>
                        </div>
                        </div>
                        <div class="field-wrap">
                        <div class="form-group">
  
                        <label class="control-label col-md-3">For 3 Day fees:


                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="For 3 Days Packages" name="trill[]"  pattern="[0-9]+" title="Enter Numeric value" />
                        </div>
                        </div>
                        </div>

                        <div class="field-wrap">
                            <div class="form-group">
 
    <label class="control-label col-md-3">     </label>                                                    
    <div class="fileinput fileinput-new" data-provides="fileinput" style="">

    <span class="btn btn-default btn-file"><span>Choose file</span><input type="file"  name="image[]" multiple  ></span>

    <span class="fileinput-filename"></span><span class="fileinput-new"></span>

    </div>
    </div>
                        </div>
                    </td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
           
        </div>
  

</div>
     <div class="form-group">
 
    <label class="control-label col-md-3">Review
    <span class="required">  </span>
    </label>
    <div class="col-md-5">
    <textarea  class="form-control input-height" placeholder="Review" name="review"  />
  </textarea>
    </div>
    </div>


                
<button type="submit" class="btn btn-primary btn-lg" style="margin-top:30px; margin-left:670px">submit</button>
</div>
</div>

</div></div></div></div></form>
        
                    
                                </div>
                            </div>
                        </div>
                    </div>
            
            
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab"> <i class="icon-settings"></i> Settings
                            </a>
                        </li>
                    </ul>
         
                    
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>