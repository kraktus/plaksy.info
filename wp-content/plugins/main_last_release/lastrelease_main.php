<?php
/*
Plugin Name: Last Release Main
Description: Отображение последней выпущенной песни/альбома на главной
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function lastrelease_main_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('lastrelease_main_widget');
    $title = empty($options['title']) ? 'Last Release Main' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->



            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-1-1">
<div class="uk-panel uk-panel-box" data-uk-scrollspy="{cls:'uk-animation-scale-up'}">
<div class="tm-panel-clear-image">
    <img src="wp-content/uploads/yootheme/zoo_icon.svg" class="uk-align-center uk-margin-bottom-remove" alt="Zoo" />
</div>
<div>
   <h3>Zoo</h3>
   <p>ZOO provides a much improved Joomla experience. Create your very own custom content types.</p>
   <a href="http://www.yootheme.com/zoo" class="uk-button uk-button-primary uk-margin-top">read more</a>
</div>
</div>
</div>




        <?php echo $after_widget; ?>
<?php
}

function lastrelease_main_widget_control() {
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

function lastrelease_main_widget_init() {
    register_sidebar_widget('lastrelease_main', 'lastrelease_main_widget');
    register_widget_control('lastrelease_main', 'lastrelease_main_widget_control', 300, 90);
}

add_action('init', 'lastrelease_main_widget_init');
?>