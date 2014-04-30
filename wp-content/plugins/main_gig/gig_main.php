<?php
/*
Plugin Name: Gig Main
Description: Публикация постов типа concerts на главной
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function gig_main_widget($args)
{
    extract($args, EXTR_SKIP);
    $options = get_option('gig_main_widget');
    $title   = empty($options['title']) ? 'Gig Main' : $options['title'];

    /*Делаем выборку из всех.*/

    /*get_posts - добавляем цикл*/
    /*query_posts - изменяем базовый*/

    /*запрос на след концерт*/
    $posts = get_posts(
        array(
            'posts_per_page' => 1,
            'post_type'      => 'concert',
            'order'          => 'ASC',
            'meta_key'       => 'wpcf-date',
            'orderby'        => 'wpcf-date',
            'meta_query'     => array(
                array('key'     => 'wpcf-date',
                      'value'   => time(), //Время концерта больше текущей даты
                      'compare' => '>'
                )
            )
        )
    );
    /*перебрасываем результат в массив на вывод*/
    $next_concert                   = get_post_custom($posts[0]->ID);
    $next_concert['wpcf-site-link'] = get_permalink($posts[0]->ID);

    /*   Определяем город*/
    if ($next_concert["wpcf-city"][0] == 1) //Если город выбран правильно, то это Мск
    {
        $next_concert["wpcf-city"][0] = 'г. Москва';
    } else {
        $next_concert["wpcf-city"][0] = $next_concert["wpcf-another_city"][0];
    }

    /*запрос на пред концерт*/
    $posts = get_posts(
        array(
            'posts_per_page' => 1,
            'post_type'      => 'concert',
            'order'          => 'DESC',
            'meta_key'       => 'wpcf-date',
            'orderby'        => 'wpcf-date',
            'meta_query'     => array(
                array('key'     => 'wpcf-date',
                      'value'   => time(), //Время концерта больше текущей даты
                      'compare' => '<'
                )
            )
        )
    );

    //echo '<pre>';
    //var_dump($posts[0]);
    $prev_concert                   = get_post_custom($posts[0]->ID);
    //var_dump($prev_concert);
    //echo '</pre>';


    ?>

    <!-- <?php echo $before_widget; ?> -->
    <!-- <?php echo $before_title . $title . $after_title; ?> -->


    <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
        <tbody>
            <tr>
                <td><h2>Ближайший концерт</h2></td>
                <td>&nbsp;</td>

                    <td style="text-align: right; vertical-align: top;" title="По данным встречи в контакте" data-uk-tooltip="">
                                    <span class="uk-badge"><dfn style="border-bottom: 0px dotted; font-style: italic;" title="">Участники</dfn></span>&nbsp; <span class="uk-badge uk-badge-notification"><dfn style="border-bottom: 0px dotted;" title="По данным встречи в контакте">57</dfn></span>

                    </td>

            </tr>
        </tbody>
        </table>

    <hr style="margin-top: -3px;">

    <table border="0" cellpadding="1" cellspacing="1" style="width: 100%; margin-top: -30px;">
    <tbody>
        <tr>
            <td>
                <p class="uk-article-lead" style="font-size: 20px;"><?= $next_concert["wpcf-city"][0] ?></p>
            </td>
            <td style="text-align: right;">
                <p class="uk-article-lead" style="font-size: 20px;"><?= rdate('d F Y', $next_concert["wpcf-date"][0], 1); ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="uk-article-lead" style="font-size: 20px;"><?= $next_concert["wpcf-club"][0] ?></p>
            </td>
            <td style="text-align: right;">
                <p class="uk-article-lead" style="font-size: 20px;"><?= date("H:i", $next_concert["wpcf-date"][0]); ?></p>
            </td>
        </tr>
        <tr>
        <br>
        </tr>
        <tr>
            <td><a class="uk-button uk-button-primary " href="<?= $next_concert['wpcf-site-link'] ?>" target="_blank">Подробнее</a>
            <div class="none-large"><br></div>
             <a class="uk-button vk" href="<?= $next_concert["wpcf-vk"][0]; ?>" target="_blank">Встреча в контакте</a>

            </td>
            <td style="text-align: right;">
                <a href="http://www.nashe.ru/" target="_blank" <? if (!$next_concert["wpcf-nradio"][0]) {
                    echo 'style="display:none;"';
                } ?>>
                <div style="position: relative;float: right;zoom: 0.8;" class="nradio_recommend"></div>
                </a>
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
                        <p><?= $prev_concert["wpcf-club"][0] ?></p>
                        <small><?= rdate('d F', $prev_concert["wpcf-date"][0], 1); ?></small>
                    </blockquote>
                </td>
                <? if ($prev_concert["wpcf-media"][0] == 2): ?>
                    <td style="text-align: right; width: 85px;">
                        <a class="uk-button uk-button-primary" style="margin-bottom: 14px;" href="<?= $prev_concert["wpcf-url_media"][0] ?>" target="_blank">Отчет</a>
                    </td>
                <? endif; ?>
            </tr>
        </tbody>
        </table>




    <?php echo $after_widget; ?>
<?php
}

function gig_main_widget_control()
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

function gig_main_widget_init()
{
    register_sidebar_widget('gig_main', 'gig_main_widget');
    register_widget_control('gig_main', 'gig_main_widget_control', 300, 90);
}

add_action('init', 'gig_main_widget_init');
?>