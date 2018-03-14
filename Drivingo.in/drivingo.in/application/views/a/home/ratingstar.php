<div class="w3agile contact">
			     <div class="contact-form">
			     	<div align="center">
								 		<div class="content">

        <?php if(!empty($result)):  
			$i=0;
    		foreach ($result as $post):    		
		?>
        	<div class="post">
                <h4><?php echo $post["school_name"]; ?></h4>
                <ul data-id = "<?php echo $post['school_id']; ?>" data-rating ="<?php echo $post["rating"]; ?>">
                <?php 
                for($i=1; $i<=5; $i++) 
                {
                    $selected = "";
                    if(!empty($post["rating"]) && $i<=$post["rating"]) 
                    {
                        $selected = "selected";
                    }
                ?>
                    <li class="<?php echo $selected; ?>">&#9733;</li>  
                <?php 
                }  
                ?>
                </ul>
               
            </div>
        <?php endforeach; ?>		    
        <?php endif; ?>    	
     </div> 
     <?php foreach($result as $post){?>
       <form action="<?php echo base_url();?>index.php/home/insert_review" method="post">
     <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id');?>">
    <input type="hidden" name="school_id" value="<?php echo $post['school_id'];?>">
     <textarea placeholder="Review" required="" name="review"></textarea>
        <input type="submit" value="Submit" style="background-color:#29d1c8; border-radius:5px;">       
        </form>
        <?php } ?>
 </div>
			</div>