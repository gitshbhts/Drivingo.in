    <html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html;  
      charset=utf-8" />  
    <!-------ajax city------>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>  
   

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Vehicle Type<span class="required">  </span></label><div class="col-md-5"><select class="form-control input-height" name="vehicle_type[]" ><option value="Hatchback" >Hatchback</option><option value="Sedan">Sedan</option><option value="SUV">SUV</option></select></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Vehicle Name:<span class="required"></span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="Vehicle Name:" name="vehicle_name[]"  /></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Vehicle fee <span class="required">  </span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="Vehicle fee" name="fee[]"  /></div></div></div> <div class="field-wrap"><div class="form-group"> <label class="control-label col-md-3">Tax: <span class="required"></span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="Tax" name="tax[]"  /></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3">Extra 3 dys Pack<span class="required">  </span></label><div class="col-md-5"><input type="text" class="form-control input-height" placeholder="trill" name="trill[]" value="" /></div></div></div><div class="field-wrap"><div class="form-group"><label class="control-label col-md-3"></label><div class="fileinput fileinput-new" data-provides="fileinput" style=""><span class="btn btn-default btn-file"><span>Choose file</span><input type="file"  name="image[]" multiple  ></span><span class="fileinput-filename"></span><span class="fileinput-new"></span></div></div></div></td></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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
                                <div class="page-title"></div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">school</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-topline-aqua" id="form_wizard_1">
                                <div class="card-head">
                                </div>
                                <div class="card-body" id="bar-parent">
<?php if(isset($message)){
                      ?><h3 style="text-align:center;color:green;"><?php echo $message; ?></h3>
                   <?php  }
                    else{
                      echo " ";
                    }
                    ?>
                  

