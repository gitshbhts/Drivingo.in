<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
     .error{
      color:red;
     }
    </style>
</head>    
<body>
 <div class="container">
     <div class="row">
         <div class="col-md-6">
             <div class="row">
                 <div class="col-md-8">
                     <h3>Login In</h3>
                     <div class="error"><strong><?=$this->session->flashdata('flashSuccess')?></strong></div>
                  <form method="post" action="/index.php/home/signin">                                             
                      <div class="form-group">                       
                       <label for="userName">Username</label> <input type="text" class="form-control" id="userName" name="userName" value="">                                              
       </div>       
       <div class="form-group">
        <label for="password"> Password </label> <input type="password" class="form-control" id="password" name="password" value="">               
       </div>
       <div class="g-recaptcha" data-sitekey="6Ld-5T0UAAAAAPUJFp78ewELxPubx37uSl6no5R8"></div>                   
                   </br>
                   <button class="btn btn-success" type="submit">Login</button>      
      </form>
     </div>
             </div>
         </div>               
     </div>
 </div>        
</body>
</html>