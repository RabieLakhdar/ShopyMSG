<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Retail Marketing Automation for Facebook Messenger
Start conversations that build more valuable relationships with your customers and drive millions in extra revenue.">
  <meta name="keywords" content="ShopyMSG Shopymessage Shopmessage">
  <meta name="author" content="rabie lakhdar">
  <title><?php echo $this->fetch('title'); ?>
  </title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->

  <?php echo $this->Html->css(array('admin/css/vendors.css',
                                    'admin/vendors/css/weather-icons/climacons.min.css',
                                    'admin/fonts/meteocons/style.css',
                                    'admin/vendors/css/charts/morris.css',
                                    'admin/vendors/css/charts/chartist.css',
                                    'admin/vendors/css/charts/chartist-plugin-tooltip.css',
                                    'admin/css/app.css',
                                    'admin/css/core/menu/menu-types/horizontal-menu.css',
                                    'admin/css/core/colors/palette-gradient.css',
                                    'admin/fonts/simple-line-icons/style.css',
                                    'admin/css/pages/timeline.css',
                                    'admin/css/pages/dashboard-ecommerce.css',
                                    'admin/assets/css/style.css',
                                    'admin/vendors/css/tables/datatable/datatables.min.css',
                                    'admin/css/plugins/animate/animate.css',
                                    'admin/css/plugins/pickers/daterange/daterange.css',
                                    'admin/css/plugins/forms/wizard.css',
                                    'admin/vendors/css/pickers/daterange/daterangepicker.css',
                                    'admin/vendors/css/extensions/sweetalert.css',
                                  'admin/css/plugins/forms/validation/form-validation.css',
                                  'admin/css/pages/email-application.css"')) ?>

  <?php echo $this->fetch('css'); ?>
  <!-- END Custom CSS-->
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">

               <?php echo $this->Html->image('admin/images/logo/logo.png',array('class'=>'brand-logo','alt'=>"ShopMessage")) ?>
              <h3 class="brand-text"><?php echo $get_title_app['Dynamique']['titile'] ?></h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container container center-layout">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
              <ul class="mega-dropdown-menu dropdown-menu row">
                <li class="col-md-3">
                  <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> ShopyMSG Mega tool</h6>
                  <div id="mega-menu-carousel-example">
                    <div>

                      <?php echo $this->Html->image('admin/images/logo/logo.png',array('class'=>'rounded img-fluid mb-1',array('alt'=>'messageBox','style'=>'height:40%'))) ?>
                      <p class="news-content">
                        <span class="font-small-2"><?php echo date("d M Y") ?></span>
                      </p>
                    </div>
                  </div>
                </li>


                <li class="col-md-4">
                  <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Instructions</h6>
                  <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                    <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                      <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne"
                        aria-expanded="true" aria-controls="accordionOne">Instruction One</a></div>
                      <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne"
                      aria-expanded="true">
                        <div class="card-content">
                          <p class="accordion-text text-small-3">After any connect session you must logout with safe mode</p>
                        </div>
                      </div>
                      <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"
                        href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Instruction Two</a></div>
                      <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo"
                      aria-expanded="false">
                        <div class="card-content">
                          <p class="accordion-text">Dont change your Facebook page or E-commererce store each time</p>
                        </div>
                      </div>
                      <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"
                        href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Instruction Three</a></div>
                      <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree"
                      aria-expanded="false">
                        <div class="card-content">
                          <p class="accordion-text">Any error data you must connect supprt ShopyMSG on your Mega tool</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-4">
                  <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                  <form class="form form-horizontal">
                    <div class="form-body">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                            <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                            <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                            <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 mb-1">
                          <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore ShopyMSG...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700"><?php echo $get_user['fullname']; ?></span>
                </span>
                <span class="avatar avatar-online">

  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-19.png',array('alt'=>'shopMessage')) ?>
                  <i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">

                <?php echo $this->Html->link($this->Html->tag('i','  Edit account',array('class'=>'ft-user')),array('controller'=>'users','action'=>'edit',$get_user['id']),array('class'=>'dropdown-item','escape'=>false)) ?>

                   <?php echo $this->Html->link($this->Html->tag('i','  Change Password',array('class'=>'ft-lock')),array('controller'=>'users','action'=>'change_password',$get_user['id']),array('class'=>'dropdown-item','escape'=>false)) ?>

