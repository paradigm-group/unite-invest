<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class('site'); ?>>

        <header class="header" role="banner">

            <div id="inner-header" class="container container-header navbar navbar-transparent navbar-fixed-top">

                <div class="logo-container">
                    <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
                    <p class="brand-text"><a href="<?php echo home_url(); ?>" rel="nofollow"><span class="brand-logo"></span><span class="text-theme">Unite</span> Invest</a></p>
                </div>



            <nav role="navigation" class="navigation">

                <?php wp_nav_menu(array(
                    'container' => 'false',                           // remove nav container
                    'container_class' => 'container',                 // class of container (should you choose to use it)
                    'menu' => __( 'Main', 'bonestheme' ),  // nav name
                    'menu_class' => 'nav navbar-nav navbar-right',               // adding custom nav class
                    'theme_location' => 'main-nav',                 // where it's located in the theme
                    'before' => '',                                 // before the menu
                    'after' => '',                                  // after the menu
                    'link_before' => '',                            // before each link
                    'link_after' => '',                             // after each link
                    'depth' => 0,                                   // limit the depth of the nav
                    'fallback_cb' => ''                             // fallback function (if there is one)
                )); ?>

            </nav>
        </div>
        </header>
