<!DOCTYPE html>
<html lang="en">
   
 
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>believekart</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo admin_asset_url(); ?>assets/img/favicon/favicon-32x32.png">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/css/animate.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/plugins/bootstrap/bootstrap.min.css">
      <!-- Font awesome CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/plugins/font-awesome/font-awesome.min.css">
      <!-- Themify Icon CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/plugins/themify-icons/themify-icons.css">
      <!-- Perfect Scrollbar CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
      <!-- Main CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/css/seipkon.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo admin_asset_url(); ?>assets/css/responsive.css">
   </head>
   <body class="body_white_bg">
       
      <!-- Start Page Loading -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- End Page Loading -->
       
      <!-- Login Page Header Area Start -->
      <div class="seipkon-login-page-header-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4">
                  <div class="login-page-logo">
                     <a href="index-2.html">
                     <img src="<?php echo admin_asset_url(); ?>assets/img/logo.png" alt="Seipkon Logo" />
                     </a>
                  </div>
               </div>
              <!--  <div class="col-md-8 col-sm-8">
                  <div class="login-page-logo-right">
                     <p>New to believekart?</p>
                     <a href="register.html">Sign up</a>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
      <!-- Login Page Header Area End -->
       
      <!-- Login Form Start -->
      <div class="seipkon-login-form-area">
         <div class="container-fluid">
            <div class="row">


               <div class="col-md-4 col-md-offset-4">
                 
                  <div class="login-form-box">
                     <h3>Admin Login</h3>

                      <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php }else if($this->session->flashdata('error')){  ?>
            <div class="alert alert-block alert-danger">
                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        
                    <form action="<?php echo admin_url()?>login/login" method="POST"  id="loginform" data-parsley-validate>
                        <div class="form-group">
                           <input type="text" placeholder="Email or Username" name="username" class="form-control" required >
                        </div>
                        <div class="form-group">
                           <input type="password" placeholder="Password" name="password" class="form-control" required >
                        </div>
                        <div class="form-group form-checkbox">
                           <input type="checkbox" id="chk_2">
                           <label class="inline control-label" for="chk_2">Remember me</label>
                           <p class="lost-pass pull-right">
                              <a href="#">forget you password?</a>
                           </p>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit">
                                    <button type="submit" >Sign in</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Login Form End -->
       
      <!-- jQuery -->
      <script src="<?php echo admin_asset_url(); ?>assets/js/jquery-3.1.0.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="<?php echo admin_asset_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
      <!-- Perfect Scrollbar JS -->
      <script src="<?php echo admin_asset_url(); ?>assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
      <!-- Custom JS -->
      <script src="<?php echo admin_asset_url(); ?>assets/plugins/parsley/js/parsley.min.js"></script>

      <script src="<?php echo admin_asset_url(); ?>assets/js/seipkon.js"></script>
   </body>

 
</html>

 <script type="text/javascript">

     $(document).ready(function(){

       setTimeout(function(){ $(".alert").hide(); }, 5000);
     });
</script>