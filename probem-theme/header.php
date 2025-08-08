<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Instituto ProbEM">
            </a>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-header' ) ); ?>
        </nav>
        <a href="#" class="cta-button">Doe!</a>
    </div>
</header>