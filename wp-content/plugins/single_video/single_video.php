<?php
/*
Plugin Name: Single Video
Description: Отображение клипа в сайдбаре
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function single_video_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('single_video_widget');
    $title = empty($options['title']) ? 'Single Video' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->
   <h2>Видео</h2>
   <hr>


       <a class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="https://www.youtube.com/watch?v=AYV_HEcCVTo" data-lightbox="transitionIn:elastic;transitionOut:elastic; group:mygroup1;titlePosition:over;padding:0">
            <div class="uk-overlay" style="border: 3px solid #7d2422;">
                <img src="/wp-content/uploads/video/main_video.jpg"   width="200" height="140" alt="Load Style" >
                <!-- <div class="uk-overlay-area" style="background: #7d2422"></div> -->
            </div>
            <div class="uk-thumbnail-caption" style="background: #7d2422; color:white;">Плаксы - Плаксы-Style!</div>
        </a>

   <p style="width: 186px;">Клип на одну из самых узнаваемых песен.<br> Визитная карточка группы.</p>




        <?php echo $after_widget; ?>
<?php
}

function single_video_widget_control() {
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

function single_video_widget_init() {
    register_sidebar_widget('single_video', 'single_video_widget');
    register_widget_control('single_video', 'single_video_widget_control', 300, 90);
}

add_action('init', 'single_video_widget_init');
?>