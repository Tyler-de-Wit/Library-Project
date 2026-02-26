<?php

// -------------------- Theme Support -------------------- //
function mytheme_setup() {

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');


// -------------------- Enqueue stylesheets -------------------- //
function add_theme_style() {
  
    wp_enqueue_style('normalise', get_template_directory_uri() . '/assets/css/normalise.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrapicons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), '1.0', 'all');
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/scss/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'add_theme_style');


// -------------------- Enqueue scripts -------------------- //
function add_theme_script() {
  
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('chatbox', get_template_directory_uri() . '/assets/js/chatbox.js', array(), '1.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_theme_script');


// -------------------- Create Widgets -------------------- //
function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle) {

	register_sidebar( array(
		'name'          => $name,
		'id'            => $id,
		'description'   => $description,
		'before_widget' => $beforeWidget,
		'after_widget'  => $afterWidget,
		'before_title'  => $beforeTitle,
		'after_title'   => $afterTitle,
	));
}

function multiple_widget_init(){

    // widget_registration('Sitemap Page External Links', 'widget-sitemap-page-external-links', 'Widget area for the External Links on the sitemap page', '<div class="widget-sitemap-page-external-links">', '</div>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Sitemap Page PDF Resources', 'widget-sitemap-page-pdf-resources', 'Widget area for the PDF resources on the sitemap page', '<li class="widget-sitemap-page-pdf-resources"><i class="bi bi-file-earmark-pdf"></i>', '</li>', '<h2 class="widget-title">', '</h2>');
}
add_action('widgets_init', 'multiple_widget_init', 10, 7);


// -------------------- Get Icons ID -------------------- //
// Custom function to query the database using the slug of the image and then returning it's url
function get_image_url_from_slug( $slug ) {
    $args = array(
        'posts_per_page' => 1,
        'post_type'      => 'attachment',
        'name'           => trim( $slug ), // Use the filename (slug)
        'post_status'    => 'inherit',
    );
    $get_attachment = new WP_Query( $args );

    if ( ! $get_attachment || ! isset( $get_attachment->posts, $get_attachment->posts[0] ) ) {
        return false;
    }

    // Get the attachment ID
    $attachment_id = $get_attachment->posts[0]->ID;

    // Use a built in WordPress function to get the URL
    $image_url = wp_get_attachment_image_url( $attachment_id, 'full' );

    return $image_url;
}


// -------------------- Create Menus -------------------- //
// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach($this->current_item->classes as $class) {
            if(in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? '' : '';
        $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
        $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

        // Getting the slug of the current menu item, then manually testing and setting the path for the home page as it doesn't have a slug
        // Then dynamically finding the rest of the icons from the WordPress media library with a fallback icon
        $current_menu_slug = basename( untrailingslashit( $item->url ) );
        if(untrailingslashit( $item->url ) === untrailingslashit( home_url() )) {
            $icons_output_url = get_template_directory_uri() . '/assets/images/home-page-icon.png';
        } else {
            $icon_url = get_image_url_from_slug( $current_menu_slug . '-icon' );
            if ( $icon_url ) {
                $icons_output_url = $icon_url;
            } else {
                $icons_output_url = get_template_directory_uri() . '/assets/images/document-icon.png';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= '<img src="' . esc_url( $icons_output_url ) . '" class="ms-2 me-2 p-2" alt="Navigation Menu ' . $current_menu_slug . ' Icon" width="45">';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

// Register the menus
function register_menus() {

    register_nav_menu('header-main-menu', 'Main menu in the header');
    register_nav_menu('footer-quick-links-menu', 'Quick links menu in the footer');
}
add_action('init', 'register_menus');


// Add class to menu anchor tags
function add_class_to_menu_anchor_tags($atts, $item, $args) {

    $class = 'text-reset';
    $atts['class'] = $class;
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_to_menu_anchor_tags', 10, 3);