<!---------------form---------------->                                  
<form class="form-horizontal"  enctype="multipart/form-data" action="<?php echo base_url();?>index.php/backend/update_school" id="submit_form" method="POST">
       <?php foreach($school as $data1){?> 
              <div class="form-wizard">
              <div class="form-body">
              <ul class="nav nav-pills nav-justified steps">
                  
              <div id="bar" class="progress progress-striped" role="progressbar">
              <div class="progress-bar progress-bar-info"> </div>
              </div>
              <div class="tab-content">
              <div class="tab-pane active" id="tab1">
              <div class="form-group">
              <h4 style="font-family: 'Concert One', cursive; margin-left:220px;" ><b></b></h4>
              <label class="control-label col-md-3">
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <input type="hidden" class="form-control input-height" placeholder="school Name" name="school_id" value="<?php echo $data1['school_id'];?>"  />
              </div>
              </div>
              <h3 class="block"></h3>
              <div class="form-group">
              <h4 style="font-family: 'Concert One', cursive; margin-left:220px;" ><b> School:</b></h4>
              <label class="control-label col-md-3">School Name
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <input type="text" class="form-control input-height" placeholder="school Name" name="school_name" value="<?php echo $data1['school_name'];?>"  />
              </div>
              </div>

    <h4 style="font-family: 'Concert One', cursive; margin-left:200px;" ><b> Address:</b>
    </h4>
             <div class="form-group">
             
              <label class="control-label col-md-3">Contact no. 1
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <input type="text" class="form-control input-height" placeholder="Contact no. 1:" name="contact_no_1"  pattern="[7-9]{1}[0-9]{9}"  title="Phone number"  value="<?php echo $data1['contact_no_1'];?>" />
              </div>
              </div>
              <div class="form-group">
            
              <label class="control-label col-md-3">Contact No.2
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <input type="text" class="form-control input-height" placeholder="Contact No.2" name="contact_no_2" value="<?php echo $data1['contact_no_2'];?>" pattern="[7-9]{1}[0-9]{9}" title="Phone number"  />
              </div>
              </div>

                <div class="form-group">
            
              <label class="control-label col-md-3">LandLine
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <input type="text" class="form-control input-height" placeholder=" LandLine" name="landline" value="<?php echo $data1['landline'];?>" pattern="[0-9]{1}[0-9]{9}" title="Phone number"  />
              </div>
              </div>
          <h4 style="font-family: 'Concert One', cursive; margin-left:150px;" ><b> Type Of service:
          </b></h4>

          <div class="form-group">
               <label class="control-label col-md-3">Free Fuel
              <span class="required">  </span>
              </label>
             <div class="col-md-5">
             <select class="form-control input-height" name="free_fuel" value="<?php echo $data1['free_fuel'];?>" >
              
              <option value="Yes" <?php if($data1['free_fuel'] == 'Yes') { ?> selected="selected"<? } ?> >yes</option>
              <option value="No"<?php if($data1['free_fuel'] == 'No') { ?> selected="selected"<? } ?> >No</option>
          </select>
          </div>
          </div> 
    <div class="form-group">
     <label class="control-label col-md-3">Pick & drop
    <span class="required">  </span>
    </label>
   <div class="col-md-5">
   <select class="form-control input-height" name="driver" >
    
    <option value="Available" <?php if($data1['driver'] == 'Available') { ?> selected="selected"<? } ?>>Available</option>
    <option value="Not Available" <?php if($data1['driver'] == 'Not Available') { ?> selected="selected"<? } ?>>Not Available</option>
    </select>
    </div>
    </div> 
   
    
          <div class="form-group">
               <label class="control-label col-md-3">Highway learnings
              <span class="required">  </span>
              </label>
             <div class="col-md-5">
             <select class="form-control input-height" name="highway_learning" value="">
              
              <option value="Yes" <?php if($data1['highway_learning'] == 'Yes') { ?> selected="selected"<? } ?> >yes</option>
              <option value="No" <?php if($data1['highway_learning'] == 'No') { ?> selected="selected"<? } ?>>No</option>
          </select>
          </div>
          </div> 
          <div class="form-group">
               <label class="control-label col-md-3">Traffic learnings
              <span class="required">  </span>
              </label>
             <div class="col-md-5">
             <select class="form-control input-height" name="traffic_learning" value="<?php echo $data1['traffic_learning'];?>">
              
              <option value="Yes" <?php if($data1['traffic_learning'] == 'Yes') { ?> selected="selected"<? } ?> >yes</option>
              <option value="No" <?php if($data1['traffic_learning'] == 'No') { ?> selected="selected"<? } ?>>No</option>
          </select>
          </div>
          </div> 

          <label class="radio-inline" style="margin-left:300px; padding-bottom: 30px;">
                <input type="radio" name="licence" value="licence" id="chkYes" <?php echo ($data1['licence']=='licence')?'checked':'' ?>>Licence
              </label>
          <div id="dvPassport"  style="display: none">
             <label class="control-label col-md-3">fee
              <span class="required">  </span>
              </label>
                  <div class="col-md-2">
              <input type="text" class="form-control input-height" name="license_fee" id="txtPassportNumber" value="<?php echo $data1['license_fee'];?>" />
            </div>
          </div>

              <label class="radio-inline" style="margin-left:60px; padding-bottom: 30px;">
                <input type="radio" name="licence" value="non_licence" id="chkNo"  <?php echo ($data1['licence']=='non_licence')?'checked':'' ?>>Non-licence
              </label>

              <div class="form-group">
              <label class="control-label col-md-3">published_date
              <span class="required">  </span>

              </label>
              <div class="col-md-5">
              <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
              <input class="form-control input-height"  placeholder="published_date" name="published_date" size="16" type="text" value="<?php echo $data1['published_date'];?>" >
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                                                  </div>
              <input type="hidden" id="dtp_input5" value="" />
              </div>
              </div>
            
         
               <div class="form-group">
           
              <label class="control-label col-md-3">Review
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <textarea  class="form-control input-height" placeholder="Review" name="review"   /><?php echo $data1['review']; ?>
            </textarea>
              </div>
              </div>


                          
          <button type="submit" class="btn btn-primary btn-lg" style="margin-top:30px; margin-left:670px">submit</button>
          </div>
          </div>

   

          </form>
      <table class="table display product-overview mb-30" id="support_table">
                        <thead>
                             <tr>
                                                        <th>S.no</th>
                                                        <th> School</th>
                                                            <th> Action</th>
                                                      </tr>
                        </thead>

                           <?php foreach($city as $row){?>
                                                  <tbody>
                                <tr class="odd gradeX">
                              <td ><?php echo $row['city'];?></td>
                                  <td><?php echo $row['area'];?></td>
                                  <td>
                                    <button name="remove" class="btn btn-danger btn_remove" style=""><a href="<?php echo base_url();?>index.php/backend/delete_school_area/<?php echo $row['school_area_id'];?>/<?php echo $data1['school_id'];?>">X</a></button>
                                    
                                  </td>
                                </tr>
                                
                              </tbody>
                              <?php } ?>
                      </table>       
          <h2 style="">Add Area</h2> 
    <form action="<?php echo base_url();?>index.php/backend/edit_update_area" method="post"> 
        <div class="form-group">
              <h4 style="font-family: 'Concert One', cursive; margin-left:220px;" ><b></b></h4>
              <label class="control-label col-md-3">
              <span class="required">  </span>
              </label>
              <div class="col-md-5">
              <input type="hidden" class="form-control input-height" placeholder="school Name" name="school_id" value="<?php echo $data1['school_id'];?>"  />
              </div>
              </div>
              <div class="form-group">
            <label class="control-label col-md-3">Select your City
            <span class="required">  </span>
            </label>
           <div class="col-md-5">
          <select  class="form-control" name="area_id" id="city">
            <option value="">---Select City---</option>  
            <?php foreach($area as $data){?>
          <option value="<?php echo $data['city'];?>"><?php echo $data['city'];?></option>
            <?php } ?>
                                                    
            </select>
            </div>
            </div> 
            <div class="form-group">
            <label class="control-label col-md-3">Select your Area
            <span class="required">  </span>
            </label>
              <div class="col-md-5">
             <select  class="form-control"  name="area_id[]" id="stateDrp"  multiple required>  
              <option value="">---Select Area---</option>  
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="margin-top:30px; margin-left:670px">Add Area</button>
            </div></form>
 <h2 style="">Packages</h2>         
  <form method="post" action="<?php echo base_url();?>index.php/backend/update_package" enctype="multipart/form-data">
 <div id="internship_deta/ils">

            
                 <?php foreach($package as $row){ ?>
                    <td>
 <div align="right">                       <!--div class="top-row"-->
 <button name="remove" class="btn btn-danger btn_remove"><a href="<?php echo base_url();?>index.php/backend/delete_package/<?php echo $row['id'];?>/<?php echo $data1['school_id'];?>">X</a></button>

 </div>                 
                        <div class="field-wrap">
                        <div class="form-group">
                        <label class="control-label col-md-3">
                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="hidden" class="form-control input-height" placeholder="" name="school_id"  value="<?php echo $data1['school_id'];?>"  />
                        </div>
                        </div> 
                        </div>

                        <div class="field-wrap">
                        <div class="form-group">
                        <label class="control-label col-md-3">
                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="" name="id[]"  value="<?php echo $row['id']; ?>"  />
                        </div>
                        </div> 
                        </div>
                      
                        <div class="field-wrap">
                           <div class="form-group">
                           <label class="control-label col-md-3">Vehicle Type
                          <span class="required">  </span>
                          </label>
                         <div class="col-md-5">
                         <select class="form-control input-height" name="vehical_type[]" >
                          
                          <option value="Hatchback" <?php if($row['vehical_type'] == 'Hatchback') { ?> selected="selected"<? } ?>>Hatchback</option>
                          <option value="Sedan" <?php if($row['vehical_type'] == 'Sedan') { ?> selected="selected"<? } ?>>Sedan</option>
                          <option value="SUV" <?php if($row['vehical_type'] == 'SUV') { ?> selected="selected"<? } ?>>SUV</option>
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
                            <input type="text" class="form-control input-height" placeholder="Vehicle Name:" name="vehicle_name[]"  value="<?php echo $row['vehical']; ?>"  />
                            </div>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <div class="form-group">
 
                            <label class="control-label col-md-3">Vehicle fee


                            <span class="required">  </span>
                            </label>
                            <div class="col-md-5">
                            <input type="text" class="form-control input-height" placeholder="Vehicle fee" name="fee[]" value="<?php echo $row['fee']; ?>" pattern="[0-9]+"  />
                            </div>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <div class="form-group">
  
                        <label class="control-label col-md-3">Tax:


                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="Tax" name="tax[]" value="<?php echo $row['tax']; ?>" />
                        </div>
                        </div>
                        </div>
                        <div class="field-wrap">
                        <div class="form-group">
                        <label class="control-label col-md-3">Extra 3 days Pack
                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="trill" name="trill[]" value="<?php echo $row['trill']; ?>" />
                        </div>
                        </div>
                        </div>
                        <div align="center"><img src="<?php echo base_url().$row['image_path'].'/'.$row['image'];?>" style="width:150px;"></div>
             <?php echo $row['image']?>           
        <div class="field-wrap">
            <div class="form-group">
 
    <label class="control-label col-md-3">     </label>                                                    
    <div class="fileinput fileinput-new" data-provides="fileinput" <?php echo $row['image'];?>>
    
    <span class="btn btn-default btn-file"><span>Choose file</span><input type="file"  name="image[]"  accept="image/*" value="<?php echo $row['image']?>" multiple  ></span>

    <span class="fileinput-filename"  ></span><span class="fileinput-new"></span>

    </div>
    </div>
                        </div>



                         <?php } ?>
                  
           
        </div>
            <button type="submit" class="btn btn-primary btn-lg" style="margin-top:30px; margin-left:670px">Update Package</button>
      </form>
             <?php } ?>
              <h2>Add More Package</h2>
          <form action="<?php echo base_url();?>index.php/backend/update_add_package" method="post" enctype="multipart/form-data">
                  <div class="field-wrap">
                        <div class="form-group">
                        <label class="control-label col-md-3">
                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="hidden" class="form-control input-height" placeholder="" name="school_id"  value="<?php echo $data1['school_id'];?>"  />
                        </div>
                        </div> 
                        </div>
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
                            <input type="text" class="form-control input-height" placeholder="Vehicle fee" name="fee[]" class = "numeric"   />
                            <span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
                            </div>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <div class="form-group">
  
                        <label class="control-label col-md-3">Tax:


                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="Tax" name="tax[]"  />
                        </div>
                        </div>
                        </div>
                        <div class="field-wrap">
                        <div class="form-group">
  
                        <label class="control-label col-md-3">For 3 Day fees:


                        <span class="required">  </span>
                        </label>
                        <div class="col-md-5">
                        <input type="text" class="form-control input-height" placeholder="For 3 Days Packages" name="trill[]"  />
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
        <button type="submit" class="btn btn-primary btn-lg" style="margin-top:30px; margin-left:670px">Add Package</button>
          </form>
       
                  
                              
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