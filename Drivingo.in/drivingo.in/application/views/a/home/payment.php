
<style>
	table,td,th{
		border:1px solid black;
	}

td{
	padding:15px;
}

th{
	padding:15px;
}
</style>
<div style="background-color:#8df4d4;" align="center"><h3 style="color:white;"><?php if(isset($m1)){
echo $m1;}?></h3></div>

<h2 style="text-align:center;"><b><?php echo $school_name;?></b></h2>
<p style="text-align:center;"><?php echo $address_line;?> <?php echo $area;?> <?php echo $city;?>  </p>
<h4 style="padding:10px;text-align:center;"><b>Package Selected</b></h4>
<div align="center" style="margin-bottom:20px;">
<table cellpadding="10px" style="border:1px solid black;">
	
		<th>Model</th>
		<th>Type</th>
		<th>Cost</th>
		<th>Tax</th>

	<tr>
	 
		<td><?php echo $vehical;?></td>
		<td><?php echo $vehical_type;?></td>
		<td><?php echo $fee;?></td>
		<td><?php echo $tax;?></td>
	</tr>
</table>
</div>
<form action="<?php echo base_url();?>index.php/home/check_discount_code" role="form"  method="post">

	<input type="hidden" name="area_id" value="<?php echo $area_id;?>">	
	<input type="hidden" name="school_name" value="<?php echo $school_name;?>">
	<input type="hidden" name="school_id" value="<?php echo $school_id;?>">
	<input type="hidden" name="address_line" value="<?php echo $address_line;?>">
	<input type="hidden" name="area" value="<?php echo $area;?>">
	<input type="hidden" name="city" value="<?php echo $city;?>">
	<input type="hidden" name="licence" value="<?php echo $licence;?>">
	<input type="hidden" name="license_fee" value="<?php echo $license_fee;?>">
   
    <input type="hidden" name="vehical_type" value="<?php echo $vehical_type;?>">
    <input type="hidden" name="vehical" value="<?php echo $vehical;?>" >
  	
    <input type="hidden" name="fee" value="<?php echo $fee;?>">
    <input type="hidden" name="tax" value="<?php echo $tax;?>">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <?php  $date = str_replace('/', '-', $date); ?>
	<input type="hidden" name="date" value="<?php echo $date;?>">
	<?php $time = str_replace(' ', '', $time); ?>
    <input type="hidden" name="time" value="<?php echo $time;?>">

	<div align='center' >
	<label class="" >Have discount coupon ?
     <input type="text" name="discount_code" placeholder="Discount code" id="discount_code"><br><br>
     <div id="discount_code" class="display">
    <?php if(isset($message)){
    	?><h4 style="text-align: center;color:Blue"><?php echo $message;?></h4>
    	<?php  }
    	  else { ?>
    	 <h4 style="text-align: center;"><?php 	echo "Try your discount code..!!"; ?></h4>
    	<?php }?>
     	</div>
   
    </label><br>
    <button  type="submit" class="transparent_btn"   style="background-color:#2ad2c9;">Apply</button>
    </form>
<form action="<?php echo base_url();?>index.php/home/instamojo" method="post">
</div>  <br>
    <h4 style="text-align:center;"><b>Total</b></h4>
  
<div align="center">    
    
<table>
	<tr>
	<th>Fee</th>
	<th>Tax</th>
	<th>Licence</th>
	<th>Discount</th>
	<th>Total</th>
</tr>

<tr>
	<td>
		<?php echo $fee;?>
	</td>
		<td>
		<?php echo $tax;?>
	</td>
		<td>
		<?php echo $license_fee;?>
	</td>
			<td>
 <?php if(isset($discount))
		{ 
			echo $discount;
		}
		else{
			echo '0';
		}?>
	</td>
		<td>
<?php if(isset($total_after_discount)){
	echo $total_after_discount;
}
else{
echo $total;
} ?>
	</td>
	</tr>