<?php echo $this->Html->link($this->Html->tag('i','  My Inbox',array('class'=>'ft-mail')),array('controller'=>'users','action'=>'edite'),array('class'=>'dropdown-item','escape'=>false)) ?>

                  <div class="dropdown-divider"></div>
                     <?php echo $this->Html->link($this->Html->tag('i','  Logout',array('class'=>'ft-power')),array('controller'=>'users','action'=>'logout'),array('class'=>'dropdown-item','escape'=>false)) ?>
              </div>
            </li>
            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                <a
                class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a></div>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">99% Server load</h6>
                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Messages</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">

  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-19.png',array('alt'=>'shopMessage')) ?>

                          <i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Margaret Govan</h6>
                        <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-busy rounded-circle">

  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-2.png',array('alt'=>'shopMessage')) ?>

                          <i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Bret Lezama</h6>
                        <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">

  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-3.png',array('alt'=>'shopMessage')) ?>

                          <i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-away rounded-circle">

  <?php echo $this->Html->image('admin/images/portrait/small/avatar-s-6.png',array('alt'=>'shopMessage')) ?>

                          <i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">

      <?php if($get_statut_steps[0]['firststeps']['statut'] == 1 && $get_user['Role']['name'] != "Utilisateur") {?>
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="la la-home"></i>
            <span>Dashboard</span>
          </a>
          <ul class="dropdown-menu">
            <li class="active" data-menu="">
               <?php echo $this->Html->link('Home',array('controller'=>'Pages','action'=>'dashboard'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
            </li>

          </ul>
        </li>




          <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="la la-users"></i>
            <span>Users</span>
          </a>
          <ul class="dropdown-menu">

            <li> <?php echo $this->Html->link('Members',array('controller'=>'users','action'=>'index'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
            </li>
             <li>
              <?php echo $this->Html->link('Admins',array('controller'=>'users','action'=>'admins'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
            </li>

          </ul>
        </li>

        <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="la la-gear"></i>
          <span>Config</span>
        </a>
        <ul class="dropdown-menu">

          <li> <?php echo $this->Html->link('Revenues',array('controller'=>'revenues','action'=>'index'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
          </li>
           <li>
            <?php echo $this->Html->link('Hear About Us',array('controller'=>'abouts','action'=>'index'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
          </li>
          <li>
           <?php echo $this->Html->link('Dynamique Title',array('controller'=>'dynamiques','action'=>'add'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
         </li>

        </ul>
      </li>

      </ul>
    <?php } ?>

    <?php if($get_statut_steps[0]['firststeps']['statut'] == 1 && $get_user['Role']['name'] == "Utilisateur") {?>
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="la la-home"></i>
          <span>Dashboard</span>
        </a>
        <ul class="dropdown-menu">
          <li class="active" data-menu="">
             <?php echo $this->Html->link('Home',array('controller'=>'Pages','action'=>'dashboard'),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
          </li>

        </ul>
      </li>

      <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="la la-cog"></i>
          <span>Config</span>
        </a>
        <ul class="dropdown-menu">
          <li class="active" data-menu="">
            <?php echo $this->Html->link('Edite Account',array('controller'=>'users','action'=>'edit',$get_user['id']),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
             <?php echo $this->Html->link('Change Passowrd',array('controller'=>'users','action'=>'change_password',$get_user['id']),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
          </li>

        </ul>
      </li>

      <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="la la-cog"></i>
          <span>My Auth</span>
        </a>
        <ul class="dropdown-menu">
          <li class="active" data-menu="">
            <?php echo $this->Html->link('FaceBook',array('controller'=>'fbpages','action'=>'index',$get_user['id']),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
             <?php echo $this->Html->link('E-commerce',array('controller'=>'users','action'=>'change_password',$get_user['id']),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
          </li>

        </ul>
      </li>

   <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="la la-cog"></i>
          <span>ShopyChat</span>
        </a>
        <ul class="dropdown-menu">
          <li class="active" data-menu="">
            <?php echo $this->Html->link('Home',array('controller'=>'contacts','action'=>'index',$get_user['id']),array('class'=>'dropdown-item','data-toggle'=>'dropdown')) ?>
          </li>

        </ul>
      </li>
 
    </ul>
  <?php } ?>
    </div>
  </div>
  <?php echo $this->fetch('content'); ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-transparent footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="http://casaprojets.com"
        target="_blank">Casaprojets </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>


  <!-- BEGIN VENDOR JS-->
  <?php echo $this->Html->script('admin/vendors/js/vendors.min.js'); ?>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <?php echo $this->Html->script(array('admin/vendors/js/ui/jquery.sticky.js',
                                        'admin/vendors/js/charts/chartist.min.js',
                                        'admin/vendors/js/charts/chartist-plugin-tooltip.min.js',
                                        'admin/vendors/js/charts/raphael-min.js',
                                        'admin/vendors/js/charts/morris.min.js',
                                        'admin/vendors/js/timeline/horizontal-timeline.js',
                                        'admin/js/scripts/tables/datatables/datatable-advanced.js',
                                      'admin/vendors/js/tables/datatable/datatables.min.js',
                      'admin/vendors/js/tables/datatable/dataTables.buttons.min.js',
                      'admin/vendors/js/tables/buttons.flash.min.js',
                      'admin/vendors/js/tables/jszip.min.js',
                      'admin/vendors/js/tables/pdfmake.min.js',
                      'admin/vendors/js/tables/vfs_fonts.js',
                      'admin/vendors/js/tables/buttons.html5.min.js',
                      'admin/vendors/js/tables/buttons.print.min.js',
                      'admin/js/scripts/animation/animation.js',
                      'admin/vendors/js/extensions/jquery.steps.min.js',
                      'admin/vendors/js/pickers/dateTime/moment-with-locales.min.js',
                      'admin/vendors/js/pickers/daterange/daterangepicker.js',
                      'admin/vendors/js/forms/validation/jquery.validate.min.js',
                      'admin/js/scripts/forms/wizard-steps.js',
                      'admin/js/scripts/forms/select/form-select2.js',
                      'admin/js/scripts/extensions/sweet-alerts.js',
                    'admin/js/scripts/forms/validation/form-validation.js',
                    'admin/js/scripts/pages/email-application.js')) ?>




  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <?php echo $this->Html->script(array('admin/js/core/app-menu.js',
                                    'admin/js/core/app.js',
                                    'admin/js/scripts/customizer.js')) ?>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <?php echo $this->Html->script('admin/js/scripts/pages/dashboard-ecommerce.js'); ?>
  <?php echo $this->fetch('script') ?>

  <!-- END PAGE LEVEL JS-->
</body>
</html>
