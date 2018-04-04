<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
		
		<!-- Bootstrap --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
		
		<!-- Font Awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
		
		<!-- Google Fonts --> 
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body <?php body_class(); ?>>

			<!-- heeader -->

			<header>
            <div id="header-top" class="hidden-xs hidden-sm visible-md visible-lg">
                <div id="header-top-inner-wrapper" class="container">
                    <a id="header-login-link" href="https://sleekehair.com/my-account-2/">
                        <span class="glyphicon glyphicon-user"></span>Login
                    </a>
                    <ul id="header-social-links">
                        <li><a href="https://www.facebook.com/sleekehair/" title="Facebook" target="_blank">F</a></li>
                        <li><a href="https://twitter.com/sleekehair" title="Twitter" target="_blank">T</a></li>
                        <li><a href="https://www.youtube.com/channel/UCisDYOavUVPKP3g48lImRhw?view_as=subscriber" title="YouTube" target="_blank">Y</a></li>
                        <li><a href="https://www.instagram.com/sleekehair/" title="Instagram" target="_blank">I</a></li>
                    </ul>
                </div>
            </div> 

            <!-- end header top --> 

            <div id="header-middle">
                <a id="header-logo" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                </a>
                <a id="header-mobile-nav-toggle" class="visible-xs visible-sm hidden-md hidden-lg pull-right" href="#">
                    <span id="burger-bar"></span>
                </a>
                <a id="header-mobile-cart-link" class="visible-xs visible-sm hidden-md hidden-lg pull-right" href="https://sleekehair.com/cart-2/"><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div> 

            <!-- end header middle --> 

            <div id="header-bottom">
                <nav id="header-nav">
                    <?php html5blank_nav(); ?>
                    <form id="header-nav-mobile-search-form" class="visible-xs visible-sm hidden-md hidden-lg" method="get" action="https://sleekehair.com/">
                        <input class="search-field" name="search-field" placeholder="Search" value="">
                        <span class="glyphicon glyphicon-search"></span>
                    </form>
                    <div id="header-nav-mobile-backdrop" class="visible-xs visible-sm hidden-md hidden-lg"></div>
                </nav>
            </div>
        </header>

		<!-- end header --> 

			