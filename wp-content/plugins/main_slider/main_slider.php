<?php
/*
Plugin Name: Main Slider
Description: Отображение навигации по главной странице.
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function main_slider_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('main_slider_widget');
    $title = empty($options['title']) ? 'Main Slider' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->

<?
// Register the style like this for a plugin:
wp_register_style( 'main_slider_css', plugins_url( '/css/main_slider.css', __FILE__ ), array(), '20120208', 'all' );
wp_enqueue_style('main_slider_css');

// Register the script like this for a plugin:
// wp_register_script( 'main_slider_js', plugins_url( '/js/main_slider.js', __FILE__ ), array('jquery'),'1.1', true );
// wp_enqueue_script('main_slider_js');
?>


<div class="tm-smoothscroll-bar uk-hidden-small">
    <ul data-uk-scrollspy-nav="{smoothscroll: {closest: 'li', offset: 90}}">
        <li><a href="#main-menu" class="uk-active"><i class="uk-icon-circle"></i></a></li>
        <li><a href ="#wigets" data-uk-smooth-scroll><i class="uk-icon-circle"></i></a></li>
        <li><a href ="#parallax-bottom-image" data-uk-smooth-scroll><i class="uk-icon-circle"></i></a></li>
        <li><a href="#footer" class=""><i class="uk-icon-circle"></i></a></li>
    </ul>
</div>

        <?php echo $after_widget; ?>
<?php
}

function main_slider_widget_control() {
    /*$options = $newoptions = get_option('a2p_plugin_widget_meta');
    if ( $_POST["a2p_plugin_meta-submit"] ) {
        $newoptions['title'] = strip_tags(stripslashes($_POST["a2p_plugin_meta-title"]));
    }
    if ( $options != $newoptions ) {
        $options = $newoptions;
        update_option('a2p_plugin_widget_meta', $options);
    }
    $title = htmlspecialchars($options['title'], ENT_QUOTES);
?>
            <p><label for="a2p_plugin_meta-title"><?php _e('Title:'); ?> <input style="width: 250px;" id="a2p_plugin_meta-title" name="a2p_plugin_meta-title" type="text" value="<?php echo $title; ?>" /></label></p>
            <input type="hidden" id="a2p_plugin_meta-submit" name="a2p_plugin_meta-submit" value="1" />
<?php*/
}

function main_slider_widget_init() {
    register_sidebar_widget('main_slider', 'main_slider_widget');
    register_widget_control('main_slider', 'main_slider_widget_control', 300, 90);
}

add_action('init', 'main_slider_widget_init');
?>