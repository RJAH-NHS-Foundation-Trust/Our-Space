<?php 

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

/**
* Remove Howdy Site Wide
*/

function remove_howdy_in_strings( $text ) {
	$text = str_ireplace( 'Howdy! ', '', $text );
	$text = str_ireplace( 'Howdy, ', '', $text );
	return $text;
}
add_filter( 'gettext', 'remove_howdy_in_strings' );

function ourspace_init() {
    
    add_filter('feed_links_show_comments_feed', '__return_false');
    add_filter('xmlrpc_enabled', '__return_false');
    add_filter('big_image_size_threshold', '__return_false');
    add_filter('wpseo_next_rel_link', '__return_false');
    add_filter('wpseo_prev_rel_link', '__return_false');
    add_filter('wpseo_debug_markers', '__return_false');
    add_filter('wpseo_json_ld_output', '__return_false');
    add_filter('pings_open', '__return_false', 20, 2);
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('comments_array', '__return_empty_array', 10, 2);
    add_action('admin_init', 'disable_admin_comments');
    add_filter('embed_oembed_html', function($code) { return str_replace('<iframe', '<iframe class="ratio ratio-1x1" width="600" height="450" ', $code);});
}

/**
 * Disable the Gutenberg editor
 */

add_filter('use_block_editor_for_post_type', 'disable_gutenberg', 10, 2);    
function disable_gutenberg($current_status, $post_type)
{
    return false;
}

/**
* Remove comments from sidebar 
*/

function remove_admin_menu_items() {
	$remove_menu_items = array(__('Comments'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
};

add_action('admin_menu', 'remove_admin_menu_items');

/**
* Redirect user away from comments page
*/

add_action('admin_init', function () {

    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    add_action('admin_menu', function () {
        remove_menu_page('edit-comments.php');
    });
    
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
        
});

/**
* Remove items from menu bar
*/

function remove_admin_bar_comments() {
    global $wp_admin_bar;
    if (is_admin_bar_showing()) {
        $wp_admin_bar->remove_menu('wp-logo');
        $wp_admin_bar->remove_menu('comments');
        $wp_admin_bar->remove_menu('wpforms-menu');
        $wp_admin_bar->remove_menu('tribe-events');
        $wp_admin_bar->remove_menu('new-content');
    }
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_comments' );

/**
* Change Admin Footer Text
*/

function remove_footer_admin () {
    echo "OurSpace";
} 

add_filter('admin_footer_text', 'remove_footer_admin');

/**
* Cleanup Dashboard Widgets
*/

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
 
    remove_action( 'welcome_panel', 'wp_welcome_panel' ); 
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health'] ); 
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] );
}
 
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

/**
* Custom Login
*/

function custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom_login.css" />';
}

add_action('login_head', 'custom_login');

/**
* Custom admin logo
*/
 
add_action('admin_menu', 'our_space_admin_menu');
 
function our_space_admin_menu()
{
    global $menu;
    $url = get_option('home');;
    $menu[0] = array(__('Our Space'), 'read', $url, 'our-space-logo', 'our-space-logo');
}

add_action('admin_head', 'our_space_admin_style');

/**
* Add Admin Styling
*/

function our_space_admin_style()
{
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/ourspace-admin.css" type="text/css" media="all" />';
}

/**
* Create categories on theme activation if they don't already exist
*/

function create_categories_on_activation() {
    $categories = array(
        'Access To Work',
        'adhd',
        'anxiety',
        'autism',
        'bipolar',
        'Depression',
        'meditation',
        'ocd',
        'recipes',
        'resources'
    );

    foreach ($categories as $category) {
        if (!term_exists($category, 'category')) {
            wp_insert_term($category, 'category');
        }
    }
}

add_action('after_switch_theme', 'create_categories_on_activation');

