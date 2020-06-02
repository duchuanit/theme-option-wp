<?php

require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

?>
<?php
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');

  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }
  add_action('after_setup_theme','wpb_theme_setup');

 //
 function new_widgets_init() {
  

  register_sidebar( array(
    'name' => 'Home Right',
    'id' => 'home-right',
    'description' => __( 'Right footer ở trang chủ'),
    'before_widget' => '<div id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' => 'Side Bar',
    'id' => 'side-bar',
    'description' => __( 'Wiget Sidebar'),
    'before_widget' => '<div id="%1$s" class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );    
}

// Add the widget areas
add_action( 'init', 'new_widgets_init' );

//

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//Start of Paganavi 
function wp_corenavi() { 
global $wp_query, $wp_rewrite; 
$pages = ''; 
$max = $wp_query->max_num_pages; 
if (!$current = get_query_var('paged')) $current = 1; 
$a['base'] = ($wp_rewrite->using_permalinks()) ? user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' ) : @add_query_arg('paged','%#%'); 
if( !empty($wp_query->query_vars['s']) ) $a['add_args'] = array( 's' => get_query_var( 's' ) ); 
$a['total'] = $max; 
$a['current'] = $current; 
$total = 1; //1 - display the text "Page N of N", 0 - not display 
$a['mid_size'] = 5; //how many links to show on the left and right of the current 
$a['end_size'] = 10; //how many links to show in the beginning and end 
$a['prev_text'] = '&laquo; Trước'; //text of the "Previous page" link 
$a['next_text'] = 'Sau &raquo;'; //text of the "Next page" link 
if ($max > 1) echo '<div class="pagenavi">'; 
if ($total == 1 && $max > 1) $pages = '<span class="pages">Trang</span>'."\r\n"; 
echo $pages . paginate_links($a); 
if ($max > 1) echo '</div>'; 
}//End of Paganavi 

function get_first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}

//Tao Category khac nhau
function wp_category_template() {
$category = get_queried_object();
$parent_id = $category->category_parent;
$templates = array();
if ( $parent_id == 0 ) {
$templates[] = "category-{$category->slug}.php";
$templates[] = "category-{$category->term_id}.php";
$templates[] = 'category.php';
} else {
$parent = get_category( $parent_id );
$templates[] = "category-{$category->slug}.php";
$templates[] = "category-{$category->term_id}.php";
$templates[] = "category-{$parent->slug}.php";
$templates[] = "category-{$parent->term_id}.php";
$templates[] = 'category.php';
}
return locate_template( $templates );
}
add_filter( 'category_template', 'wp_category_template' );

//Tao single post khác nhau
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
foreach( (array) get_the_category() as $cat )
{
if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
if($cat->parent)
{
$cat = get_the_category_by_ID( $cat->parent );
if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
}
}
return $t;
}

//  Begin Plugin mycode - register shortcode Plugin
add_shortcode('phpinclude', 'PHP_Include');
?>