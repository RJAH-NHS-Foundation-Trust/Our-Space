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
     $menu[0] = array(__('Our Space'), 'read', $url, 'percy-logo', 'percy-logo');
 }
 
 add_action('admin_head', 'raindrop_admin_style');
 
 function raindrop_admin_style()
 {
     echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/ourspace-admin.css" type="text/css" media="all" />';
 }

/*
* YouTube Custom Post Types
*/
   
function custom_post_youtube_type() {
   
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'YouTube Video', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'YouTube Videos', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'YouTube Videos', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent video', 'twentytwentyone' ),
            'all_items'           => __( 'All videos', 'twentytwentyone' ),
            'view_item'           => __( 'View videos', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New video', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit video', 'twentytwentyone' ),
            'update_item'         => __( 'Update video', 'twentytwentyone' ),
            'search_items'        => __( 'Search video', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
           
    // Set other options for Custom Post Type
           
        $args = array(
            'label'               => __( 'YouTube Videos', 'twentytwentyone' ),
            'description'         => __( 'YouTube Videos', 'twentytwentyone' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-editor-video',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
       
        );
           
        // Registering your Custom Post Type
        register_post_type( 'youtube', $args );
       
    }
       
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
       
    add_action( 'init', 'custom_post_youtube_type', 0 );

/*
* Recipe Custom Post Types
*/
   
function custom_post_recipe_type() {
   
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Recipes', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Recipe', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Recipes', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Recipe', 'twentytwentyone' ),
            'all_items'           => __( 'All Recipes', 'twentytwentyone' ),
            'view_item'           => __( 'View Recipes', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Recipe', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Recipe', 'twentytwentyone' ),
            'update_item'         => __( 'Update Recipe', 'twentytwentyone' ),
            'search_items'        => __( 'Search Recipe', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
           
    // Set other options for Custom Post Type
           
        $args = array(
            'label'               => __( 'recipes', 'twentytwentyone' ),
            'description'         => __( 'recipes', 'twentytwentyone' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-food',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
       
        );
           
        // Registering your Custom Post Type
        register_post_type( 'recipe', $args );
       
    }
       
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
    
add_action( 'init', 'custom_post_recipe_type', 0 );

add_action( 'after_switch_theme', 'create_page_on_theme_activation' );

function create_page_on_theme_activation(){

    $hubTemplate = 'page-hub.php';

    // ANXIETY HUB PAGE 
    $page_name = 'Anxiety';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = $hubTemplate;       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    // DEPRESSION HUB PAGE 
    $page_name = 'Depression';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = $hubTemplate;       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    // MINDFULNESS HUB PAGE 
    $page_name = 'Mindfulness';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = $hubTemplate;       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    // YOGA HUB PAGE 
    $page_name = 'Yoga';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = $hubTemplate;       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );


    // MEDITATION HUB PAGE 
    $page_name = 'Meditation';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = $hubTemplate;       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    // PERSONAL HEALTH HUB PAGE 
    $page_name = 'Personal Health';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = $hubTemplate;       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    ); 

}

// POST VIEWS 
// Functions to power the post views that drive the popular pages in the hubs

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
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

//Get rid of prefetching to keep the count accurate
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

wpb_set_post_views(get_the_ID());

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }

    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


?>