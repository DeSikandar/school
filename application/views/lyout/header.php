<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>EducationPress - The Most Complete Education Solution</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Favicon -->
<link rel="shortcut icon" href="<?=base_url() ?>/static/images/favicon.png"/>

<!-- Bootstrap -->
<link href="<?=base_url() ?>/static/css/bootstrap.min.css" rel="stylesheet">

<!--Font Awesome-->
<link rel="stylesheet" href="<?=base_url() ?>/static/css/font-awesome.min.css">
<!--Linearicons-Free-->
<link rel="stylesheet" href="<?=base_url() ?>/static/css/linearicons-free.css">
<!--simple-line-icons-->
<link rel="stylesheet" href="<?=base_url() ?>/static/css/simple-line-icons.css">
<!--animation-css-->
<link rel="stylesheet" href="<?=base_url() ?>/static/css/animate.css">
<!--Flexslider-css-->
<link rel="stylesheet" href="<?=base_url() ?>/static/vendor/flexslider/flexslider.css">
<!--fancybox-->
<link rel="stylesheet" href="<?=base_url() ?>/static/vendor/fancybox/css/fancybox.css">

<!--Theme Styles-->
<link rel="stylesheet" href="<?=base_url() ?>/static/css/global.css">
<link rel="stylesheet" href="<?=base_url() ?>/static/css/style.css">
<script src="<?=base_url() ?>/static/js/jquery.min.js"></script>
<style>
.field-icon {
  float: right;
  margin-left: -100px;
  margin-top: -25px;
  position: relative;
  height: 20px;
  z-index: 2;
}
</style>
</head>
<body>

<!-- header -->
<header class="site-header" id="masthead">

  <!-- header_meta #start -->
  <div class="header_meta">
    <div class="container">
      <div class="row">

      </div>
      <!--row #end-->
    </div>
    <!--container #end-->
  </div>
  <!-- Header Meta #end -->
  <!-- header_meta #end -->

  <div class="container">
    <div class="row">
      <!-- #site-branding #start -->
      <div class="site-branding col-xs-12 col-sm-3"> <a rel="home" href="#"> <img alt="educationpress" class="brand" src="<?=base_url() ?>/static/images/logo.png"> </a> </div>
      <!-- #site-branding #end -->

      <!-- #site-navigation #start -->
      <nav class="main-navigation navbar navbar-default" id="site-navigation">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">

          <ul class="nav navbar-nav">
            <?php  $act=basename($_SERVER['PHP_SELF']); ?>
            <li <?php  if($act=="index.php"){ echo 'class="active"';} ?> >
            <a class="dropdown-toggle"   href="<?=base_url()?>">
            Home </a>

            </li>
            <li <?php  if($act=="course"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("course")?>">
                Courses </a>

            </li>


            <li <?php  if($act=="gallery"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("gallery")?>">
                Gallery </a>

            </li>
            <li <?php  if($act=="about_us"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("about_us")?>">
                About Us </a>

            </li>

            <li <?php  if($act=="blog"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("blog")?>">
                Blog </a>

            </li>

            <?php if(!$this->session->userdata("user")){  ?>
            <li <?php  if($act=="student_register"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("student_register")?>">
                Sign Up Student </a>

            </li>
            <li <?php  if($act=="chanel_singup"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("chanel_singup")?>">
                Sign Up Channel Partner</a>

            </li>
            <li <?php  if($act=="sign_in"){ echo 'class="active"';} ?>>
            	<a class="dropdown-toggle" href="<?=base_url("sign_in")?>">
                Sign In </a>

            </li>
          <?php } else{?>


            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><span><?=$this->session->userdata("name")?></span>
              <span class="caret"></span></a>
             <ul class="dropdown-menu" role="menu" style="display: none;">
                <li><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                <li><a href="<?=base_url('dashboard/usre_logout')?>">Logout</a></li>
              </ul>
             </li>

          <?php } ?>





          </ul>
        </div>
      </nav>
      <!-- #site-navigation  #end-->

    </div><!--row #end-->
  </div> <!--container #end-->
</header>
<!-- header #end -->
