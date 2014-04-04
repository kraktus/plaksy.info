<?php
/*
Plugin Name: Footer Copyright
Description: Отображение копирайтов и всякой херни в футере.
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function footer_copyright_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('footer_copyright_widget');
    $title = empty($options['title']) ? 'Footer Copyright' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->
<a href="http://vk.com/kraktus" target="_blank" style="opacity: 0.7">
<img src="/wp-content/plugins/footer_copyright/logofooter.png">
</a>
<br>
<br>
Разработка сайта 2014г.
<br/>Копирайт &copy; <?=date('Y')?> "Группа Плаксы"


        <?php echo $after_widget; ?>
<?php
}

function footer_copyright_widget_control() {
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

function footer_copyright_widget_init() {
    register_sidebar_widget('footer_copyright', 'footer_copyright_widget');
    register_widget_control('footer_copyright', 'footer_copyright_widget_control', 300, 90);
}

add_action('init', 'footer_copyright_widget_init');
?>