 <div class="w3agile about">
     <?php echo $this->session->flashdata('msg')?>	
 <div class="col-md-12" align="center">
 <img src="<?php echo base_url();?>public/a/images/image1.png" width="100" height="100" alt=" " style="margin-bottom:-10px;  "></div>
 <br>

			       <h3 class="w3ls-title">MY ACCOUNT</h3>
				   <div class="col-md-7 abt-center">
			
				
				
					<div class="clearfix"></div>
				</div>
		    <div class="col-md-12">
		        <div align="center">
				<h5 style="align:center;">                                                        <?php echo $this->session->userdata('name'); ?>
				</h5>
				<br>
			
				<h5 style="align:center;">                                                         <?php echo $this->session->userdata('user_phone'); ?>
				</h5> 
				<br>
				
				<br>  
		</div>
		</div>
		<div align="center">
		<button style="background-color:
#2ad2c9;" type="button" class="btn btn-info "  id="model"  data-target="#myModalb" data-toggle="modal" >View Adhaar</button> </div>
		<div class="w3agile contact">
			<section>
  <div class="modal fade" id="myModalb" role="dialog" style=" border:3px solid green; color:green;">
    <div class="modal-dialog" style="width: 100%;" >
      <div class="modal-content">
        
          
        
        <div class="col-sm-12" style="background-color:white;">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div align="center">
         
            <?php foreach($user as $data){?>  
 		<img src="<?php echo base_url().$data['adhaar_image_path'].'/'.$data['adhaar_image'];?>" style="width:50%">

   <?php } ?>
    </div>

        </div>
        </div>
        </div>
        </div>
        </div>
      <br>
      </section>

  </div>
		 <div class="contact-form">
		<form action="<?php echo base_url();?>index.php/home/upload_adhaar" method="post" class="form-horizontal"  enctype="multipart/form-data">

 
    <label class="control-label col-md-5">     </label>                                                    
    <div class="fileinput fileinput-new" data-provides="fileinput" style="">

    <span class="btn btn-default btn-file"><span>Choose Adhaar File</span><input type="file"  name="image" multiple  required></span>

    <span class="fileinput-filename"></span><span class="fileinput-new"></span>

   
                        </div>
		  <input type="hidden" value="<?php echo $this->session->userdata('id'); ?>" name="id" >
		  
		   <input type="submit" value="Upload Adhaar" style="background-color:#29d1c8; border-radius:5px;">		
		 </form>
		 <br>
<a  href="<?php echo base_url();?>index.php/home/edit_user/<?php echo $this->session->userdata('id'); ?>"  value="Setting" style="color:white;">	<button  style="background-color:#29d1c8; border-radius:5px;width:100%;height:40px;border:2px solid #29d1c8;"><b>Change Password	</b></button>	 </a>
		
		
			
			</div>
			</div>




			