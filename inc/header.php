<?php 

$setting = $db->table('setting')->get();
$favicon = get_option(@$setting->favicon);
$site_name = get_option(@$setting->site_name);
$admin_name = get_option(@$setting->admin_name);
$admin_password = get_option(@$setting->admin_password);
$site_description = get_option(@$setting->site_description);
$site_tags = get_option(@$setting->site_tags);
$language = get_option(@$setting->language);
$site_status = get_option(@$setting->site_status);
$primary_color = get_option(@$setting->primary_color);
$secondary_color = get_option(@$setting->secondary_color);
$headings_color = get_option(@$setting->headings_color);

$db->reset();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $site_name; ?></title>
<link rel="shortcut icon" href="<?= $favicon; ?>" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?= $site_tags; ?>" />
<meta name="description" content="<?= $site_description; ?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?= Enqueue('/theme/css/bootstrap.css'); ?>" type="text/css" rel="stylesheet" media="all">
<link href="<?= Enqueue('/theme/css/style.css'); ?>" type="text/css" rel="stylesheet" media="all">
<link href="<?= Enqueue('/theme/css/font-awesome.css'); ?>" rel="stylesheet">		<!-- font-awesome icons -->
<link rel="stylesheet" href="<?= Enqueue('/theme/css/swipebox.css'); ?>">    <!-- swipebox -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?= Enqueue('/theme/js/jquery-2.2.3.min.js'); ?>"></script>
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->

	<style>

		.services h4 , .profile-grids h5 , .panel-title > a ,.agile-footer p a,
		.profile-grids i.fa , .contact-wthree-right button[type="submit"]:hover ,
		.contact p a:hover  {
			color: <?= $primary_color; ?>;
		}
		.serv-wthree-row:hover span.fa {
			background-color: <?= $primary_color; ?>; 
		}
		.contact-wthree-right button[type="submit"] {
			background: <?= $primary_color; ?>;
    		border: 2px solid <?= $primary_color; ?>; 
		}
		p , .panel-body{
			color: <?= $secondary_color; ?>;
		}
		.contact p , .contact p a , h3.agileits-title , .banner h2 ,
		.header-w3left h1 , ul.address li {
			color: <?= $headings_color; ?>;
		}
		.faddressw3-agileinfo , .contact-wthree-right input[type="text"], .contact-wthree-right input[type="email"],
		.contact-wthree-right textarea{
			border-color:<?= $headings_color; ?>;
		}
		.faddress-w3left:after{
			background:<?= $headings_color; ?>;
		}
		.agileits-img .wthree-pcatn{
			background-color : rgba(<?= implode(',',hexToRgb($primary_color,0.6)); ?>);
		}
	</style>

</head>
<body>
	<!-- main -->
	<div class="buttons-wrapper">
		<input id="slide1" class="w3slider-input" type="radio" name="slider" checked>
		<input id="slide2" class="w3slider-input" type="radio" name="slider">
		<input id="slide3" class="w3slider-input" type="radio" name="slider">
		<input id="slide4" class="w3slider-input" type="radio" name="slider">
		<ul class="slider">