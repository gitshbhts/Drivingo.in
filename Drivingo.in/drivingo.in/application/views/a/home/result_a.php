<div>
<?php foreach($result as $row){?>

<div class="w3agile about">


			       <h3 class="w3ls-title"><?php echo $row['school_name'];?> </h3>
				
			
		    <div  align="center">
				
			
		</div>
		
		<div class="clearfix"></div>
		<?php } ?>
			</div>
	<!-- //about --> 
	<!-- //who we are -->
	<?php foreach($result as $row1){?>
<div class="w3agile whychoose">
		 <h3 class="w3ls-title">Our Services</h3>
					<div class="why-top">
					<div class="choose-grids">
					<div class="col-md-6 choose-grid">
						<h4><i class="fa fa-inr" aria-hidden="true" style="font-size:30px;"></i> Free Fuel:  <?php echo $row1['free_fuel'];?></h4>
					
						</div>
						<div class="col-md-6 choose-grid">
						<h4><i class="fa fa-map-signs" aria-hidden="true"></i> Pick & Drop:   <?php echo $row1['driver'];?></h4>
					
						</div>
					
						<div class="col-md-6 choose-grid">
						<h4><i class="fa fa-road" aria-hidden="true"></i> Highway Learning:  <?php echo $row1['highway_learning'];?></h4>
				
						</div>
						<div class="col-md-6 choose-grid">
						<h4><i class="fa fa-truck" aria-hidden="true"></i> Traffic Learning:   <?php echo $row1['traffic_learning'];?></h4>
					
						</div>
						<div class="col-md-6 choose-grid">
						<h4><i class="fa fa-inr" aria-hidden="true" style="font-size:30px;"></i> Card Payment:   <?php echo $row1['traffic_learning'];?></h4>
					
						</div>
					
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
			<?php } ?>
<!-- experts -->


    
<h3 class="w3ls-title">Packages</h3>
<p style="text-align:center;">Please choose one that suits you!</p>
 <div class="team-inner" >



  	

<?php foreach($result as $row){?>

	<?php foreach($package as $row2){ ?>
		<div class="col-md-3" style="">
	
	<div class="btm-right" style="margin:5px;margin-bottom:80px;">
	<form action="<?php echo base_url();?>index.php/home/submit_package" method="post">
	<input type="hidden" value="<?php echo $row['area_id'];?>" name="area_id">    	
	<input type="hidden" value="<?php echo $date;?>" name="date">
		
	<input type="hidden" value="<?php echo $time;?>" name="time">
	<input type="hidden" value="<?php echo $row2['vehical'];?>" name="vehical">
	<input type="hidden" value="<?php echo $row2['vehical_type'];?>" name="vehical_type">
	<input type="hidden" value="<?php echo $row2['fee'];?>" name="fee">
	<input type="hidden" value="<?php echo $row2['tax'];?>" name="tax">
	<input type="hidden" value="<?php echo $row2['id'];?>" name="id">
	<input type="hidden" name="school_name" value="<?php echo $row['school_name'];?>">
	<input type="hidden" name="school_id" value="<?php echo $row['school_id'];?>">
	<input type="hidden" name="address_line" value="<?php echo $row['address_line'];?>">
	<input type="hidden" name="area" value="<?php echo $row['area'];?>">
	<input type="hidden" name="city" value="<?php echo $row['city'];?>">
	<input type="hidden" name="licence" value="<?php echo $row['licence'];?>">
	<?php if($licence=='licence'){?>
	<input type="hidden" name="license_fee" value="<?php echo $row['license_fee'];?>">
	
	<?php } else{?>
	<input type="hidden" name="license_fee" value="NA">
	<?php } ?>

				<img src="<?php echo base_url().$row2['image_path'].'/'.$row2['image'];?>" alt=" " style="height:250px;"/>
					<div class="captn">
						<h4><?php echo $row2['vehical'];?>,
						(Fees = <?php echo $row2['fee'];?> + Tax =
					<?php echo $row2['tax'];?>)<br></h4>
			
				
	<input type='submit' value="View more"  class="transparent_btn" style="">
	
						
						
					</div>
					</form>	
				
			</div>
	

	
		</div>
			<?php } ?>
			<?php } ?>		
	</div>

<div class="col-md-12"><h3 class="w3ls-title" style="margin:20px;">Reviews</h3> 
<?php foreach($review as $data){ ?> 

  
      <div align="center">
<h4><?php echo $data['review'];?></h4>
  <?php     $i=0; ?>
          <div class="post">
           
                <ul data-id = "">
                <?php 
                for($i=1; $i<=5; $i++) 
                {
                    $selected = "";
                    if(!empty($data["rating"]) && $i<=$data["rating"]) 
                    {
                        $selected = "selected";
                    }
                ?>
                    <li  class="<?php echo $selected; ?>">&#9733;</li>  
                 <?php
                } ?> 
                </ul>   
            </div>
            <h4><?php echo $data['user_name'];?></h4>
         <img src="<?php echo base_url();?>public/a/images/line.png" style="width:15%;margin:10px;">
            </div>
         
           <?php } ?> 

</div>

	
		<div class="clearfix"></div>

<!-- //experts -->
    <!--/footer-->


	<!--/footer-->

</div>

