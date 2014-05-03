<?php
/*
Plugin Name: Footer Contact Form
Description: Контактная форма в футере
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function footer_contact_form_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('footer_contact_form_widget');
    $title = empty($options['title']) ? 'Footer Contact Form' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->



<h3>Связаться с нами</h3>

  <form class="uk-form uk-width-1-1">

    <div class="uk-grid" data-uk-grid-margin>
      <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-form-controls">
          <input type="text" placeholder="Ваше имя" class="uk-width-1-1">
        </div>
      </div>
      <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-form-controls">
          <input type="text" placeholder="Ваш e-mail адрес" class="uk-width-1-1">
        </div>
      </div>
      <!--<div class="uk-width-1-1">
        <input type="text" placeholder="Тема письма" class="uk-width-1-1">
      </div>-->
      <div class="uk-width-1-1">
        <textarea id="form-h-t" class="uk-width-1-1" cols="30" rows="6" placeholder="Текст Вашего письма"></textarea>
      </div>
      <div class="uk-width-1-1">
        <a class="uk-button uk-button-primary" href="#">Отправить</a>
      </div>
    </div>

  </form>




        <?php echo $after_widget; ?>
<?php
}

function footer_contact_form_widget_control() {
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

function footer_contact_form_widget_init() {
    register_sidebar_widget('footer_contact_form', 'footer_contact_form_widget');
    register_widget_control('footer_contact_form', 'footer_contact_form_widget_control', 300, 90);
}

add_action('init', 'footer_contact_form_widget_init');
?>