/**
* Pagination
*/

 function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
 {
    if (null === $wp_query) {
        global $wp_query;
    }
 
    $add_args = [];
 
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
* Hub Custom Post Types
*/
   
function custom_post_hub_type() {
   
    $labels = array(
        'name'                => _x( 'Hubs', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Hub', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Hubs', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Hub', 'twentytwentyone' ),
        'all_items'           => __( 'All Hubs', 'twentytwentyone' ),
        'view_item'           => __( 'View Hubs', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Hub', 'twentytwentyone' ),
        'add_new'             => __( 'Add New Hub', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Hub', 'twentytwentyone' ),
        'update_item'         => __( 'Update Hub', 'twentytwentyone' ),
        'search_items'        => __( 'Search Hubs', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );       
       
    $args = array(
        'label'               => __( 'books', 'twentytwentyone' ),
        'description'         => __( 'books', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-admin-multisite',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
   
    );           

    register_post_type( 'hub', $args );       
}

add_action( 'init', 'custom_post_hub_type', 0 );

/**
* Recipe Custom Post Types
*/
   
function custom_post_recipe_type() {
   
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
        
    $args = array(
        'label'               => __( 'recipes', 'twentytwentyone' ),
        'description'         => __( 'recipes', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'diet','post_tag' ),
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
    
    register_post_type( 'recipe', $args );
    
}
    
add_action( 'init', 'custom_post_recipe_type', 0 );

/**
* DaysOut Custom Post Types
*/
   
function custom_post_daysout_type() {
   
    $labels = array(
        'name'                => _x( 'Days Out', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Day Out', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Days Out', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Day Out', 'twentytwentyone' ),
        'all_items'           => __( 'All Days Out', 'twentytwentyone' ),
        'view_item'           => __( 'View Days Out', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Day Out', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Day Out', 'twentytwentyone' ),
        'update_item'         => __( 'Update Day Out', 'twentytwentyone' ),
        'search_items'        => __( 'Search Day Out', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'daysout', 'twentytwentyone' ),
        'description'         => __( 'daysout', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-share',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );

    register_post_type( 'daysout', $args );
       
}
    
add_action( 'init', 'custom_post_daysout_type', 0 );

/**
* Links Custom Post Types
*/
   
function custom_post_link_type() {
   
    $labels = array(
        'name'                => _x( 'Links', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Link', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Links', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Link', 'twentytwentyone' ),
        'all_items'           => __( 'All Links', 'twentytwentyone' ),
        'view_item'           => __( 'View Links', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Link', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Link', 'twentytwentyone' ),
        'update_item'         => __( 'Update Link', 'twentytwentyone' ),
        'search_items'        => __( 'Search Link', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'links', 'twentytwentyone' ),
        'description'         => __( 'links', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title',),
        'taxonomies'          => array( 'category'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-links',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
    register_post_type( 'link', $args );
    
}
    
add_action( 'init', 'custom_post_link_type', 0 );

/**
* Workouts Custom Post Types
*/
   
function custom_post_workout_type() {

    $labels = array(
        'name'                => _x( 'Workouts', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Workout', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Workouts', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Workout', 'twentytwentyone' ),
        'all_items'           => __( 'All Workouts', 'twentytwentyone' ),
        'view_item'           => __( 'View Workouts', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Workout', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Workout', 'twentytwentyone' ),
        'update_item'         => __( 'Update Workout', 'twentytwentyone' ),
        'search_items'        => __( 'Search Workout', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'workouts', 'twentytwentyone' ),
        'description'         => __( 'workouts', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'diet','category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-heart',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );

    register_post_type( 'workout', $args );
    
}
    
add_action( 'init', 'custom_post_workout_type', 0 );

/**
* Exercises Custom Post Types
*/
   
function custom_post_exercise_type() {
   
    $labels = array(
        'name'                => _x( 'Exercises', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Exercise', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Exercises', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Exercise', 'twentytwentyone' ),
        'all_items'           => __( 'All Exercises', 'twentytwentyone' ),
        'view_item'           => __( 'View Exercises', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Exercise', 'twentytwentyone' ),
        'add_new'             => __( 'Add New Exercise', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Exercise', 'twentytwentyone' ),
        'update_item'         => __( 'Update Exercise', 'twentytwentyone' ),
        'search_items'        => __( 'Search Exercise', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
            
    $args = array(
        'label'               => __( 'exercises', 'twentytwentyone' ),
        'description'         => __( 'exercises', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'diet' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-superhero-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'exercise', $args );    
}
    
add_action( 'init', 'custom_post_exercise_type', 0 );

/**
* Discount Codes Post Types
*/
   
function custom_post_discount_codes_type() {
   
    $labels = array(
        'name'                => _x( 'Discount Codes', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Discount Code', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Discount Codes', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Discount Code', 'twentytwentyone' ),
        'all_items'           => __( 'All Discount Codes', 'twentytwentyone' ),
        'view_item'           => __( 'View Discount Codes', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Discount Code', 'twentytwentyone' ),
        'add_new'             => __( 'Add New Discount Code', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Discount Code', 'twentytwentyone' ),
        'update_item'         => __( 'Update Discount Code', 'twentytwentyone' ),
        'search_items'        => __( 'Search Discount Code', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'Discount Codes', 'twentytwentyone' ),
        'description'         => __( 'Discount Codes', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'diet' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-money-alt',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
    
    register_post_type( 'discount-code', $args );       
}
    
add_action( 'init', 'custom_post_discount_codes_type', 0 );

/**
* Types Area taxonomy
*/

function custom_workout_taxonomy() {

    $labels = array(
        'name' => _x( 'Types', 'taxonomy general name' ),
        'singular_name' => _x( 'Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Types' ),
        'all_items' => __( 'All Types' ),
        'parent_item' => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ), 
        'update_item' => __( 'Update Type' ),
        'add_new_item' => __( 'Add New Type' ),
        'new_item_name' => __( 'New Type Name' ),
        'menu_name' => __( 'Types' ),
    );

    register_taxonomy(
        'type',
        array(
            'workout',
            'exercise'
        ), 
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'diet' ),
        )
    );
}

add_action( 'init', 'custom_workout_taxonomy' );

/**
* Distances Area taxonomy
*/

function custom_workout_distance_taxonomy() {
    $labels = array(
        'name' => _x( 'Distances', 'taxonomy general name' ),
        'singular_name' => _x( 'Distance', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Distances' ),
        'all_items' => __( 'All Distances' ),
        'parent_item' => __( 'Parent Distance' ),
        'parent_item_colon' => __( 'Parent Distance:' ),
        'edit_item' => __( 'Edit Distance' ), 
        'update_item' => __( 'Update Distance' ),
        'add_new_item' => __( 'Add New Distance' ),
        'new_item_name' => __( 'New Distance Name' ),
        'menu_name' => __( 'Distances' ),
    );

    register_taxonomy(
        'distance',
        array('workout','exercise'),
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'diet' ),
        )
    );
}

add_action( 'init', 'custom_workout_distance_taxonomy' );

/**
* Difficulty Area taxonomy
*/

function custom_workout_difficulty_taxonomy() {

    $labels = array(
        'name' => _x( 'Difficulty', 'taxonomy general name' ),
        'singular_name' => _x( 'Difficulty', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Difficulty' ),
        'all_items' => __( 'All Difficulty' ),
        'parent_item' => __( 'Parent Difficulty' ),
        'parent_item_colon' => __( 'Parent Difficulty:' ),
        'edit_item' => __( 'Edit Difficulty' ), 
        'update_item' => __( 'Update Difficulty' ),
        'add_new_item' => __( 'Add New Difficulty' ),
        'new_item_name' => __( 'New Difficulty Name' ),
        'menu_name' => __( 'Difficulty' ),
    );

    register_taxonomy(
        'workout-difficulty',
        array(
            'workout',
            'exercise'
        ), 
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'workout-difficulty' ),
        )
    );

    $default_terms = array( 'Beginner', 'Intermediate', 'Advanced' );

    foreach ($default_terms as $term_name) {
        wp_insert_term($term_name, 'workout-difficulty');
    }
}

add_action( 'init', 'custom_workout_difficulty_taxonomy' );

/**
* Locations Area taxonomy
*/

function custom_workout_location_taxonomy() {
    $labels = array(
        'name' => _x( 'Locations', 'taxonomy general name' ),
        'singular_name' => _x( 'Location', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Locations' ),
        'all_items' => __( 'All Locations' ),
        'parent_item' => __( 'Parent Location' ),
        'parent_item_colon' => __( 'Parent Location:' ),
        'edit_item' => __( 'Edit Location' ), 
        'update_item' => __( 'Update Location' ),
        'add_new_item' => __( 'Add New Location' ),
        'new_item_name' => __( 'New Location Name' ),
        'menu_name' => __( 'Locations' ),
    );

    register_taxonomy(
        'locations',
        array('workout','exercise'),
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'diet' ),
        )
    );
}

add_action( 'init', 'custom_workout_body_area_taxonomy' );

/**
* Body Area taxonomy
*/

function custom_workout_body_area_taxonomy() {
    $labels = array(
        'name' => _x( 'Body Area', 'taxonomy general name' ),
        'singular_name' => _x( 'Body Area', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Body Areas' ),
        'all_items' => __( 'All Body Areas' ),
        'parent_item' => __( 'Parent Body Area' ),
        'parent_item_colon' => __( 'Parent Body Area:' ),
        'edit_item' => __( 'Edit Body Area' ), 
        'update_item' => __( 'Update Body Area' ),
        'add_new_item' => __( 'Add New Body Area' ),
        'new_item_name' => __( 'New Body Area Name' ),
        'menu_name' => __( 'Body Areas' ),
    );

    register_taxonomy(
        'body_area',
        array(
            'exercise'
            ), 
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'body-area' ),
        )
    );

    $default_terms = array( 
        'Hip Abductors',
        'Chest',
        'Triceps',
        'Shoulders',
        'Quadriceps',
        'Glutes',
        'Calves',
        'Hip Flexors',
        'Quadriceps',
        'Abs',
        'Hamstrings',
        'Full Body',
        'Legs',
        'Biceps',
        'Forearms',
        'Back' 
    );

    foreach ($default_terms as $term_name) {
        wp_insert_term(
            $term_name, 
            'body_area'
        );
    }
}

add_action( 'init', 'custom_workout_body_area_taxonomy' );

/**
* Diets taxonomy
*/

function custom_taxonomy() {
    $labels = array(
        'name' => _x( 'Diets', 'taxonomy general name' ),
        'singular_name' => _x( 'Diet', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Diets' ),
        'all_items' => __( 'All Diets' ),
        'parent_item' => __( 'Parent Diet' ),
        'parent_item_colon' => __( 'Parent Diet:' ),
        'edit_item' => __( 'Edit Diet' ), 
        'update_item' => __( 'Update Diet' ),
        'add_new_item' => __( 'Add New Diet' ),
        'new_item_name' => __( 'New Diet Name' ),
        'menu_name' => __( 'Diets' ),
    );

    register_taxonomy(
        'diet',
        'recipe',
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'diet' ),
        )
    );
}

add_action( 'init', 'custom_taxonomy' );

/**
* Books Custom Post Types
*/
   
function custom_post_book_type() {   

    $labels = array(
        'name'                => _x( 'Books', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Book', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Books', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Book', 'twentytwentyone' ),
        'all_items'           => __( 'All Books', 'twentytwentyone' ),
        'view_item'           => __( 'View Books', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Book', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Book', 'twentytwentyone' ),
        'update_item'         => __( 'Update Book', 'twentytwentyone' ),
        'search_items'        => __( 'Search Books', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'books', 'twentytwentyone' ),
        'description'         => __( 'books', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-book',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'book', $args );       
}
    
add_action( 'init', 'custom_post_book_type', 0 );

/**
* Podcasts Custom Post Types
*/
   
function custom_post_podcast_type() {
   
    $labels = array(
        'name'                => _x( 'Podcasts', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Podcast', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Podcasts', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Podcast', 'twentytwentyone' ),
        'all_items'           => __( 'All Podcasts', 'twentytwentyone' ),
        'view_item'           => __( 'View Podcasts', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Podcast', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Podcast', 'twentytwentyone' ),
        'update_item'         => __( 'Update Podcast', 'twentytwentyone' ),
        'search_items'        => __( 'Search Podcast', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
                    
    $args = array(
        'label'               => __( 'podcasts', 'twentytwentyone' ),
        'description'         => __( 'podcasts', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-audio',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'podcast', $args );       
}
    
add_action( 'init', 'custom_post_podcast_type', 0 );

/**
* Gyms Custom Post Types
*/
   
function custom_post_gym_type() {

    $labels = array(
        'name'                => _x( 'Gyms', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Gym', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Gyms', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Gym', 'twentytwentyone' ),
        'all_items'           => __( 'All Gyms', 'twentytwentyone' ),
        'view_item'           => __( 'View Gyms', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Gym', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Gym', 'twentytwentyone' ),
        'update_item'         => __( 'Update Gym', 'twentytwentyone' ),
        'search_items'        => __( 'Search Gym', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
                
    $args = array(
        'label'               => __( 'gyms', 'twentytwentyone' ),
        'description'         => __( 'gyms', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-superhero',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'gym', $args );       
}
    
add_action( 'init', 'custom_post_gym_type', 0 );

/*
* Local Clubs & Classes Custom Post Types
*/
   
function custom_post_support_groups_type() {
   
    $labels = array(
        'name'                => _x( 'Groups', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Group', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Groups', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Group', 'twentytwentyone' ),
        'all_items'           => __( 'All Groups', 'twentytwentyone' ),
        'view_item'           => __( 'View Groups', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Group', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Group', 'twentytwentyone' ),
        'update_item'         => __( 'Update Group', 'twentytwentyone' ),
        'search_items'        => __( 'Search Group', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'groups', 'twentytwentyone' ),
        'description'         => __( 'groups', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category','post_tag'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-networking',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'group', $args );       
}
    
add_action( 'init', 'custom_post_support_groups_type', 0 );

/*
* Routes Custom Post Types
*/
   
function custom_post_route_type() {
   
    $labels = array(
        'name'                => _x( 'Routes', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'Route', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'Routes', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent Route', 'twentytwentyone' ),
        'all_items'           => __( 'All Routes', 'twentytwentyone' ),
        'view_item'           => __( 'View Routes', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New Route', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit Route', 'twentytwentyone' ),
        'update_item'         => __( 'Update Route', 'twentytwentyone' ),
        'search_items'        => __( 'Search Route', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
        
    $args = array(
        'label'               => __( 'routes', 'twentytwentyone' ),
        'description'         => __( 'routes', 'twentytwentyone' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'length' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'routes', $args );       
}
    
add_action( 'init', 'custom_post_route_type', 0 );

function custom_length_taxonomy() {
    $labels = array(
        'name' => _x( 'Route Lengths', 'taxonomy general name' ),
        'singular_name' => _x( 'length', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search length' ),
        'all_items' => __( 'All lengths' ),
        'parent_item' => __( 'Parent length' ),
        'parent_item_colon' => __( 'Parent length:' ),
        'edit_item' => __( 'Edit length' ), 
        'update_item' => __( 'Update length' ),
        'add_new_item' => __( 'Add New length' ),
        'new_item_name' => __( 'New Diet Name' ),
        'menu_name' => __( 'Route Length' ),
    );

    register_taxonomy(
        'length',
        'routes',
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'length' ),
        )
    );

    $default_terms = array( 'Less Than 5K', '3K', '5K', '10k', 'More Than 10k' );

    foreach ($default_terms as $term_name) {
        wp_insert_term($term_name, 'length');
    }
}

add_action( 'init', 'custom_length_taxonomy' );


function custom_difficulty_taxonomy() {
    $labels = array(
        'name' => _x( 'Route Difficulties', 'taxonomy general name' ),
        'singular_name' => _x( 'difficulty', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search difficulties' ),
        'all_items' => __( 'All difficulties' ),
        'parent_item' => __( 'Parent difficulty' ),
        'parent_item_colon' => __( 'Parent difficulty:' ),
        'edit_item' => __( 'Edit difficulty' ), 
        'update_item' => __( 'Update difficulty' ),
        'add_new_item' => __( 'Add New difficulty' ),
        'new_item_name' => __( 'New difficulty Name' ),
        'menu_name' => __( 'Route Difficulty' ),
    );

    register_taxonomy(
        'difficulty',
        'routes',
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'length' ),
        )
    );

    $default_terms = array( 'Easy', 'Intermediate', 'Difficult', 'Advanced' );
    foreach ($default_terms as $term_name) {
        wp_insert_term($term_name, 'difficulty');
    }
}

add_action( 'init', 'custom_difficulty_taxonomy' );
add_action( 'after_switch_theme', 'create_page_on_theme_activation' );

function create_page_on_theme_activation(){

    $hubTemplate = 'page-hub.php';

    /**
    * Anxiety Hub Page
    */ 

    $page_name = 'Anxiety';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain'); 
    $new_page_content   = '';
    $new_page_template  = $hubTemplate;
    $page_check = get_page_by_title($new_page_title);

    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    /**
    * Depression Hub Page
    */  
    $page_name = 'Depression';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain');
    $new_page_content   = '';
    $new_page_template  = $hubTemplate;
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    /**
    * Mindfullness Hub Page
    */ 
    $page_name = 'Mindfulness';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain');
    $new_page_content   = '';
    $new_page_template  = $hubTemplate;
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    /**
    * Yoga Hub Page
    */
    $page_name = 'Yoga';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain');
    $new_page_content   = '';
    $new_page_template  = $hubTemplate;
    $page_check = get_page_by_title($new_page_title);

    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    /**
    * Meditation Hub Page
    */

    $page_name = 'Meditation';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain');
    $new_page_content   = '';
    $new_page_template  = $hubTemplate;
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );

    /**
    * Personal Health Hub Page
    */

    $page_name = 'Personal Health';
    $page_name_with_spacing = strtolower(str_replace(' ','_',$page_name));
    $new_page_title     = __($page_name,'text-domain');
    $new_page_content   = '';
    $new_page_template  = $hubTemplate;
    $page_check = get_page_by_title($new_page_title);  
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => $page_name_with_spacing
    );
}

/**
* Post Views
* Functions to power the post views that drive the popular pages in the hubs
*/

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

/**
* Get rid of prefetching to keep the count accurate
*/

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

/**
* Post View Count
*/

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