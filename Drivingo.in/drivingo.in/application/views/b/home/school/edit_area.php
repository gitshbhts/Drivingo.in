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