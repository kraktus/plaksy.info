<?php
/*
Plugin Name: Single Album
Description: Отображение информации об альбоме в сайд баре сбоку.
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function single_album_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('single_album_widget');
    $title = empty($options['title']) ? 'Single Album' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->





<!-- Последний релиз -->

   <h2>Альбом</h2>
   <hr>
   <a class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="">
            <div class="uk-overlay" style="border: 3px solid #7d2422;">
                <img src="/wp-content/uploads/music/album.jpg"  width="186" height="180" alt="Load Style" >
                <!-- <div class="uk-overlay-area" style="background: #7d2422"></div> -->
                <div class="uk-overlay-area"></div>
            </div>
            <div class="uk-thumbnail-caption" style="background: #7d2422; color:white;">Живые Live (2014)</div>
        </a>


<table border="0" cellpadding="1" cellspacing="1" style="width: 186px;">
  <tbody>
    <tr>
      <td>
           <a href="http://www.yootheme.com/zoo" class="uk-button uk-button-primary uk-margin-top">Скачать</a>
      </td>
      <td style="text-align: right;">
           <a style="float: right;" href="http://www.yootheme.com/zoo" class="uk-button uk-button-primary uk-margin-top">Детали </a>

      </td>
    </tr>
  </tbody>
</table>







        <?php echo $after_widget; ?>
<?php
}

function single_album_widget_control() {
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

function single_album_widget_init() {
    register_sidebar_widget('single_album', 'single_album_widget');
    register_widget_control('single_album', 'single_album_widget_control', 300, 90);
}

add_action('init', 'single_album_widget_init');
?>