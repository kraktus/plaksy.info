<?php
/*
Plugin Name: Social Main
Description: Отображение информации по социальным сетям в на главной
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

function social_main_widget($args) {
    extract($args, EXTR_SKIP);
    $options = get_option('social_main_widget');
    $title = empty($options['title']) ? 'Social Main' : $options['title'];
?>
        <!-- <?php echo $before_widget; ?> -->
        <!-- <?php echo $before_title . $title . $after_title; ?> -->





<div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.uk-panel-box'}">






<!-- Social -->
<div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-1-1 four_wigets_frontpage">
<div class="uk-panel uk-panel-box four_wigets_frontpage_padding" data-uk-scrollspy="{cls:'uk-animation-scale-up'}">
<!-- <div class="tm-panel-clear-image">
    <img src="wp-content/uploads/yootheme/warp_icon.svg" class="uk-align-center uk-margin-bottom-remove" alt="Warp" />
</div> -->
<div>
   <h2 style="color: #5B7FA6">Social</h2>
   <hr>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?108"></script>

<!-- VK Widget -->

<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "186", height: "265", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 876218);
</script>

</div>
</div>
</div>



<!-- Последний релиз -->
<div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-1-1 four_wigets_frontpage">
<div class="uk-panel uk-panel-box four_wigets_frontpage_padding" data-uk-scrollspy="{cls:'uk-animation-scale-up'}">

<!-- <div class="tm-panel-clear-image">
    <img src="wp-content/uploads/yootheme/zoo_icon.svg" class="uk-align-center uk-margin-bottom-remove" alt="Zoo" />
</div> -->
<div>
   <h2>Альбом</h2>
   <hr>
<!--   <a class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="">
            <div class="uk-overlay" style="border: 3px solid #7d2422;">
                <img src="/wp-content/uploads/music/album.jpg"  width="186" height="180" alt="Load Style" >
                <div class="uk-overlay-area"></div>
            </div>
            <div class="uk-thumbnail-caption" style="background: #7d2422; color:white;">Живые Live (2014)</div>
        </a>

-->

        <a class="uk-thumbnail uk-overlay-toggle" data-lightbox="transitionIn:elastic; transitionOut:elastic; titlePosition:over;padding:0" href="#">
            <div style="border: 3px solid #7d2422;">
                <div class="uk-overlay">
                   <img src="/wp-content/uploads/music/album.jpg" alt="Load Style" title="Load Style" height="180" width="186" >
                      <div class="uk-overlay-area" ></div>
                </div>
                <div class="uk-thumbnail-caption" style="color:white;background: #7C2322 ">Живые Live (2014)</div>
            </div>
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



</div>
</div>
</div>








<!-- Видео -->
<div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-1-1 four_wigets_frontpage">
<div class="uk-panel uk-panel-box four_wigets_frontpage_padding" data-uk-scrollspy="{cls:'uk-animation-scale-up'}">
<!-- <div class="tm-panel-clear-image">
    <img src="wp-content/uploads/yootheme/widgetkit_icon.svg" class="uk-align-center uk-margin-bottom-remove" alt="Widgetkit" />
</div> -->
<div>
   <h2>Видео</h2>
   <hr>


        <a class="uk-thumbnail uk-overlay-toggle" data-lightbox="group:photos; transitionIn:elastic; transitionOut:elastic; titlePosition:over;padding:0" href="https://www.youtube.com/watch?v=AYV_HEcCVTo">
                                <div style="border: 3px solid #7d2422;">
                                    <div class="uk-overlay">
                                        <img class="-single" src="/wp-content/uploads/video/main_video.jpg" alt="Load Style" title="Load Style" height="140" width="200" >
<!--                                        <div class="uk-overlay-area" ></div>-->
                                    </div>
                                    <div class="uk-thumbnail-caption" style="color:white;background: #7C2322 ">Плаксы - Плаксы-Style!</div>
                                </div>
    </a>


   <p style="width: 186px;">Клип на одну из самых узнаваемых песен.<br> Визитная карточка группы.</p>
 <!--   <p style="color: #7d2422;"><i class="uk-icon-facetime-video"></i>&nbsp; <span class="uk-badge">Плаксы - Плаксы-Style!</span></p>
   <a style="display: block;" data-lightbox="transitionIn:elastic;transitionOut:elastic; group:mygroup1;titlePosition:over;padding:0" href="https://www.youtube.com/watch?v=AYV_HEcCVTo" title="">
    <img alt="Плаксы Стайл!" height="140" width="200" src="/wp-content/uploads/video/main_video.jpg">
</a> -->
</div>
</div>
</div>


<!-- Radio -->
<div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-1-1 four_wigets_frontpage">
<div class="uk-panel uk-panel-box four_wigets_frontpage_padding" data-uk-scrollspy="{cls:'uk-animation-scale-up'}">
<!-- <div class="tm-panel-clear-image">
    <img src="wp-content/uploads/yootheme/uikit_icon.svg" class="uk-align-center uk-margin-bottom-remove" alt="UIkit" />
</div> -->
<div class="uk-panel-badge uk-badge uk-badge-danger" ><i class="uk-icon-headphones"></i></div>
<div >
   <h2>Радио</h2>
   <hr>
   <p>Cлушайте нас в эфире<br><strong>Нашего Радио</strong> и <strong><br>Москва FM</strong>!
   </p>
   <hr>
   <p style="color: #7d2422;"><i class="uk-icon-music"></i>&nbsp; <span class="uk-badge">Плаксы - Я все видел</span></p>
   <audio src="/wp-content/uploads/music/ya_vse_delal.mp3" type="audio/mp3" style="width: 185px; background: #7d2422;"></audio>
   <hr>
   <p style="color: #7d2422;"><i class="uk-icon-music"></i>&nbsp; <span class="uk-badge">Плаксы - НовогодSKAя</span></p>
   <audio src="/wp-content/uploads/music/ng.mp3" type="audio/mp3" style="width: 185px; background: #7d2422;"></audio>
   <!-- <a href="http://www.getuikit.com" class="uk-button uk-button-primary uk-margin-top">read more</a> -->
</div>
</div>
</div>
<!-- Конец -->



</div>








        <?php echo $after_widget; ?>
<?php
}

function social_main_widget_control() {
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

function social_main_widget_init() {
    register_sidebar_widget('social_main', 'social_main_widget');
    register_widget_control('social_main', 'social_main_widget_control', 300, 90);
}

add_action('init', 'social_main_widget_init');
?>