<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title><?php echo $this->fetch('title'); ?>
  </title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->


  <?php echo $this->Html->css(array('admin/css/vendors.css',
                                       'admin/vendors/css/forms/icheck/icheck.css',
                                       'admin/vendors/css/forms/icheck/custom.css',
                                        'admin/css/app.css',
                                       'admin/css/core/menu/menu-types/horizontal-menu.css',
                                       'admin/css/core/colors/palette-gradient.css',
                                       'admin/css/pages/login-register.css',
                                       'admin/assets/css/style.css')); ?>



                                    <?php echo $this->fetch('css'); ?>

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 1-column   bg-lighten-2 menu-expanded fixed-navbar"
data-open="click" data-menu="horizontal-menu" data-col="1-column">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">

              <?php echo $this->Html->image('admin/images/logo/logo.png',array('class'=>'brand-logo')) ?>
              <h3 class="brand-text"><?php echo $get_title_app['Dynamique']['titile'] ?></h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container">
        <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
          <ul class="nav navbar-nav">
            <li class="nav-item">  <?php echo $this->Html->link($this->Html->tag('i','',array('class'=>'ficon ft-arrow-left')),array('controller'=>'Pages','action'=>'redirect_web'),array('class'=>'nav-link mr-2 nav-link-label','escape'=>false)) ?></li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php echo $this->fetch('content'); ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer fixed-bottom footer-dark navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="http://casaprojets.com"
        target="_blank">CasaProjets </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Easy way to get it  <i class="ft-heart pink"></i></span>
    </p>
  </footer>
        <?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
// Writes cached scripts
?>

  <!-- BEGIN VENDOR JS-->
  <?php echo $this->Html->script('admin/vendors/js/vendors.min.js'); ?>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->



  <?php echo $this->Html->script(array('admin/vendors/js/ui/jquery.sticky.js',
                                        'admin/vendors/js/forms/icheck/icheck.min.js',
                                        'admin/vendors/css/forms/icheck/icheck.css',
                                        'admin/vendors/js/forms/validation/jqBootstrapValidation.js',
                                        'admin/js/core/app-menu.js',
                                        'admin/js/core/app.js',
                                        'admin/js/scripts/customizer.js',
                                        'admin/js/scripts/forms/form-login-register.js')); ?>


  <!-- END PAGE LEVEL JS-->

    <?php echo $this->fetch('script'); ?>
</body>
</html>
