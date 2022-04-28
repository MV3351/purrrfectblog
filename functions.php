<?php
function theme_files()
{
   
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), true, true);
    wp_enqueue_script( 'cycle-2', get_template_directory_uri() . '/js/jquery.cycle2.js', array('jquery'), true,true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), true, true);
}
add_action ( 'wp_enqueue_scripts', 'theme_files');

//Tittle Tag Support
add_theme_support( 'title-tag');

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//Page Excerpt Support
add_post_type_support('page', 'excerpt');

//Post Thumbnails
add_theme_support('post-thumbnails');

// Widget Area
function custom_widgets() {

  register_sidebar(array(
    'name' => 'Front Page Banner Text',
    'id' => 'front_page_banner_text',
    'before_widget' => '<div class="banner-text">',
    'after_widget'  => '</div>',
    'before_title' => '<h1 class="fs-4">',
    'after_title' => '</h1>',
  ));

  register_sidebar(array(
    'name' => 'Front Page Banner Image',
    'id' => 'front_page_banner_image',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '',
    'after_title' => '',
  ));

  register_sidebar(array(
    'name' => 'Course Cat Text',
    'id' => 'course_cat_text',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h2 class="fs-5 fw-600">',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => 'Services Text',
    'id' => 'services_text',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '<h2 class="fs-5 fw-600">',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => 'Sign-up Form',
    'id' => 'sign_up_form',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title' => '',
    'after_title' => '',
  ));

  register_sidebar( array(
    'name' => 'Default Sidebar',
    'id' => 'default_sidebar',
    'before_widget' => '<aside class="card small mb-3 default_sidebar">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="card-header fs-6">',
    'after_title' => '</h3>',
) );

  register_sidebar( array(
		'name'          => 'Footer Widgets',
		'id'            => 'footer_widgets',
		'before_widget' => '<div class="col-lg-3 col-md-3"><div class="footer_widget small">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="fs-6">',
		'after_title'   => '</h4>',
	) );

  register_sidebar( array(
        'name' => 'Default Sidebar',
        'id' => 'default_sidebar',
        'before_widget' => '<aside class="card small mb-3">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="card-header fs-6">',
        'after_title' => '</h3>',
    ) );

  register_sidebar( array(
    'name'          => 'Home Banner Slider',
    'id'            => 'home_banner_slider',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'custom_widgets' );




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

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');
