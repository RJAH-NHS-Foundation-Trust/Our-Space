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
     $menu[0] = array(__('Mindful Percy'), 'read', $url, 'percy-logo', 'percy-logo');
 }
 
 add_action('admin_head', 'raindrop_admin_style');
 
 function raindrop_admin_style()
 {
     echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/raindrop-admin.css" type="text/css" media="all" />';
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

// Custom settings
function charity_settings_add_menu() {
	add_menu_page( 'Charity Settings', 'Charity Settings', 'manage_options', 'charity-settings', 'custom_charity_settings_page', null, 99 );
}

add_action( 'admin_menu', 'charity_settings_add_menu' );

// Create Custom Global Settings
function custom_charity_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'charity-settings' );
						submit_button();
				?>
		</form>
	</div>
<?php }

// Charity A Name
function setting_charity_a_name() { ?>
	<input type="text" name="charity_a_name" id="charity_a_name" value="<?php echo get_option( 'charity_a_name' ); ?>" />
<?php }

// Charity A Logo
function setting_charity_a_logo() { ?>
	<input type="text" name="charity_a_logo" id="charity_a_logo" value="<?php echo get_option( 'charity_a_logo' ); ?>" />
<?php }

// Charity A URL
function setting_charity_a_url() { ?>
	<input type="text" name="charity_a_url" id="charity_a_url" value="<?php echo get_option( 'charity_a_url' ); ?>" />
<?php }

// Charity B Logo
function setting_charity_b_name() { ?>
	<input type="text" name="charity_b_name" id="charity_b_name" value="<?php echo get_option( 'charity_b_name' ); ?>" />
<?php }

// Charity B Logo
function setting_charity_b_logo() { ?>
	<input type="text" name="charity_b_logo" id="charity_b_logo" value="<?php echo get_option( 'charity_b_logo' ); ?>" />
<?php }

// Charity B URL
function setting_charity_b_url() { ?>
	<input type="text" name="charity_b_url" id="charity_b_url" value="<?php echo get_option( 'charity_b_url' ); ?>" />
<?php }

// Charity C Name
function setting_charity_c_name() { ?>
	<input type="text" name="charity_c_name" id="charity_c_name" value="<?php echo get_option( 'charity_c_name' ); ?>" />
<?php }

// Charity C Logo
function setting_charity_c_logo() { ?>
	<input type="text" name="charity_c_logo" id="charity_c_logo" value="<?php echo get_option( 'charity_c_logo' ); ?>" />
<?php }

// Charity C URL
function setting_charity_d_url() { ?>
	<input type="text" name="charity_c_url" id="charity_c_url" value="<?php echo get_option( 'charity_c_url' ); ?>" />
<?php }

// Charity D name
function setting_charity_d_name() { ?>
	<input type="text" name="charity_d_name" id="charity_d_name" value="<?php echo get_option( 'charity_d_name' ); ?>" />
<?php }

// Charity D Logo
function setting_charity_d_logo() { ?>
	<input type="text" name="charity_d_logo" id="charity_d_logo" value="<?php echo get_option( 'charity_d_logo' ); ?>" />
<?php }

// Charity D URL
function setting_charity_c_url() { ?>
	<input type="text" name="charity_d_url" id="charity_d_url" value="<?php echo get_option( 'charity_d_url' ); ?>" />
<?php }

function custom_charity_settings_page_setup() {

	add_settings_section( 'section', 'First Charity', null, 'charity-settings' );
    
	add_settings_field( 'charity_a_name', 'First Charity Name', 'setting_charity_a_name', 'charity-settings', 'section' );
    add_settings_field( 'charity_a_logo', 'First Charity Logo', 'setting_charity_a_logo', 'charity-settings', 'section' );
    add_settings_field( 'charity_a_url', 'First Charity URL', 'setting_charity_a_url', 'charity-settings', 'section' );

    register_setting('section', 'charity_a_name');
    register_setting('section', 'charity_a_logo');
    register_setting('section', 'charity_a_url');

    add_settings_section( 'section', 'Second Charity', null, 'charity-settings' );   

    register_setting('section', 'charity_b_name');
    register_setting('section', 'charity_b_logo');
    register_setting('section', 'charity_b_url');

    add_settings_section( 'section', 'Third Charity', null, 'charity-settings' );

    add_settings_field( 'charity_c_name', 'Third Charity Name', 'setting_charity_c_name', 'charity-settings', 'section' );
	add_settings_field( 'charity_c_logo', 'Third Charity Logo', 'setting_charity_c_logo', 'charity-settings', 'section' );
    add_settings_field( 'charity_c_url', 'Third Charity URL', 'setting_charity_c_url', 'charity-settings', 'section' );

    register_setting('section', 'charity_c_name');
    register_setting('section', 'charity_c_logo');
    register_setting('section', 'charity_c_url');

    add_settings_section( 'section', 'Fourth Charity', null, 'charity-settings' );

    add_settings_field( 'charity_d_name', 'Fourth Charity Name', 'setting_charity_d_name', 'charity-settings', 'section' );
	add_settings_field( 'charity_d_logo', 'Fourth Charity Logo', 'setting_charity_d_logo', 'charity-settings', 'section' );
    add_settings_field( 'charity_d_url', 'Fourth Charity URL', 'setting_charity_d_url', 'charity-settings', 'section' );

    register_setting('section', 'charity_d_name');
    register_setting('section', 'charity_d_logo');
    register_setting('section', 'charity_d_url');

}

