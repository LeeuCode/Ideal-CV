<?php 

if(!isset($_SESSION['login'])) :

  return redirect('/admin/?url=login');
  die();
  
endif;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= Enqueue('/admin/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= Enqueue('/admin/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
   <link rel="stylesheet" href="<?= Enqueue('/admin/css/bootstrap-colorpicker.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= Enqueue('/admin/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= Enqueue('/admin/css/skins/_all-skins.min.css'); ?>">
  <!-- style of cms -->
  <link rel="stylesheet" href="<?= Enqueue('/admin/css/style.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="<?= home_url().'/admin/'; ?>" class="navbar-brand"><b>IDEAL C.V</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="<?= home_url().'/'; ?>" target="_blank">
                <i class="fa fa-globe"></i> 
                <?= $lang['visit site']; ?> <span class="sr-only">(current)</span>
              </a>
            </li>

            <li>
              <a href="<?= home_url().'/admin/?url=index'; ?>">
                <i class="fa fa-black-tie"></i> 
                <?= $lang['about me']; ?>
              </a>
            </li>
            <li>
              <a href="<?= home_url().'/admin/?url=skills-services'; ?>">
                <i class="fa fa-cubes"></i> 
                <?= $lang['skills & services']; ?>
              </a>
            </li>
            <li>
              <a href="<?= home_url().'/admin/?url=education-experience-projects'; ?>" >
                <i class="fa fa-mortar-board"></i> 
                 <?= $lang['education & experience & projects']; ?>
              </a>
            </li>

            <li>
              <a href="<?= home_url().'/admin/?url=contact'; ?>" >
                <i class="fa fa-envelope"></i>
                 <?= $lang['contact me']; ?>
              </a>
            </li>

            <li>
              <a href="<?= home_url().'/admin/?url=setting'; ?>">
                <i class="fa fa-sliders"></i>
                 <?= $lang['setting']; ?>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <li>
              <a href="<?= home_url().'/admin/?url=logout'; ?>">
                <i class="fa fa-sign-out"></i>
                 <?= $lang['logout']; ?>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container-fluid">