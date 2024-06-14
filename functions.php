<?php
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    if(empty($first_img)) {
      $first_img = "/path/to/default.png";
    }
    return $first_img;
  }

//connect css and javascript
function od_register_header(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('od-custom-style', get_template_directory_uri() . "/style.css", array(), $version , 'all');
    wp_enqueue_script('od-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.1', true);
   
   
    //after wp_enqueue_script
    wp_localize_script( 'my-script', 'object_name', $translation_array );

}
add_action( 'wp_enqueue_scripts', 'od_register_header');

function op_menus() {
  $locations = array(
      'primary'=>'Main Menu',
      'langues'=>'LG Menu'

  );
  register_nav_menus($locations);
}
add_action('init', 'op_menus');

// disable comments

add_action('admin_init', function () {
  // Redirect any user trying to access comments page
  global $pagenow;
   
  if ($pagenow === 'edit-comments.php') {
      wp_safe_redirect(admin_url());
      exit;
  }

  // Remove comments metabox from dashboard
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

  // Disable support for comments and trackbacks in post types
  foreach (get_post_types() as $post_type) {
      if (post_type_supports($post_type, 'comments')) {
          remove_post_type_support($post_type, 'comments');
          remove_post_type_support($post_type, 'trackbacks');
      }
  }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
  if (is_admin_bar_showing()) {
      remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
  }
});



?>