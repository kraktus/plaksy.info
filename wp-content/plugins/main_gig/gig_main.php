<?php
/*
Plugin Name: Gig Main
Description: Публикация постов типа concerts на главной
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function gig_main_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('gig_main_widget');
    $title = empty($options['title']) ? 'Gig Main' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->


        <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
        <tbody>
            <tr>
                <td><h2>Ближайший концерт</h2></td>
                <td>&nbsp;</td>

                    <td style="text-align: right; vertical-align: top;" title="По данным встречи в контакте" data-uk-tooltip="">
                                    <span class="uk-badge"><dfn style="border-bottom: 0px dotted; font-style: italic;"  title="">Участники</dfn></span>&nbsp; <span class="uk-badge uk-badge-notification"><dfn style="border-bottom: 0px dotted;" title="По данным встречи в контакте">57</dfn></span>

                    </td>

            </tr>
        </tbody>
        </table>

        <hr style="margin-top: -3px;">

<table border="0" cellpadding="1" cellspacing="1" style="width: 100%; margin-top: -30px;">
    <tbody>
        <tr>
            <td>
                <p class="uk-article-lead" style="font-size: 20px;">Г. Москва</p>
            </td>
            <td style="text-align: right;">
                <p class="uk-article-lead" style="font-size: 20px;">20 Мая 2014г.</p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="uk-article-lead" style="font-size: 20px;">Клуб ТЕАТРъ</p>
            </td>
            <td style="text-align: right;">
                <p class="uk-article-lead" style="font-size: 20px;">20:10</p>
            </td>
        </tr>
        <tr>
        <br>
        </tr>
        <tr>
            <td><a class="uk-button uk-button-primary " href="#">Подробнее</a>
            <div class="none-large"><br></div>
             <a class="uk-button vk" href="#" target="_blank">Встреча в контакте</a> </td>
            <td style="text-align: right;">
            </td>
        </tr>
    </tbody>
</table>
<hr>

<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
        <tbody>
            <tr>
                <td><h4>Прошедший концерт</h4></td>
                <td>
                   <blockquote>
                        <p>Клуб FM Club</p>
                        <small>13 Февраля</small>
                    </blockquote>
                </td>

                    <td style="text-align: right; width: 85px;">
                        <a class="uk-button uk-button-primary" style="margin-bottom: 14px;" href="#">Отчет</a>
                    </td>

            </tr>
        </tbody>
        </table>




        <?php echo $after_widget; ?>
<?php
}

function gig_main_widget_control() {
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

function gig_main_widget_init() {
    register_sidebar_widget('gig_main', 'gig_main_widget');
    register_widget_control('gig_main', 'gig_main_widget_control', 300, 90);
}

add_action('init', 'gig_main_widget_init');
?>