<?php
/*
Plugin Name: Events Main
Description: Публикация постов типа events и media на главной
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function events_main_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('events_main_widget');
    $title = empty($options['title']) ? 'Events Main' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->

        <table id="wigets" border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
        <tbody>
            <tr>
                <td><h2>Голосуй не голосуй...</h2></td>
                <td>&nbsp;</td>
                    <td style="text-align: right;" title="По данным встречи в контакте" data-uk-tooltip="">
                                    <!-- <span class="uk-badge"><dfn style="border-bottom: 0px dotted; font-style: italic;"  title="">Участники</dfn></span>&nbsp; <span class="uk-badge uk-badge-notification"><dfn style="border-bottom: 0px dotted;" title="По данным встречи в контакте">57</dfn></span> -->
                    </td>
            </tr>
        </tbody>
        </table>

<br>
<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td colspan="2">
                <p class="uk-article-lead" style="font-size: 17px;">
                    Друзья! Голосуйте в новом чарте за Плаксы! <br>
                    ЧАРТ 2014, неделя №10. ЗАКРЫТИЕ 23 МАРТА В 12:00 ПО МОСКВЕ!
                    <br>
                    <a href="http://vk.com/topic-10713353_29880736">http://vk.com/topic-10713353_29880736</a>
                    <br>
                    Плаксы - Стой +5!!!
<!-- Нужно обязательно голосовать за 5 песен из чарта чтоб голос засчитался! Голосовать расставляя баллы +5, +4, +3, +2, +1 -->
<!-- Копировать голоса нельзя, повторять нельзя. -->
                </p>
            </td>
        </tr>
    </tbody>
</table>
<hr>

<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td>
                <a class="uk-button uk-button-primary" href="#">Подробнее</a>
            </td>
            <td style="text-align: right;">
                <a href="#" target="_blank">
                <div style="position: relative;right: 0px;float: right;zoom: 0.7;" class="nradio_recommend"></div>
                </a>
            </td>
            <td style="text-align: right; width: 140px;">20 августа 2014г.</td>
        </tr>
    </tbody>
</table>



        <?php echo $after_widget; ?>
<?php
}

function events_main_widget_control() {
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

function events_main_widget_init() {
    register_sidebar_widget('Events_main', 'events_main_widget');
    register_widget_control('Events_main', 'events_main_widget_control', 300, 90);
}

add_action('init', 'events_main_widget_init');
?>