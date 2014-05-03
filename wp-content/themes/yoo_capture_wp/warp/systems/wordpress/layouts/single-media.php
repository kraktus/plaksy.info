<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <article class="uk-article" data-permalink="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php
            $width  = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
            $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
            ?>
            <?php the_post_thumbnail(array($width, $height), array('class' => '')); ?>
        <?php endif; ?>

            <? /*Получаем данные о посте*/ ?>
            <? $post_info = get_post_custom();
        /*    echo "<pre>";
            var_dump($post_info);
            echo "</pre>";*/
            ?>

            <?
            /*костыль - добавляем вручную в готовый iframe свойсвта */
            function iframe_border($a){
                $style = 'style="border: 3px solid #7d2422; margin: 0 auto;"';
                $iframe = str_replace('type="text/html"', 'type="text/html"'.$style.' ', $a);
                return $iframe;
            }
            ?>

<!--ВЫВОД ШАБЛОНА-->
            <h1 class="uk-article-title"><?php the_title(); ?></h1>
        <a href="http://www.nashe.ru/" target="_blank" <? if (!$post_info["wpcf-nradio"][0]) {
            echo 'style="display:none;"';
        } ?>>
                    <div class="nradio_recommend" style="position: relative;float: right;margin-top: -80px;"></div>
        </a>
<br>
<br>
            <?= $post_info["wpcf-full_text"][0]; ?>
            <br>
<br>
<br>


<div id="slideshow-531-5344959a10abe" class="wk-slideshow wk-slideshow-tabs" data-widgetkit="slideshow" data-options="{&quot;style&quot;:&quot;tabs&quot;,&quot;autoplay&quot;:0,&quot;interval&quot;:5000,&quot;width&quot;:&quot;auto&quot;,&quot;height&quot;:&quot;auto&quot;,&quot;duration&quot;:500,&quot;index&quot;:0,&quot;order&quot;:&quot;default&quot;,&quot;navigation&quot;:&quot;left&quot;,&quot;animated&quot;:&quot;scroll&quot;}" style="visibility: visible; position: relative; width: 839px;">

    <!--Если есть и видео, и аудио, то показываем навигацию-->

    <?php if (($post_info["wpcf-isset_photo"][0] == 1) && ($post_info["wpcf-isset_video"][0] == 1)): ?>
        <div class="nav-container nav-left clearfix">
            <ul class="nav">
                <li class="active">
                    <span>Фото</span>
                </li>
                <li class="">
                    <span>Видео</span>
                </li>
            </ul>
        </div>
    <?php endif ?>

    <!--Основной контейнер-->
	<div class="slides-container">
        <ul class="slides" style="width: 100%; overflow: hidden; position: relative; height: 150px;">
            <!--Раздел фотографий-->
            <?php if ($post_info["wpcf-isset_photo"][0] == 1): ?>
                <li style="top: 0px; left: 0px; position: absolute; display: block; width: 837px; height: 150px; z-index: 2;">
                <article class="wk-content clearfix">
                    <br>
                    <? $i = 0; ?>
                    <? foreach ($post_info["wpcf-photos"] as $photo): ?>

                        <? if ($i % 2 == 0): ?>
                            <div class="uk-grid">
                        <? endif; ?>

                        <div class="uk-width-1-2">
                                <div class="uk-panel uk-panel-box" style="padding: 0px">

                                <a class="uk-thumbnail uk-overlay-toggle" data-lightbox="group:photos; transitionIn:elastic; transitionOut:elastic; titlePosition:over;padding:0" href="<?= cut_link($photo); ?>">
                                    <div style="border: 3px solid #7d2422;">
                                        <div class="uk-overlay">
                                            <img src="<?= cut_link($photo); ?>" alt="<?= $post_info['wpcf-photo_title'][$i]; ?>" title="<?= $post_info['wpcf-photo_title'][$i]; ?>" height="280" width="390">
                                            <div class="uk-overlay-area"></div>
                                        </div>
                                        <div class="uk-thumbnail-caption" style="color:white;background: #7C2322 "><?= $post_info['wpcf-photo_title'][$i]; ?></div>
                                    </div>
                                </a>

                                </div>
                            </div>
                        <? if ($i % 2 != 0): ?>
                            </div>
                        <? endif; ?>
                        <? $i++; ?>
                    <? endforeach; ?>

                </article>
            </li>
            <?php endif ?>

            <!--Раздел видео-->
            <?php if ($post_info["wpcf-isset_video"][0] == 1): ?>
                <?
                //js навешивает border на iframe
                $this['asset']->addFile('js', 'js:iframe_border.js');
                ?>
                <li style="top: 0px; left: 837px; position: absolute; display: none; width: 837px; height: 150px; z-index: 1;">
                <article class="wk-content clearfix">
                       <? $i = 0;?>
                       <? foreach ($post_info["wpcf-video"] as $iframe): ?>
                           <br>
                                <center><?=iframe_border($iframe);?></center>
                                <div class="uk-thumbnail-caption" style="background: #7C2322; color: white; width: 613px; margin: 0 auto; position: relative;top: -10px;"><?=$post_info['wpcf-video_title'][$i];?></div>
                           <br>
                           <? $i++;?>
                       <? endforeach; ?>

                </article>
            </li>
            <?php endif ?>
        </ul>
    </div>

</div>
<br>
Благодарим за предоставленные материалы<br> <a href="<?=$post_info['wpcf-event_site_url'][0]?>"><?=$post_info['wpcf-event_site_url'][0]?></a>
<!--        <p class="uk-article-meta">-->
<!--            --><?php
            //                $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
            //                printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
            //
            ?>
            <!--        </p>-->

            <?php the_content(''); ?>

            <!--        --><?php /*the_tags('<p>'.__('Tags: ', 'warp'), ', ', '</p>'); */ ?>

            <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ', '</p>'); ?>

            <?php if (pings_open()) : ?>
                <p><?php printf(__('<a href="%s">Trackback</a> from your site.', 'warp'), get_trackback_url()); ?></p>
            <?php endif; ?>

            <!--    <?php /*if (get_the_author_meta('description')) : */ ?>
        <div class="uk-panel uk-panel-box">

            <?php /*echo get_avatar(get_the_author_meta('user_email')); */ ?>

            <h2 class="uk-h3 uk-margin-top-remove"><?php /*the_author(); */ ?></h2>

            <div class="uk-margin"><?php /*the_author_meta('description'); */ ?></div>

        </div>
        --><?php /*endif; */ ?>

            <?php comments_template(); ?>

    </article>

    <?php endwhile; ?>
<?php endif; ?>