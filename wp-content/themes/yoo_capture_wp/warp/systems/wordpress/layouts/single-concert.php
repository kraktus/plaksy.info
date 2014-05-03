 <?
    // load css
    $this['asset']->addFile('css', 'css:cloud-zoom.css');
 ?>

 <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <article class="uk-article" data-permalink="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php
            $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
            $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
            ?>
            <?php the_post_thumbnail(array($width, $height), array('class' => '')); ?>
        <?php endif; ?>


       <? /*Получаем данные о посте*/?>
   <? $post_info = get_post_custom();
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



        <!-- <div class="nashe_radio_stamp"></div> -->
        <h1 class="uk-article-title"><?php the_title(); ?></h1>
        <br>
        <br>

<!--ВЫВОД ШАБЛОНА-->
<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td rowspan="2" style=" text-align: left; vertical-align: top;">
                <div class="uk-thumbnail uk-overlay-toggle" href="&lt;?php the_permalink() ?&gt;" style="padding: 0px;">


                <div id="wrap" style="top:0px;position:relative;">
<!--                    <a href="http://cs424828.vk.me/v424828460/969d/KSH_KJSi53o.jpg" class="cloud-zoom" rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" style="position: relative; display: block;">-->
                        <img src="<?=cut_link($post_info["wpcf-afisha"][0]);?>" alt="Афиша концерта" style="display: block; max-width:357px; border:3px solid #7d2422">
<!--                    </a>-->
<!--                 <div class="mousetrap" style="background-image: url(http://ruseller.com/adds/adds2572/example/); z-index: 999; position: absolute; width: 240px; height: 320px; left: 0px; top: 0px; cursor: move;"></div></div>
 -->


                </div>
            </td>
            <td rowspan="2" style="text-align: left; vertical-align: top; width: 260px;">&nbsp;</td>
            <td colspan="2" style="text-align: left; vertical-align: top; width: 300px;">
                <?=$post_info["wpcf-full_text"][0];?>
                <hr style="vertical-align: bottom;">
            </td>
        </tr>
        <tr>
            <td style="text-align: left; vertical-align: bottom; width: 300px; height: 150px;">
                <a href="http://www.nashe.ru/" target="_blank" <? if(!$post_info["wpcf-nradio"][0]) echo 'style="display:none;"';?>>
                <img src="/wp-content/uploads/nradio_recommend.png" style="width:100px;" alt="Наше радио рекоменудет" >
                </a>
            </td>
            <td style="text-align: right; vertical-align: bottom; width: 300px;">

                    <img src="http://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php the_permalink(); ?>&color=555555&bgcolor=F7F7F7" width="100px" alt="QR:  <?php the_title(); ?>"/>

            </td>
        </tr>
    </tbody>
</table>


<br>
<br>


<section class="tm-main-top uk-grid" data-uk-grid-match="{target:'&gt; div &gt; .uk-panel'}" data-uk-grid-margin="">
    <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
            <!-- <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div> -->
            <h3 class="uk-panel-title"><i class="uk-icon-calendar"></i>&nbsp;&nbsp;&nbsp;Когда?</h3>
            <hr>
            <strong>
            <?=rdate( 'd F Y', $post_info["wpcf-date"][0], 1);?>
            <br>
            Начало в <?=date("H:i", $post_info["wpcf-date"][0]);?>
            </strong>
        </div>
    </div>

    <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
            <!-- <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div> -->
            <h3 class="uk-panel-title"><i class="uk-icon-map-marker"></i>&nbsp;&nbsp;&nbsp;Где?</h3>
            <hr>
            <strong>
            <?=$post_info["wpcf-city"][0];?>
            <br>
            <?=$post_info["wpcf-club"][0];?>
            </strong>
        </div>
    </div>
</section>

<section class="tm-main-top uk-grid" data-uk-grid-match="{target:'&gt; div &gt; .uk-panel'}" data-uk-grid-margin="">
    <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
            <!-- <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div> -->
            <h3 class="uk-panel-title"><i class="uk-icon-road"></i>&nbsp;&nbsp;&nbsp;Как добраться?</h3>
            <hr>
            <strong>
            <?
            /*Если концерт в Мск - указываем метро*/
            if($post_info["wpcf-city"][0] = 'г. Москва')
                echo $post_info["wpcf-metro"][0].'<br>';

            ?>
            <?=$post_info["wpcf-adress"][0];?>
            </strong>
            <br><br>
            <a class="uk-button vk" href="<?=$post_info["wpcf-vk"][0];?>" target="_blank">Встреча в контакте</a>
        </div>
    </div>
    <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
            <!-- <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div> -->
            <h3 class="uk-panel-title"><i class="uk-icon-info"></i>&nbsp;&nbsp;&nbsp;Дополнительно</h3>
            <hr>
            <strong>
            <?if(!$post_info["wpcf-isprice"][0])//Беплатно или за бабло
                echo 'Вход бесплатный';
            else
                echo 'Цена билета: '.$post_info["wpcf-price"][0].' РУБ.';
            ?>
            </strong>
            <br><br><br>
            <?if($post_info["wpcf-media"][0] == 2)://Фотоотчет если есть?>
                <a class="uk-button uk-button-primary " href="<?=cut_link($post_info["wpcf-url_media"][0]);?>" target="_blank">Фото/Видео с концерта</a>
            <? else: ?>
                <button class="uk-button" type="submit" disabled="">Готовится фото-отчет</button>
            <?endif;?>
        </div>
    </div>
</section>






<!--        <p class="uk-article-meta">-->
<!--            --><?php
//                $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
//                printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
//            ?>
<!--        </p>-->

        <?php the_content(''); ?>

        <?php the_tags('<p>'.__('Tags: ', 'warp'), ', ', '</p>'); ?>

        <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

        <?php if (pings_open()) : ?>
        <p><?php printf(__('<a href="%s">Trackback</a> from your site.', 'warp'), get_trackback_url()); ?></p>
        <?php endif; ?>





        <!-- <?php if (get_the_author_meta('description')) : ?>
        <div class="uk-panel uk-panel-box">

            <?php echo get_avatar(get_the_author_meta('user_email')); ?>

            <h2 class="uk-h3 uk-margin-top-remove"><?php the_author(); ?></h2>

            <div class="uk-margin"><?php the_author_meta('description'); ?></div>

        </div>
        <?php endif; ?> -->

        <?php comments_template(); ?>

    </article>

    <?php endwhile; ?>
 <?php endif; ?>