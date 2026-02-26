<!DOCTYPE html>
<html lang="en-au">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo get_the_title() . ' | North Metropolitan Tafe Library'; ?>
    </title>

    <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    ?>
    <link rel="icon" type="image/x-icon" href="<?php echo $logo[0]; ?>">

    <?php wp_head(); ?>
</head>

<body>
<!-- Skipnav Button -->
<a href="#main" class="skip-link">Skip to main content</a>

<header>
    <nav class="navbar px-2 fixed-top">
    
        <!-- Left Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#leftMenu" aria-controls="leftMenu" aria-expanded="false" aria-label="Toggle navigation">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-icon.png" alt="Hamburger Icon" width="50">
        </button>

        <!-- Center Brand -->
        <a class="navbar-brand fw-bold text-center" href="<?php echo home_url(); ?>">NMT Library</a>

        <!-- Right Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#rightMenu" aria-controls="rightMenu" aria-expanded="false" aria-label="Toggle navigation">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.png" alt="Search Icon" width="50">
        </button>

        <!-- Left Collapse Menu -->
        <div class="collapse navbar-collapse position-absolute top-100 start-0 w-100" id="leftMenu">

            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-main-menu',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                    'depth'          => 2,
                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>

        </div>

        <!-- Right Collapse Menu -->
        <div class="collapse navbar-collapse position-absolute top-100 end-0 w-100" id="rightMenu">

            <?php get_template_part('template-parts/content', 'chatbox'); ?>

        </div>

    </nav>
</header>

<button id="scroll-to-top-button" title="Go to top"><i class="bi bi-arrow-up"></i></button>
<noscript>Your browser does not have JavaScript enabled. Some features of this site will not be available.</noscript>
