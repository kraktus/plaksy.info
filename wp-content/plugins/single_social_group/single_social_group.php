<?php
/*
Plugin Name: Single Social Grouop
Description: Боковой виджет группы в контакте
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function single_social_group_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('single_social_group');
    $title = empty($options['title']) ? 'Single Social Grouop' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->


<!-- Social -->

   <h2 style="color: #5B7FA6">Social</h2>
   <hr>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?108"></script>

<!-- VK Widget -->

<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "186", height: "265", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 876218);
</script>


        <?php echo $after_widget; ?>
<?php
}

function single_social_group_widget_control() {
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

function single_social_group_widget_init() {
    register_sidebar_widget('single_social_group', 'single_social_group_widget');
    register_widget_control('single_social_group', 'single_social_group_widget_control', 300, 90);
}

add_action('init', 'single_social_group_widget_init');
?>