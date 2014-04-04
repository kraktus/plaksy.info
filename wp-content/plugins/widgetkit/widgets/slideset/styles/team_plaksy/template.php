<?php
/**
* @package   Widgetkit Bonus Styles
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/


/*CODE*/


$post = get_posts(
                array(
                        'numberposts'     => -1, //Получаем все записи
                        'offset'          => 0,
                        'category'        => '',
                        'orderby'         => 'post_date',
                        'order'           => 'ASC',
                        'include'         => '',
                        'exclude'         => '',
                        'meta_key'        => '',
                        'meta_value'      => '',
                        'post_type'       => 'artist',
                        'post_mime_type'  => '',
                        'post_parent'     => '',
                        'post_status'     => 'publish'
                ));

$all_artist_number = count($post);


for ($i = 0; $i < $all_artist_number; $i++)
{
     $temp = get_post_meta($post[$i]->ID);

     $artist[$i]['ID']         =  $post[$i]->ID;
     $artist[$i]['NAME']       =  $temp['wpcf-artist_name'];
     $artist[$i]['INSTRUMENT'] =  $temp['wpcf-artist_instrument'];
     $artist[$i]['VK_LINK']    =  $temp['wpcf-artist_vk_link'];
     $artist[$i]['PHOTO']      =  $temp['wpcf-artist_photo'];
}






/*TEMPLATE*/

	$widget_id = $widget->id.'-'.uniqid();
	$settings  = $widget->settings;
	$sets      = array();
	$nav       = array();

	if (is_numeric($settings['items_per_set'])) {

		$sets = array_chunk($widget->items, $settings['items_per_set']);

	} else {

		foreach ($widget->items as $key => $item) {

			if (!isset($sets[$item['set']])) {
				$sets[$item['set']] = array();
			}

			$sets[$item['set']][] = $item;
		}

	}

	foreach (array_keys($sets) as $s) {
		$nav[] = ($settings['navigation'] == 2) ? '<li><span>'.$s.'</span></li>' : '<li><span></span></li>';
	}

	$i = 0;
?>


<?
// echo "<pre>";
// var_dump($artist);
// echo "</pre>";

?>


<div id="slideset-<?php echo $widget_id;?>" class="wk-slideset wk-slideset-frequency" data-widgetkit="slideset" data-options='<?php echo json_encode($settings); ?>'>
	<div>
		<div class="sets">


                        <?php for($i = 0; $i < $all_artist_number; $i++) : ?>
                                <?php if( $i%$settings['items_per_set']  == 0): //если кратно кол-ву чуваков за раз  ?>
                                <ul class="set">
                                <?php endif; ?>

                                        <li>
                                                <article class="wk-content">
                                                <img src="<?=(string)$artist[$i]['PHOTO'][0]?>" alt="<?=(string)$artist[$i]['NAME'][0]?>" height="200" width="200">
                                                <div class="overlay team_plaksy">
                                                <div>
                                                        <div class="uk-height-1-1 uk-vertical-align">
                                                                <div class="uk-vertical-align-middle">
                                                                        <p></p>
                                                                        <p class="uk-margin-bottom-remove"><?=(string)$artist[$i]['INSTRUMENT'][0]?></p>
                                                                        <hr>
                                                                        <p class="uk-h5"><a href="<?=$artist[$i]['VK_LINK'][0]?>" target="_blank">Найти ВКонтакте</a></p>
                                                                </div>
                                                        </div>
                                                </div>
                                                </div>


                                                </article>

                                                <strong class="title"><?=(string)$artist[$i]['NAME'][0]?></strong>


                                        </li>

                                <?php if( $i%$settings['items_per_set'] == 0 && $i%$settings['items_per_set'] != 0): //если кратно кол-ву чуваков за раз?>
                                </ul>
                                <?php endif; ?>
                        <? endfor; ?>



		</div>
		<?php if ($settings['buttons']): ?><div class="next"><a class="uk-icon-button uk-icon-chevron-right uk-float-left"></a></div><div class="prev"><a class="uk-icon-button uk-icon-chevron-left uk-float-right"></a></div><?php endif; ?>
	</div>
	<?php if ($settings['navigation'] && count($nav)) : ?>
	<ul class="nav <?php echo ($settings['navigation'] == 1) ? 'icon' : 'text'; ?>"><?php echo implode('', $nav); ?></ul>
	<?php endif; ?>
</div>