</table>
</div>
<br><br>
<div align="center">
<input type="hidden" name="area_id" value="<?php echo $area_id;?>">	
<input type="hidden" name="trill" value="<?php if(isset($trill)){
	echo $trill;
	}
	else{
	echo '';
	}?>">
<input type="hidden" name="school_name" value="<?php echo $school_name;?>">
	<input type="hidden" name="school_id" value="<?php echo $school_id;?>">
	<input type="hidden" name="address_line" value="<?php echo $address_line;?>">
	<input type="hidden" name="area" value="<?php echo $area;?>">
	<input type="hidden" name="city" value="<?php echo $city;?>">
	<input type="hidden" name="licence" value="<?php echo $licence;?>">
	<input type="hidden" name="license_fee" value="<?php echo $license_fee;?>">
    <input type="hidden" name="total_fee" value="<?php if(isset($total_after_discount)){
	echo $total_after_discount;
		}
		else{
		echo $total;
		} ?>">
	<input type="hidden" name="discount" value="<?php if(isset($discount))
		{ 
			echo $discount;
		}
		else{
			echo '0';
		}?>" >
    <input type="hidden" name="vehical_type" value="<?php echo $vehical_type;?>">
    <input type="hidden" name="vehical" value="<?php echo $vehical;?>" >
  	
    <input type="hidden" name="fee" value="<?php echo $fee;?>">
    <input type="hidden" name="tax" value="<?php echo $tax;?>">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <?php  $date = str_replace('/', '-', $date); ?>
	<input type="hidden" name="date" value="<?php echo $date;?>">
	<?php $time = str_replace(' ', '', $time); ?>
    <input type="hidden" name="time" value="<?php echo $time;?>">
    <input type="hidden" name="payment_mode" value="Online">

   <input type="submit" value="Pay Now"  class="transparent_btn" style="background-color:#2ad2c9;" >
    
</form>
<form action="<?php echo base_url();?>index.php/home/cod/" method="post">
<input type="hidden" name="area_id" value="<?php echo $area_id;?>">	
<input type="hidden" name="school_name" value="<?php echo $school_name;?>">
	<input type="hidden" name="school_id" value="<?php echo $school_id;?>">
	<input type="hidden" name="address_line" value="<?php echo $address_line;?>">
	<input type="hidden" name="area" value="<?php echo $area;?>">
	<input type="hidden" name="city" value="<?php echo $city;?>">
	<input type="hidden" name="licence" value="<?php echo $licence;?>">
	<input type="hidden" name="license_fee" value="<?php echo $license_fee;?>">
       <input type="hidden" name="total_fee" value="<?php if(isset($total_after_discount)){
	echo $total_after_discount;
		}
		else{
		echo $total;
		} ?>">
	<input type="hidden" name="discount" value="<?php if(isset($discount))
		{ 
			echo $discount;
		}
		else{
			echo '0';
		}?>" >
    <input type="hidden" name="vehical_type" value="<?php echo $vehical_type;?>">
    <input type="hidden" name="trill" value="<?php if(isset($trill)){
	echo $trill;
	}
	else{
	echo '';
	}?>">
    <input type="hidden" name="vehical" value="<?php echo $vehical;?>" >
  	
    <input type="hidden" name="fee" value="<?php echo $fee;?>">
    <input type="hidden" name="tax" value="<?php echo $tax;?>">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <?php  $date = str_replace('/', '-', $date); ?>
	<input type="hidden" name="date" value="<?php echo $date;?>">
	<?php $time = str_replace(' ', '', $time); ?>
    <input type="hidden" name="time" value="<?php echo $time;?>">
     <input type="hidden" name="payment_mode" value="cash on pickup">

    <input type="submit" value="Book Cash at Pickup"  class="transparent_btn" style="background-color:#2ad2c9;" >
    
</form>

</form>
</div>
<br><br>
