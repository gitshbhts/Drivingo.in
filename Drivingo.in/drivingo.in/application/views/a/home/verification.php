<?php

?>
<!DOCTYPE html>

<html>
<title>Form</title>
<body>
<br>


<br>
<br>
<br>
<br>

	<?php if(isset($message)){
		?><h4 style="text-align:center;"> <?php echo $message;?> </h4>
	<?php 	}
	else{
		?><h4 style="text-align:center;"><?php echo "Confirm Your OTP No. "; ?></h4>
	<?php } ?>



<form action="<?php echo base_url();?>index.php/home/verification_opt" method="post" style="margin:20px;">
<div class="w3agile contact" style="padding-bottom:30px;">
			     <div class="contact-form">

<input type="text" name="otpvalue" placeholder="Enter your OTP number"/><br><br>
<input type="hidden" name="user_id"  value="<?php echo $id;?>"/><br><br>

<input type="submit" value="submit" style="background-color:#29d1c8; border-radius:5px;" />
<br>
</form>
<br>
</body>
</div>
</div>
</form>
</div>
</body>
<br>
</html>