<div class="container" align="center">
<form action="<?php echo base_url();?>index.php/home/trill_date" method="post">
	<input type="hidden" value="<?php echo $area_id;?>" name="area_id">	

	<input type="hidden" value="<?php echo $vehical;?>" name="vehical">

	<input type="hidden" value="<?php echo $vehical_type;?>" name="vehical_type">

	<input type="hidden" value="0" name="fee">

	<input type="hidden" value="0" name="tax">

	<input type="hidden" value="<?php echo $id;?>" name="id">

	<input type="hidden" name="school_name" value="<?php echo $school_name;?>">

	<input type="hidden" name="school_id" value="<?php echo $school_id;?>">

	<input type="hidden" name="address_line" value="<?php echo $address_line;?>">

	<input type="hidden" name="area_id" value="<?php echo $area;?>">

	<input type="hidden" name="city" value="<?php echo $city;?>">

	<input type="hidden" name="licence" value="">

	<input type="hidden" name="license_fee" value="0">

    <input type="hidden" name="id" value="<?php echo $id;?>">
   
    <input type="hidden" name="total_fee" value="<?php echo $total;?>">

    <input type="hidden" name="payment_mode" value="Cash on pickup">
   
    <input type="hidden" name="trill" value="3 days Extra Package">
    
		For 3 Days Extra Pack Rs-	<?php  echo $total;?>/<br><br>		
    <input type="submit" value="Book Cash at Pickup"  class="transparent_btn" style="background-color:#2ad2c9;" >
    </form>
    <form action="<?php echo base_url();?>index.php/home/trill_date" method="post">
	<input type="hidden" value="<?php echo $area_id;?>" name="area_id">	

	<input type="hidden" value="<?php echo $vehical;?>" name="vehical">

	<input type="hidden" value="<?php echo $vehical_type;?>" name="vehical_type">

	<input type="hidden" value="0" name="fee">
	
	<input type="hidden" value="0" name="tax">

	<input type="hidden" value="<?php echo $id;?>" name="id">

	<input type="hidden" name="school_name" value="<?php echo $school_name;?>">

	<input type="hidden" name="school_id" value="<?php echo $school_id;?>">

	<input type="hidden" name="address_line" value="<?php echo $address_line;?>">

	<input type="hidden" name="area_id" value="<?php echo $area;?>">
	
	<input type="hidden" name="city" value="<?php echo $city;?>">

	<input type="hidden" name="licence" value="">

	<input type="hidden" name="license_fee" value="0">

    <input type="hidden" name="id" value="<?php echo $id;?>">
   
    <input type="hidden" name="total_fee" value="<?php echo $total;?>">
    
    <input type="hidden" name="payment_mode" value="Online">
    <input type="hidden" name="trill" value="3 days Extra Package">
    
<br>		
    <input type="submit" value="Pay Now"  class="transparent_btn" style="background-color:#2ad2c9;" >
    </form>
    </div>