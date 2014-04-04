<?php
/*
Plugin Name: Footer Links
Description: Ссылки на сторонние ресурсы
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function footer_links_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('footer_links_widget');
    $title = empty($options['title']) ? 'Footer links' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->
<?
// echo "ух мля ее перекосило всю";
?>

<!-- <div class="uk-margin uk-vertical-align"></div>
<div class="uk-grid uk-vertical-align-bottom">
 -->

<div id="footer"></div>
<div class="uk-margin uk-vertical-align" >

<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
        <tbody>
                <tr style="height:70px">
                        <td width="90px">
                                <img width="90px" src="/wp-content/plugins/footer_links/img/1.png">
                        </td>
                        <td width="110px">
                                <img width="70px" style="margin-left: 10px;" src="/wp-content/plugins/footer_links/img/2.png">
                        </td>
                        <td width="110px">
                                <img width="110px" style="margin-left: -10px;" src="/wp-content/plugins/footer_links/img/3.png">
                        </td>
                        <td width="110px">
                                <img width="110px" style="margin-left: 7px;" src="/wp-content/plugins/footer_links/img/4.png">
                        </td>
                </tr>
                <tr style="height:60px">
                        <td>
                                <img width="90px" src="/wp-content/plugins/footer_links/img/5.png">
                        </td>
                        <td>
                                <img width="90px" src="/wp-content/plugins/footer_links/img/6.png">
                        </td>
                        <td>
                                <img width="100px" src="/wp-content/plugins/footer_links/img/7.png">
                        </td>
                        <td>
                                <img width="110px" style="margin-left: 10px;" src="/wp-content/plugins/footer_links/img/8.png">
                        </td>
                </tr>
                <tr>
                        <td width="80px">
                                <img width="80px" style="margin-left: 10px;" src="/wp-content/plugins/footer_links/img/9.png">
                        </td>
                        <td>
                                <img width="50px" style="margin-left: 21px;" src="/wp-content/plugins/footer_links/img/10.png">
                        </td>
                        <td>
                                <img width="53px" style="margin-left: 20px;" src="/wp-content/plugins/footer_links/img/11.png">
                        </td>
                        <td>
                                <img width="110px" style="margin-left: 10px; margin-bottom: 10px" src="/wp-content/plugins/footer_links/img/12.png">
                        </td>
                </tr>
                <tr style="height:65px">
                        <td>
                                <img width="90px" style="margin-left: 6px;" src="/wp-content/plugins/footer_links/img/13.png">
                        </td>
                        <td>
                                <img width="70px" style="margin-left: 12px;" src="/wp-content/plugins/footer_links/img/14.png">
                        </td>
                        <td>
                                <img width="73px" style="margin-left: 13px;" src="/wp-content/plugins/footer_links/img/15.png">
                        </td>
                        <td>
                                <img width="55px" style="margin-left: 30px;" src="/wp-content/plugins/footer_links/img/16.png">
                        </td>
                </tr>

                <tr style="height:60px">
                        <td>
                                <img width="80px" style="margin-left: 13px;" src="/wp-content/plugins/footer_links/img/17.png">
                        </td>
                        <td>
                                <img width="45px" style="margin-left: 26px;" src="/wp-content/plugins/footer_links/img/18.png">
                        </td>
                        <td>
                                <img width="50px" style="margin-left: 25px; margin-bottom: 10px" src="/wp-content/plugins/footer_links/img/19.png">
                        </td>
                        <td>
                                <img width="110px" style="margin-left: 15px;" src="/wp-content/plugins/footer_links/img/20.png">
                        </td>
                </tr>
        </tbody>
</table>

</div>
<!-- </div> -->


        <?php echo $after_widget; ?>
<?php
}

function footer_links_widget_control() {
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

function footer_links_widget_init() {
    register_sidebar_widget('footer_links', 'footer_links_widget');
    register_widget_control('footer_links', 'footer_links_widget_control', 300, 90);
}

add_action('init', 'footer_links_widget_init');
?>