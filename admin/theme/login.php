<?php 

if(isset($_SESSION['login'])){
  redirect('/admin/');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IDEAL C.V | Admin Panel</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= home_url().'/admin/'; ?>"><b>IDEAL </b>C.V</a>
  </div>
  <!-- /.login-logo -->

    <?php if(isset($_SESSION['Error'])) : ?>

    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> <?= $_SESSION['Error']; ?></h4>
      
    </div>

    <?php endif; unset($_SESSION['Error']); ?>

  <div class="login-box-body">
    <p class="login-box-msg"><?= $lang['Sign in to start your session']; ?></p>
    <form action="<?= home_url() ?>/admin/?url=save&data=login" method="post">
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="<?= $lang['type the user name here']; ?>">
        <span class="fa  fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="<?= $lang['type the password here']; ?>">
        <span class="fa  fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat"><?= $lang['sign in']; ?></button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= Enqueue('/admin/js/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= Enqueue('/admin/js/bootstrap.min.js'); ?>"></script>

</body>
</html>
