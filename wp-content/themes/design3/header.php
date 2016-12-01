<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo ( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Roboto:400,700|Lato:300' rel='stylesheet' type='text/css'>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/bower_components/animate.css/animate.css">
		<link href='<?php bloginfo( 'template_url' ); ?>/bower_components/swiper/dist/css/swiper.min.css' rel='stylesheet' type='text/css'>

		<link href='<?php bloginfo( 'template_url' ); ?>/css/custom.css' rel='stylesheet' type='text/css'>
		<link href='<?php bloginfo( 'template_url' ); ?>/css/responsive.css' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/node_modules/lightbox2/dist/css/lightbox.css">
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/printElement.min.js"></script>


		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/moment/min/moment.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" />
		<script src="https://use.typekit.net/tdq5gcj.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.5&appId=911661125591162";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<header class="clearfix">
			<div class="bottom-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<?php // logo ?>
							<a href="<?php echo home_url(); ?>"><img src="<?php the_field('header-logo', 15); ?>" class="header-logo"></a>
						</div>
						<div class="col-sm-9 hidden-xs text-right header-nav-container">
							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'container_class' => 'menu-main-menu-container') ); ?>
							</nav>							
						</div>
					</div>
				</div>
				<div class="menu-toggle">
					<i class="fa fa-bars"></i>
				</div>
			</div>

			<nav class="mobile-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'container_class' => 'menu-main-menu-container') ); ?>
			</nav>	
		</header>
