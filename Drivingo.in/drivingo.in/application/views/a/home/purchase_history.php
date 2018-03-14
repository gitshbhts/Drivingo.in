
<style>
	table,td,th{
		border:1px solid black;
	}

td{
	padding:5px;
}

th{
	padding:5px;
}
</style>

	<?php foreach($payment as $row){?>	

<h4 style="padding:10px;text-align:center;"><b>Purchase History</b></h4>
<div align="center" style="margin-bottom:20px;background-color: white;">
 

    	<br>
    	<h5 style="text-align: center;">Order Details</h5>
<table>
	<th>Order Id</th>
	<th>Order Date</th>
	<th>Preferred Time</th>
	<th>Preferred Date</th>
	<tr>
		<td><?php echo $row['order_id'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['prefred_time'];?></td>
		<td><?php echo $row['prefered_date'];?></td>
	</tr>
</table> 
<br>   	
<h5 style="text-align: center;">School Details</h5>
<table cellpadding="10px" >
	              
	                
						<th>School Name</th>
						<th style="text-align:center;">Location</th>
						<th>Vehicle Type</th>
						<th>Vehicle Name</th>
					


					<tr>
					    
					    
						<td><?php 
						echo $row['school_name'];?>
						</td>
							<td>
						<?php echo $row['address_line'];?>
						<?php echo $row['area'];?>		
						<?php echo $row['city'];?>
						</td>
						<td>
					<?php echo $row['vehical_type'];?>
						</td>
						<td>
					<?php echo $row['vehical'];?>
						</td>
					
					
						</tr>
						
</table>

<br><h5 style="text-align: center;">Payment Details</h5>

					<table>
						<tr>
							<th>Mode of Payment</th>
						<th>Fees</th>
						<th>Licence Fee</th>
						<th>Tax</th>
						<th>Discount</th>
						<th>Total</th>
						
					</tr>
				
					<tr>
						
					<td>
					<?php echo $row['payment_mode'];?>
					</td>

					<td>
					<?php if($row['trill_pack']!=='0'){
						echo $row['trill_pack'];
					}else{echo $row['fee'];} 
				?>

					</td>

					<td>
					<?php if($row['trill_pack']!=='0'){
						echo 'NA';
					}else{ echo $row['license_fee'];}?>
					</td>

					<td>
					<?php if($row['trill_pack']!=='0'){
						echo 'NA';
					}else{ echo $row['tax']; }?>
					</td>

					<td>
					<?php if($row['trill_pack']!=='0'){
						echo 'NA';
					}else{ echo $row['Discount_price'];}?>
					</td>

					<td>
					<?php echo $row['actuall_price'];?>
					</td>
							
						</tr>
					
					</table>
<br>
  					<section>
               <div align="center" >
              <div class="container">

  <!-- Trigger the modal with a button -->

  <!-- Trigger the modal with a button -->
  <form action="<?php echo base_url();?>index.php/home/trill_pack" method="post">
  	<input type="hidden" value="<?php echo $row['area_id'];?>" name="area_id">	
	<input type="hidden" value="<?php echo $row['vehical'];?>" name="vehical">
	<input type="hidden" value="<?php echo $row['vehical_type'];?>" name="vehical_type">
	<input type="hidden" value="<?php echo $row['id'];?>" name="id">
	<input type="hidden" name="school_name" value="<?php echo $row['school_name'];?>">
	<input type="hidden" name="school_id" value="<?php echo $row['school_id'];?>">
	<input type="hidden" name="address_line" value="<?php echo $row['address_line'];?>">
	<input type="hidden" name="area" value="<?php echo $row['area'];?>">
	<input type="hidden" name="city" value="<?php echo $row['city'];?>">
	<input type="hidden" name="licence" value="">
	<input type="hidden" name="license_fee" value="0">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    <input type="hidden" name="total_fee" value="<?php echo $row['trill'];?>">
    <input type="hidden" name="payment_mode" value="Cash on pickup">
    <input type="hidden" name="trill" value="3 days Extra Package">
  <button style="background-color:
#2ad2c9;" type="submit" class="btn btn-info "  id="model"  data-target="#myModal" data-toggle="modal" >Buy 3 days Extra pack @ Rs "<?php echo $row['trill'];?>"</button> 
</form>
<br>
 <button style="background-color:
#2ad2c9;" type="button" class="btn btn-info " data-toggle="modal" onclick="location.href='<?php echo base_url();?>index.php/home/ratingstar/<?php echo $row['order_id'];?>/<?php echo $row['user_id'];?>/<?php echo $row['school_id'];?>/<?php echo $row['rating'];?>'" > Rate and Review</button> </div>
</div>
<div style="border-bottom:2px double black;margin-top:20px;margin-left:100px;margin-right:100px;"></div>
<br>
<br>
  <!-- Modal pop up Contact form -->


	</section>

      <br>
    <?php } ?>
  

