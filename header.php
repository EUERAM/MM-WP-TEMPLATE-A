<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<?php  wp_body_open(); ?>
    <header>
		<div class="container">
            <div class="row align-items-center">
                <div class="col-3 logo">
			         <?php the_custom_logo(); ?>
                </div>
                <div class="col-9 text-right">
                    <?php
                     wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container' =>  'nav',
                            'container_class'   =>  'hide'
                           
                        )
                    );
                    ?>
                    <div class="burguer">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->

	<main <?php body_class(); ?>>
