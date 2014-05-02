<?php
/*
Plugin Name: Footer Links
Description: Ссылки на сторонние ресурсы
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function footer_links_widget($args)
{
    extract($args, EXTR_SKIP);
    $options = get_option('footer_links_widget');
    $title   = empty($options['title']) ? 'Footer links' : $options['title'];
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
    <div class="uk-margin uk-vertical-align">

<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 100%;" class="footer_links">
        <tbody>
                <tr style="height:70px">
                        <td width="90px">
                            <a href="http://www.nashe.ru/" target="_blank">
                                <img width="90px" src="/wp-content/plugins/footer_links/img/1.png">
                            </a>
                        </td>
                        <td width="110px">
                            <a href="http://www.nashe.ru/nashe20/" target="_blank">
                                <img width="70px" style="margin-left: 10px;" src="/wp-content/plugins/footer_links/img/2.png">
                            </a>
                        </td>
                        <td width="110px">
                            <a href="http://nashestvie.ru/" target="_blank">
                                <img width="110px" style="margin-left: -10px;" src="/wp-content/plugins/footer_links/img/3.png">
                            </a>
                        </td>
                        <td width="110px">
                            <a href="http://vozduh.info/" target="_blank">
                                <img width="110px" style="margin-left: 7px;" src="/wp-content/plugins/footer_links/img/4.png">
                            </a>
                        </td>
                </tr>
                <tr style="height:60px">
                        <td>
                               <a href="http://vk.com/semenchayka" target="_blank">
                                <img width="90px" src="/wp-content/plugins/footer_links/img/5.png">
                               </a>
                        </td>
                        <td>
                            <a href="http://www.musicmoscow.ru" target="_blank">
                                <img width="90px" src="/wp-content/plugins/footer_links/img/6.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://www.moskva.fm/" target="_blank">
                                <img width="100px" src="/wp-content/plugins/footer_links/img/7.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://www.korol-i-shut.ru/" target="_blank">
                                <img width="110px" style="margin-left: 10px;" src="/wp-content/plugins/footer_links/img/8.png">
                            </a>
                        </td>
                </tr>
                <tr>
                        <td width="80px">
                            <a href="http://vk.com/cwa_afisha" target="_blank">
                                <img width="80px" style="margin-left: 10px;" src="/wp-content/plugins/footer_links/img/9.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://vk.com/cube_music" target="_blank">
                                <img width="50px" style="margin-left: 21px;" src="/wp-content/plugins/footer_links/img/10.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://vk.com/live_night_music" target="_blank">
                                <img width="53px" style="margin-left: 20px;" src="/wp-content/plugins/footer_links/img/11.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://vk.com/yanakarataeva" target="_blank">
                                <img width="110px" style="margin-left: 10px; margin-bottom: 10px" src="/wp-content/plugins/footer_links/img/12.png">
                            </a>
                        </td>
                </tr>
                <tr style="height:65px">
                        <td>
                            <a href="http://vk.com/club42097095" target="_blank">
                                <img width="90px" style="margin-left: 6px;" src="/wp-content/plugins/footer_links/img/13.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://www.art-seg.ru/" target="_blank">
                                <img width="70px" style="margin-left: 12px;" src="/wp-content/plugins/footer_links/img/14.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://q-rec.ru/" target="_blank">
                                <img width="73px" style="margin-left: 13px;" src="/wp-content/plugins/footer_links/img/15.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://rock-online.ru/" target="_blank">
                                <img width="55px" style="margin-left: 30px;" src="/wp-content/plugins/footer_links/img/16.png">
                            </a>
                        </td>
                </tr>

                <tr style="height:60px">
                        <td>
                            <a href="http://teatrclub.com/" target="_blank">
                                <img width="80px" style="margin-left: 13px;" src="/wp-content/plugins/footer_links/img/17.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://rusrock.info/" target="_blank">
                                <img width="45px" style="margin-left: 26px;" src="/wp-content/plugins/footer_links/img/18.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://rocktusa.ru/" target="_blank">
                                <img width="50px" style="margin-left: 25px; margin-bottom: 10px" src="/wp-content/plugins/footer_links/img/19.png">
                            </a>
                        </td>
                        <td>
                            <a href="http://www.glastonberrypub.ru/" target="_blank">
                                <img width="110px" style="margin-left: 15px;" src="/wp-content/plugins/footer_links/img/20.png">
                            </a>
                        </td>
                </tr>
        </tbody>
</table>
<hr>

</div>
    <!--Копирайтик-->

    <div class="crby">
    <div>
    Разработка сайта 2014г.<br>
    Все права защищены. Копирайт © 2009-<?=date("Y")?>
    </div>
    <div style="float: right;position: inherit;margin-top: -40px;margin-right: 50px;">
        <a href="http://www.vk.com/kraktus" target="_blank">
        <img src="/wp-content/plugins/footer_links/img/crby.png">
        </a>
    </div>
    </div>
    <!-- </div> -->


    <?php echo $after_widget; ?>
<?php
}

function footer_links_widget_control()
{
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

function footer_links_widget_init()
{
    register_sidebar_widget('footer_links', 'footer_links_widget');
    register_widget_control('footer_links', 'footer_links_widget_control', 300, 90);
}

add_action('init', 'footer_links_widget_init');
?>