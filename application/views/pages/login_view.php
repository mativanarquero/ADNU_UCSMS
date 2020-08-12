<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ateneo de Naga Undergraduate Class Scheduling Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icon/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css">

    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
      
    
              
            <div class="login-box ptb--5">
  
            <form class="form" action="<?php echo site_url('pages/login'); ?>" method="POST">
                    <div class="login-form-head">
                            <div class="logo">
                                    <a><img src="<?php echo base_url(); ?>assets/images/icon/logo.png" alt="logo"></a>
                                    <br>
                                    <h5 class="text-style1"><br><b>Ateneo de Naga </b>
                                        <br>
                                        <b>Undergraduate Class Scheduling and Management System</b>
                                        <br><br>
                                        <?php if ($this->session->flashdata('error')) { ?>
                                       <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
                                        <?php } ?>

                                        </h5>
                                    </div>
                                  
                    </div>

                    <div class="login-form-body">
                    
                        <div class="form-gp">
                            <label form="Email_address">Email address</label>
                            <input type="text" class="form-control" name ="email_address"/>
                            <small><?= form_error('email_address')?></small>

                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label form="Password">Password</label>
                            <input type="password" class="form-control" name="password"/>
                            <small><?= form_error('password')?></small>
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area">
                                <button type="submit">Submit <i class="ti-arrow-right"></i> </button>
                                <br>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
</body>

</html>