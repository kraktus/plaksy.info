<article id="item-<?php the_ID(); ?>" class="uk-article" data-permalink="<?php the_permalink(); ?>">

    <?php if (has_post_thumbnail()) : ?>
        <?php
        $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
        $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
        ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></a>
    <?php endif; ?>

   <?
    /*Получаем данные о посте*/
    $post_info = get_post_custom();
/*     echo "<pre>";
     var_dump($post_info);
     echo "</pre>";*/
    ?>
    <!--Определяем город-->
    <?if($post_info["wpcf-city"][0] == 1)//Если город выбран правильно, то это Мск
        $post_info["wpcf-city"][0] = 'г. Москва';
    else
        $post_info["wpcf-city"][0] =  $post_info["wpcf-another_city"][0];
    ?>


<!--ВЫВОД ШАБЛОНА-->

    <!-- <h1 class="uk-article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1> -->

<br>
<table border="0" cellpadding="1" cellspacing="1" style="width: 100%; height: 200px;">
    <tbody>
        <tr>
            <td rowspan="3" style="vertical-align: top;">
                <a class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="<?php the_permalink() ?>">
                    <div class="uk-overlay" style="border: 3px solid #7d2422;">
                        <img src="<?=cut_link($post_info["wpcf-afisha"][0]);?>" style="max-height:473px;" alt="Load Style" >
                        <div class="uk-overlay-area"></div>
                    </div>
                </a>
            </td>
            <td rowspan="3">&nbsp;</td>
            <td style="text-align: left; vertical-align: top; width: 330px;">
                <h2>
                <div style="text-align: initial;
                width: 100%;"><?php the_title();?>
                </div>
                </h2>
                <hr>
            </td>
        </tr>
        <tr>
            <td style="text-align: right; vertical-align: bottom;">
                <a href="http://www.nashe.ru/" target="_blank" <? if(!$post_info["wpcf-nradio"][0]) echo 'style="display:none;"';?>>
                <div style="margin-left: 234px;" class="nradio_recommend"></div>
                </a>
                <br>
                <br>
                <br>
                <h5 style="text-align: right;" class="uk-article-lead"><?=rdate( 'd F Y', $post_info["wpcf-date"][0], 1);?></h5>
                <h5 style="text-align: right;" class="uk-article-lead">&nbsp; <?=date("H:i", $post_info["wpcf-date"][0]);?></h5>
                <h5 style="text-align: right;" class="uk-article-lead"><?=$post_info["wpcf-city"][0];?></h5>
                <h5 style="text-align: right;" class="uk-article-lead"><?=$post_info["wpcf-club"][0];?></h5>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: right; vertical-align: bottom; height: 42px;">
                    <a class="uk-button uk-button-primary " href="<?php the_permalink() ?>">Подробнее</a>
                    &nbsp;
                    <a class="uk-button vk" href="<?=$post_info["wpcf-vk"][0];?>" target="_blank">Встреча в контакте</a>
            </td>
        </tr>
    </tbody>
</table>



<!--  <p class="uk-article-meta">-->
<!--        --><?php
//            $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
//            printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
//        ?>
<!--    </p>-->

    <?php the_content(''); ?>

  <!--   <ul class="uk-subnav uk-subnav-line">
        <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('Continue Reading', 'warp'); ?></a></li>
        <?php if(comments_open()) : ?>
            <li><?php comments_popup_link(__('No Comments', 'warp'), __('1 Comment', 'warp'), __('% Comments', 'warp'), "", ""); ?></li>
        <?php endif; ?>
    </ul>
 -->
    <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

</article>
<hr>

