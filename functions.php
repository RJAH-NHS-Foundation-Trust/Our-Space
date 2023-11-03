<?php 

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

/*
* Disable the Gutenberg editor
*/
add_filter('use_block_editor_for_post_type', 'disable_gutenberg', 10, 2);
function disable_gutenberg($current_status, $post_type)
{
    return false;
}

function custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom_login.css" />';
}

add_action('login_head', 'custom_login');

/**
 * Pagination
 */

 function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
 {
     if (null === $wp_query) {
         global $wp_query;
     }
 
     $add_args = [];
 
     //add query (GET) parameters to generated page URLs
     /*if (isset($_GET[ 'sort' ])) {
         $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
     }*/
 
     $pages = paginate_links(array_merge([
             'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
             'format' => '?paged=%#%',
             'current' => max(1, get_query_var('paged')),
             'total' => $wp_query->max_num_pages,
             'type' => 'array',
             'show_all' => false,
             'end_size' => 3,
             'mid_size' => 1,
             'prev_next' => true,
             'prev_text' => __('Previous Page'),
             'next_text' => __('Next Page'),
             'add_args' => $add_args,
             'add_fragment' => ''
         ], $params)
     );
 
     if (is_array($pages)) {
         //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
         $pagination = '<nav class="mt-3" aria-label="navigation">';
 
         $pagination .= '<ul class="pagination justify-content-center"';
 
         foreach ($pages as $page) {
             $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
         }
 
         $pagination .= '</ul></nav>';
 
         if ($echo) {
             echo $pagination;
         } else {
             return $pagination;
         }
     }
 
     return null;
 }
 
 /**
  * Custom admin logo
  */
 
 add_action('admin_menu', 'raindrop_admin_menu');
 
 function raindrop_admin_menu()
 {
     global $menu;
     $url = get_option('home');;
     $menu[0] = array(__('Mindful Percy'), 'read', $url, 'chr-logo', 'chr-logo');
 }
 
 add_action('admin_head', 'raindrop_admin_style');
 
 function raindrop_admin_style()
 {
     echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/raindrop-admin.css" type="text/css" media="all" />';
 }

?>