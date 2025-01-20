<?php

function shade_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'sidebar'   => __( 'Sidebar Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'shade_menus' );
add_theme_support( 'post-thumbnails' );

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
function register_navwalker(){
	require_once get_template_directory() . '/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
add_filter( 'xmlrpc_enabled', '__return_false' );
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_list_item_class($classes, $item, $args) {
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

  function add_link_atts($atts) {
	$atts['class'] = "menu-link";
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_link_atts');


class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if (in_array('menu-item-has-children', $item->classes)) {
            $output .= '<li class="menu-item menu-item-has-children menu-dropdown">';
            $output .= '<a href="' . $item->url . '" class="menu-link">' . $item->title . '<i class="bx bx-chevron-right">> </i></a>';
        } else {
            $output .= '<li class="menu-item">';
            $output .= '<a href="' . $item->url . '" class="menu-link">' . $item->title . '</a>';
        }
    }

	
	function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '<div class="submenu megamenu megamenu-column-1">';
        } else {
            $output .= '<div class="submenu megamenu megamenu-column-1">';
        }
        $output .= '<ul class="submenu-list">';
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
        $output .= '</div>';
    }
	
}
