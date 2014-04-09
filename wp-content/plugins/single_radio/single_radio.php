<?php
/*
Plugin Name: Single Radio
Description: Отображение песен с радио в сайдбаре
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function single_radio_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('single_radio_widget');
    $title = empty($options['title']) ? 'Single Radio' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->

   <h2>Радио</h2>
   <hr>
   <p>Cлушайте нас в эфире<br><strong>Нашего Радио</strong> и <strong><br>Москва FM</strong>!
   </p>
   <hr>
   <p style="color: #7d2422;"><i class="uk-icon-music"></i>&nbsp; <span class="uk-badge">Плаксы - Я все видел</span></p>
   <audio src="/wp-content/uploads/music/ya_vse_delal.mp3" type="audio/mp3" style="width: 185px; background: #7d2422;"></audio>
   <hr>
   <p style="color: #7d2422;"><i class="uk-icon-music"></i>&nbsp; <span class="uk-badge">Плаксы - НовогодSKAя</span></p>
   <audio src="/wp-content/uploads/music/ng.mp3" type="audio/mp3" style="width: 185px; background: #7d2422;"></audio>






        <?php echo $after_widget; ?>
<?php
}

function single_radio_widget_control() {
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

function single_radio_widget_init() {
    register_sidebar_widget('single_radio', 'single_radio_widget');
    register_widget_control('single_radio', 'single_radio_widget_control', 300, 90);
}

add_action('init', 'single_radio_widget_init');
?>