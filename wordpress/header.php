<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Farrago Magazine</title>

	<!-- Background image -->
	<style>
		.title h1 a
		{
			background: -webkit-linear-gradient(transparent, transparent),
             url(<?php printf(get_background_image()); ?>) repeat;
		}
		.parallax
		{
			background: url(<?php printf(get_background_image()); ?>) fixed top / cover;
		}
	</style>

	<!-- Styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hamburger.min.css">

	

	<!-- hover effects -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css">

	<!-- slick import -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
    <!-- for now, we'll use the default theme -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="<?php bloginfo('template_directory'); ?>/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<script src="<?php bloginfo('template_directory'); ?>/js/modenizr.js"></script>

</head>
<body>
	<div class="overlay">
		<nav class="mobile-navigation">
		<ul class="navItems">
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("campus"))?>"><h5>Campus</h5></a>
						</li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("culture"))?>"><h5>Culture</h5></a>
						</li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("comment"))?>"><h5>Commentary</h5></a>
						</li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("creative"))?>"><h5>Creative</h5></a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCYGA13ztSrZcyurecH_Fm0w"><h5>Video</h5></a>
						</li>
					</ul>
	</div>
	<div class="search">
		<?php get_search_form(); ?>
	</div>
	<div class="parallax">
		<div class="container">
			<header class="header">
				<div class="row socialTop">
					<!--<div class="social desktop-only three columns">
						<a href="https://www.facebook.com/farragomagazine/">
							<img src="<?php bloginfo('template_directory'); ?>/img/social/fb-black.png">		
						</a>
					</div>
                    <div class="social desktop-only three columns">
                    	<a href="https://twitter.com/farragomagazine">
                    		<img src="<?php bloginfo('template_directory'); ?>/img/social/twitter-black.png">	
                    	</a>
                    	</div>
                    <div class="social desktop-only three columns">
                    	<a href="https://instagram.com/farragomagazine/">
                    		<img src="<?php bloginfo('template_directory'); ?>/img/social/insta-black.png">	
                    	</a>
                    </div>
                    <div class="social desktop-only three columns">
                    	<a href="https://www.youtube.com/channel/UCYGA13ztSrZcyurecH_Fm0w">
                    		<img src="<?php bloginfo('template_directory'); ?>/img/social/yt-black.png">	
                    	</a>
                	</div>-->
            	</div>
				<div class="row">
					<div class="desktop-only two columns">
						&nbsp;
					</div>
					<div class="mobile-only hbm two columns">
						<button class="hamburger hamburger--collapse" type="button">
						  <span class="hamburger-box">
						    <span class="hamburger-inner"></span>
						  </span>
						</button>
					</div>
                	<div class="title eight columns">
                		<h1><a href="<?php echo home_url(); ?>">FARRAGO</a></h1>
            		</div>
					<div class="fodder desktop-only two columns">
						<a href="http://radiofodder.com"><img src="<?php bloginfo('template_directory'); ?>/img/logoFodder.png"></a>
					</div>
					
				</div>
			</header>
			<nav class="hdrNav">
				<div>
					&nbsp;
					<ul class="navItems">
						<li><a href="<?php echo home_url(); ?>"><img class="hidden" id="logo" src="<?php bloginfo('template_directory'); ?>/img/header-logo.png"></a></li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("campus"))?>"><h5>Campus</h5></a>
							<div class="dropdown">
								<a href="<?php echo get_category_link(get_cat_ID("Admin/Union"))?>">Admin/Union</a>
								<a href="<?php echo get_category_link(get_cat_ID("theatre"))?>">Arts & Theatre</a>
								<a href="<?php echo get_category_link(get_cat_ID("education"))?>">Education</a>
								<a href="<?php echo get_category_link(get_cat_ID("International"))?>">International</a>
								<a href="<?php echo get_category_link(get_cat_ID("lifestyle"))?>">Lifestyle</a>
								<a href="<?php echo get_category_link(get_cat_ID("office bearers"))?>">Office Bearers</a>
								<a href="<?php echo get_category_link(get_cat_ID("sport"))?>">Sport</a>
								<a href="<?php echo get_category_link(get_cat_ID("vca/burnley"))?>">VCA/Burnley</a>
								<a href="<?php echo get_category_link(get_cat_ID("welfare"))?>">Welfare</a>
							</div>
						</li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("culture"))?>"><h5>Culture</h5></a>
							<div class="dropdown">
								<a href="<?php echo get_category_link(get_cat_ID("books"))?>">Books</a>
								<a href="<?php echo get_category_link(get_cat_ID("comedy"))?>">Comedy</a>
								<a href="<?php echo get_category_link(get_cat_ID("film"))?>">Film</a>
								<a href="<?php echo get_category_link(get_cat_ID("music"))?>">Music</a>
								<a href="<?php echo get_category_link(get_cat_ID("television"))?>">Television</a>
							</div>
						</li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("comment"))?>"><h5>Commentary</h5></a>
							<div class="dropdown">
								<a href="<?php echo get_category_link(get_cat_ID("opinion"))?>">Opinion</a>
								<a href="<?php echo get_category_link(get_cat_ID("science"))?>">Science</a>
								<a href="<?php echo get_category_link(get_cat_ID("society"))?>">Society</a>
							</div>
						</li>
						<li>
							<a href="<?php echo get_category_link(get_cat_ID("creative"))?>"><h5>Creative</h5></a>
							<div class="dropdown">
								<a href="<?php echo get_category_link(get_cat_ID("Poetry"))?>">Poetry</a>
								<a href="<?php echo get_category_link(get_cat_ID("Fiction"))?>">Fiction</a>
								<a href="<?php echo get_category_link(get_cat_ID("Art"))?>">Art</a>
							</div>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCYGA13ztSrZcyurecH_Fm0w"><h5>Video</h5></a>
						</li>
						<li><img onclick="search()" src="<?php bloginfo('template_directory'); ?>/img/ic_search_black_24dp_2x.png"></li>
					</ul>
				</div>
			</nav>