add_action( 'admin_init', 'custom_charity_settings_page_setup' );

// Custom settings
function apps_add_menu() {
	add_menu_page( 'Mindful Applications', 'Mindful Applications', 'manage_options', 'mindful-apps-settings', 'custom_apps_settings_page', null, 99 );
}

add_action( 'admin_menu', 'apps_add_menu' );

// Create Custom Global Settings
function custom_apps_settings_page() { ?>
	<div class="wrap">
		<h1>Mindful Apps Settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'mindful-apps-settings' );
						submit_button();
				?>
		</form>
	</div>
<?php }

// Charity A Name
function setting_app_a_name() { ?>
	<input type="text" name="app_a_name" id="app_a_name" value="<?php echo get_option( 'app_a_name' ); ?>" />
<?php }

// Charity A Logo
function setting_app_a_logo() { ?>
	<input type="text" name="app_a_logo" id="app_a_logo" value="<?php echo get_option( 'app_a_logo' ); ?>" />
<?php }

// Charity A URL
function setting_app_a_url() { ?>
	<input type="text" name="app_a_url" id="app_a_url" value="<?php echo get_option( 'app_a_url' ); ?>" />
<?php }

// Charity B Logo
function setting_app_b_name() { ?>
	<input type="text" name="app_b_name" id="app_b_name" value="<?php echo get_option( 'app_b_name' ); ?>" />
<?php }

// Charity B Logo
function setting_app_b_logo() { ?>
	<input type="text" name="app_b_logo" id="app_b_logo" value="<?php echo get_option( 'app_b_logo' ); ?>" />
<?php }

// Charity B URL
function setting_app_b_url() { ?>
	<input type="text" name="app_b_url" id="app_b_url" value="<?php echo get_option( 'app_b_url' ); ?>" />
<?php }

// Charity C Name
function setting_app_c_name() { ?>
	<input type="text" name="app_c_name" id="app_c_name" value="<?php echo get_option( 'app_c_name' ); ?>" />
<?php }

// Charity C Logo
function setting_app_c_logo() { ?>
	<input type="text" name="app_c_logo" id="app_c_logo" value="<?php echo get_option( 'app_c_logo' ); ?>" />
<?php }

// Charity C URL
function setting_app_d_url() { ?>
	<input type="text" name="app_c_url" id="app_c_url" value="<?php echo get_option( 'app_c_url' ); ?>" />
<?php }

// Charity D name
function setting_app_d_name() { ?>
	<input type="text" name="app_d_name" id="app_d_name" value="<?php echo get_option( 'app_d_name' ); ?>" />
<?php }

// Charity D Logo
function setting_app_d_logo() { ?>
	<input type="text" name="app_d_logo" id="app_d_logo" value="<?php echo get_option( 'app_d_logo' ); ?>" />
<?php }

// Charity D URL
function setting_app_c_url() { ?>
	<input type="text" name="app_d_url" id="app_d_url" value="<?php echo get_option( 'app_d_url' ); ?>" />
<?php }

add_action( 'admin_init', 'custom_apps_settings_page_setup' );

function custom_apps_settings_page_setup() {

	add_settings_section( 'section', 'Applications', null, 'mindful-apps-settings' );
	
    add_settings_field( 'app_a_name', 'First App Name', 'setting_app_a_name', 'mindful-apps-settings', 'section' );
    add_settings_field( 'app_a_logo', 'First App Logo', 'setting_app_a_logo', 'mindful-apps-settings', 'section' );
    add_settings_field( 'app_a_url', 'First App URL', 'setting_app_a_url', 'mindful-apps-settings', 'section' );

    register_setting('section', 'app_a_name');
    register_setting('section', 'app_a_logo');
    register_setting('section', 'app_a_url');

    add_settings_field( 'app_b_name', 'Second App Name', 'setting_app_b_name', 'mindful-apps-settings', 'section' );
	add_settings_field( 'app_b_logo', 'Second App Logo', 'setting_app_b_logo', 'mindful-apps-settings', 'section' );
    add_settings_field( 'app_b_url', 'Second App URL', 'setting_app_b_url', 'mindful-apps-settings', 'section' );

    register_setting('section', 'app_b_name');
    register_setting('section', 'app_b_logo');
    register_setting('section', 'app_b_url');

    add_settings_field( 'app_c_name', 'Third App Name', 'setting_app_c_name', 'mindful-apps-settings', 'section' );
	add_settings_field( 'app_c_logo', 'Third App Logo', 'setting_app_c_logo', 'mindful-apps-settings', 'section' );
    add_settings_field( 'app_c_url', 'Third App URL', 'setting_app_c_url', 'mindful-apps-settings', 'section' );

    register_setting('section', 'app_c_name');
    register_setting('section', 'app_c_logo');
    register_setting('section', 'app_c_url');

    add_settings_field( 'app_d_name', 'Fourth App Name', 'setting_app_d_name', 'mindful-apps-settings', 'section' );
	add_settings_field( 'app_d_logo', 'Fourth App Logo', 'setting_app_d_logo', 'mindful-apps-settings', 'section' );
    add_settings_field( 'app_d_url', 'Fourth App URL', 'setting_app_d_url', 'mindful-apps-settings', 'section' );

    register_setting('section', 'app_d_name');
    register_setting('section', 'app_d_logo');
    register_setting('section', 'app_d_url');
  

}

?>