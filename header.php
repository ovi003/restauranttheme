<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title><?php bloginfo('name') ?>|<?php bloginfo('description') ?></title>

	<!-- Bootstrap core CSS -->
<!-- 	<link href="css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<?php wp_head(); ?>
		<body <?php body_class();?>>
			<nav class="navbar navbar-fixed-top navbar-inverse">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php 
						global $redux_demo;
						echo $redux_demo['logo-uploader']['url'];

						?>"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					 <?php wp_nav_menu(array(
						'theme_location'=>'primary_menu',
						'menu_class'=>'nav navbar-nav navbar-right',
						'menu_id'=>'bs-example-navbar-collapse-1',
						'container_class'=>'collapse navbar-collapse',
						'container_id'=>'bs-example-navbar-collapse-1',
						'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
						'walker'=> new wp_bootstrap_navwalker()
					 )) ?>
				</div><!-- /.container -->
			</nav>