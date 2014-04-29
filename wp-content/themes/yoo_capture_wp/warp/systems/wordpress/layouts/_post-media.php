<article id="item-<?php the_ID(); ?>" class="uk-article" data-permalink="<?php the_permalink(); ?>">

    <?php if (has_post_thumbnail()) : ?>
        <?php
        $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
        $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
        ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></a>
    <?php endif; ?>

    <? /*Получаем данные о посте*/?>
    <? $post_info = get_post_custom();
//         echo "<pre>";
//         var_dump($post_info);
//         echo "</pre>";
    ?>

    <h1 class="uk-article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>




   <br>
                <a href="http://www.nashe.ru/" target="_blank" <? if(!$post_info["wpcf-nradio"][0]) echo 'style="display:none;"';?>>
                    <div  class="nradio_recommend" style="position: relative;float: right;margin-top: -80px;"></div>
                </a>
   <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
	<tbody>
		<tr>
			<td rowspan="3" style="width: 250px;">
                 <a class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="<?php the_permalink() ?>">
                    <div class="uk-overlay" style="border: 3px solid #7d2422;">
                        <img src="<?=cut_link($post_info["wpcf-prev_img_1"][0]);?>" style="max-height:473px;" alt="Load Style" >
                        <div class="uk-overlay-area"></div>
                    </div>
                 </a>
			</td>
			<td style="width: 5%">&nbsp;</td>
			<td style="vertical-align: top; width: 169px;">
                <hr>
                <?=$post_info["wpcf-title_text"][0];?>
                   <br><hr>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td style="text-align: right; vertical-align: bottom;">
                <div style="zoom: 3; color: #7C2322">
                    <div class="uk-icon-camera" style="float: left; <?php if ($post_info["wpcf-isset_photo"][0] != 1)echo 'display:none';?>"></div>
                    <div class="uk-icon-play-circle" style="float: left; <?php if ($post_info["wpcf-isset_video"][0] != 1)echo 'display:none;';?> margin-left: 10px;"></div>
                </div>
                    <a class="uk-button uk-button-primary " href="<?php the_permalink() ?>">Подробнее</a>
			</td>
		</tr>
	</tbody>
</table>



<!--    <p class="uk-article-meta">
        <?php
/*            $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
            printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
        */?>
    </p>
-->
    <?php the_content(''); ?>

<!--    <ul class="uk-subnav uk-subnav-line">-->
<!--        <li><a href="--><?php //the_permalink() ?><!--" title="--><?php //the_title_attribute(); ?><!--">--><?php //_e('Continue Reading', 'warp'); ?><!--</a></li>-->
<!--        --><?php //if(comments_open()) : ?>
<!--            <li>--><?php //comments_popup_link(__('No Comments', 'warp'), __('1 Comment', 'warp'), __('% Comments', 'warp'), "", ""); ?><!--</li>-->
<!--        --><?php //endif; ?>
<!--    </ul>-->
    <br>
    <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

</article>
<hr>
<br>