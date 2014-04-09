<?php
/*
Plugin Name: Social Icons
Description: Социальные иконки в шапке сайта
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function social_icons_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('social_main_widget');
    $title = empty($options['title']) ? 'Social Main' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->


<div class="social_icons">
    <div class="social_new">
        <a href="http://vk.com/id3327067" target="_blank">
            <img class="alignnone" alt="vk" src="/wp-content/plugins/social_icons/img/vk.png" width="25" height="25">
        </a>
            &nbsp;
        <a href="mailto:balyakin-sergey@mail.ru" target="_blank">
            <img class="alignnone" alt="mail" src="/wp-content/plugins/social_icons/img/mail.png" width="25" height="25">
        </a>
        &nbsp;
        <a href="http://facebook.com/balyakin.sergey" target="_blank">
            <img class="alignnone" alt="facebook" src="/wp-content/plugins/social_icons/img/facebook.png" width="25" height="25">
        </a>
        &nbsp;
        <a href="http://www.youtube.com/user/DenDyraka" target="_blank">
            <img class="alignnone" alt="yt" src="/wp-content/plugins/social_icons/img/yt.png" width="25" height="25">
        </a>
        &nbsp;
        <a href="skype:balyakins" target="_blank">
            <img class="alignnone" alt="skype" src="/wp-content/plugins/social_icons/img/skype.png" width="25" height="25">
        </a>
    </div>
</div>




        <?php echo $after_widget; ?>
<?php
}

function social_icons_widget_control() {
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

function social_icons_widget_init() {
    register_sidebar_widget('social_icons', 'social_icons_widget');
    register_widget_control('social_icons', 'social_icons_widget_control', 300, 90);
}

add_action('init', 'social_icons_widget_init');
?>