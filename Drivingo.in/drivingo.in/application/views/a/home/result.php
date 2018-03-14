<div class="container">
<br>
<div class="col-md-12"> <p style="text-align:center;">Results For Driving Classes in <?php foreach($a as $row){
       echo  $row['area'];
       } ?>, <?php echo $a1;?>.
       The fee includes Training , <?php echo $licence;?><br>
    Availability as per <?php echo $date;?> and <?php echo $time;?>
     </p>

</div>



  <div class="row" style="background-color:#29d1c8 "><h4 align="center" style="padding-top:10px; padding-bottom:10px; "><b> 10 Practical Classes (1 hour/day)</b></h4>

</div>
<h3 class="w3ls-title" style="margin:10px;">Results</h3>
<div class="dropdown" style="margin-top:-20px;";>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #2ad2c9;margin-left:15px;margin-bottom:10px;">
   <i class="fa fa-list" aria-hidden="true"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:5px;">
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/home/sort_rating/<?php echo str_replace('/', '-', $date);?>/<?php echo str_replace(' ', '', $time);?>/<?php echo $city;?>/<?php echo $a1;?>/<?php echo $licence;?>"><h4 style="padding-left:20px;padding-top:20px;">Sort by Rating</h4></a><br>
    <a class="dropdown-item" href="<?php echo base_url();?>index.php/home/sort_price/<?php echo str_replace('/', '-', $date);?>/<?php echo str_replace(' ', '', $time);?>/<?php echo $city;?>/<?php echo $a1;?>/<?php echo $licence;?>"><h4 style="padding-left:20px;">Sort by Price</h4></a><br>
    
  </div>
</div>
<?php foreach($result as $data){?>
<form action="<?php echo base_url();?>index.php/home/school_result" method="post">
  <input type="hidden" value="<?php echo $data['school_id'];?>" name="school_id">
  <input type="hidden" value="<?php echo $data['area_id'];?>" name="area_id">
  <input type="hidden" value="<?php echo $licence;?>" name="licence">
  <input type="hidden" value="<?php echo $date;?>" name="date">
  <input type="hidden" value="<?php echo $time;?>" name="time">

    <div align="center" >
    <div class="col-md-4 bottom-grid" style="margin-bottom:50px;">
      <div class="btm-right" style="background-color:#2ad2c9;height:auto;">
    
        <img src="<?php echo base_url().$data['image_path'].'/'.$data['image'];?>" alt=" " style="height:300px;" />


            <h4 style="padding:10px;"><?php echo $data['school_name'];?><br>
    <div align="center">
  
  <?php     $i=0; ?>
      

          <div class="post">
           
                <ul data-id = "">
                <?php 
                for($i=1; $i<=5; $i++) 
                {
                    $selected = "";
                    if(!empty($data["AVG(rating)"]) && $i<=$data["AVG(rating)"]) 
                    {
                        $selected = "selected";
                    }
                ?>
                    <li  class="<?php echo $selected; ?>">&#9733;</li>  
                 <?php
                } ?> Rs <?php echo $data['fee'];

                ?> <input type="submit" value="View school" class="transparent_btn" value="White Button" /> 
                </ul>   
            </div>
           </div> 
            </h4>
    
            

    <div class="clearfix"></div>
   
  </div>
</div>
</div>


</form>
 <?php }  ?>

</div>