<?php
/**
* @package   Capture
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

//Меняем страницу поиска на с /s/ на /search/
function fb_change_search_url_rewrite() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }
}
add_action( 'template_redirect', 'fb_change_search_url_rewrite' );

// check compatibility
if (version_compare(PHP_VERSION, '5.3', '>=')) {

    // bootstrap warp
    require(__DIR__.'/warp.php');
}
