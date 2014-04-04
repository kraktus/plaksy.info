<?php
/**
* @package   Widgetkit Bonus Styles
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/


/*CODE*/


$artist = get_posts(array(
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

$all_artist_number = count($artist);

echo "<pre>";
var_dump($artist);
echo "</pre>";






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





<div id="slideset-<?php echo $widget_id;?>" class="wk-slideset wk-slideset-frequency" data-widgetkit="slideset" data-options='<?php echo json_encode($settings); ?>'>
	<div>
		<div class="sets">
			<?php foreach ($sets as $set => $items) : ?>
				<ul class="set">
					<?php foreach ($items as $item) : ?>
					<li>
						<article class="wk-content"><?php echo $item['content']; ?>

						<div class="overlay team_plaksy">
						<div>
							<div class="uk-height-1-1 uk-vertical-align">
								<div class="uk-vertical-align-middle">
									<p></p>
									<p class="uk-margin-bottom-remove">Гитара/Вокал</p>
									<hr>
									<p class="uk-h5"><a href="http://vk.com/id19414359">Найти ВКонтакте</a></p>
								</div>
							</div>
						</div>
						</div>


						</article>
						<?php if($settings['title']): ?>
						<strong class="title"><?php echo $item['title']; ?></strong>
						<?php endif; ?>
						<?php if($item['subcontent']): ?>
						<div class="sub-content"><?php echo $item['subcontent']; ?></div>
						<?php endif; ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php $i=$i+1;?>
			<?php endforeach; ?>
		</div>
		<?php if ($settings['buttons']): ?><div class="next"><a class="uk-icon-button uk-icon-chevron-right uk-float-left"></a></div><div class="prev"><a class="uk-icon-button uk-icon-chevron-left uk-float-right"></a></div><?php endif; ?>
	</div>
	<?php if ($settings['navigation'] && count($nav)) : ?>
	<ul class="nav <?php echo ($settings['navigation'] == 1) ? 'icon' : 'text'; ?>"><?php echo implode('', $nav); ?></ul>
	<?php endif; ?>
</div>