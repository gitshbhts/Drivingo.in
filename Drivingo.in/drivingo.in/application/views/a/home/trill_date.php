<?php if($payment_mode=="Online"){ ?>
 <form action="<?php echo base_url();?>index.php/home/instamojo" method="post"> <?php } else { ?>

 <form action="<?php echo base_url();?>index.php/home/cod" method="post">
<?php  } ?>
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
    
    <input type="hidden" name="payment_mode" value="<?php echo $payment_mode;?>">
    <input type="hidden" name="trill" value="3 days Extra Package">
    
<div align="center">
	<div class="ban-bottom">
		<div class="bnr-right">
	<label class="inputLabel">Preferred Date</label>
		<input class="datepicker" id="date" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" name="date" required>
									</div>

				<!---start-date-piker---->
	<link rel="stylesheet" href="<?php echo base_url();?>public/a/css/jquery-ui.css" />
	<script src="<?php echo base_url();?>public/a/js/jquery-ui.js"></script>
  <script>
                            var dateToday = new Date();
                            var dates = $("#date").datepicker({
                                defaultDate: "+1w",
                                changeMonth: true,
                                numberOfMonths: 2,
                                minDate: dateToday,
                                onSelect: function(selectedDate) {
                                    var option = this.id == "from" ? "minDate" : "maxDate",
                                        instance = $(this).data("datepicker"),
                                        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                                    dates.not(this).datepicker("option", option, date);
                                }
                            });
                            	</script>
	<div class="bnr-right">
	<label class="inputLabel">Preferred Time<span class="opt"></span></label>
	<input input="timepicker" name="time" id="timepicker1" class="timepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
	</div>
	<div class="clearfix"></div>
				<!---start-date-piker---->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script>
	$(document).ready(function(){
    $('input.timepicker').timepicker({});
	});
	</script>
			<!---/End-date-piker---->
	</div>
	For 3 Days Extra Pack Rs-<?php  echo $total;?>/<br><br>		
    <input type="submit" value="Book Now"  class="transparent_btn" style="background-color:#2ad2c9;" >
    </form>
    </div>