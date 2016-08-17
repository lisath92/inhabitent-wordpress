<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
* Remove "Editor" links from sub-menus
*/
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}

add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

/**
*Customize login logo.
*/
function inhabitent_login() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri().'/assets/images/inhabitent-logo-text-dark.svg'; ?>);
            background-size: 300px 53px;
            width: 300px;
            height: 53px;
        }
    </style>
<?php }
add_action( 'login_head', 'inhabitent_login' );

//Change login logo url to inhabitent home url.
function inhabitent_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_logo_url' );

//Change login logo url title
function inhabitent_url_title() {
    return 'Inhabitent Supply Co.';
}
add_filter( 'login_headertitle', 'inhabitent_url_title' );

//Adjusting archive page loop for products
function inhabitent_modify_product_archive($query){
    if(is_post_type_archive('product') && !is_admin() && $query->is_main_query()){
        $query->set('posts_per_page', 16);
        $query->set('order', 'ASC');
        $query->set('orderby', 'title');


    }

}
add_action('pre_get_posts', 'inhabitent_modify_product_archive');
