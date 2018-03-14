<!DOCTYPE html>
<html>

<!-- Mirrored from www.radixtouch.in/hospital/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2017 06:25:33 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title></title>

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    
	<!-- icons -->
    <link href="<?php echo base_url();?>public/b/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- bootstrap -->
    <link href="<?php echo base_url();?>public/b/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/b/css/login.css">
    
	<!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" /> 
</head>
<body>
    <div class="form-title">
        <h1>Login Form</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="toggle">
        </div>
        <div class="form formLogin">
            <h2>Login to your account</h2>
            <form method="post" action="<?php echo base_url();?>index.php/backend/login_admin">
                <input type="text" placeholder="Username" name="admin_email"/>
                <input type="password" placeholder="Password" name="admin_pass" />
                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2">
                            Remember me
                        </label>
                    </div>
                </div>
                <button>Login</button>
              
            </form>
        </div>
     
        <div class="form formReset">
            <h2>Reset your password?</h2>
            <form>
                <input type="email" placeholder="Email Address" />
                <button>Send Verification Email</button>
            </form>
        </div>
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>public/b/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/b/js/login.js"></script>
    <script src="<?php echo base_url();?>public/b/js/pages.js" type="text/javascript"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from www.radixtouch.in/hospital/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Sep 2017 06:25:34 GMT -->
</html>