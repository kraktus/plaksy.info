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
        <!-- <div class="nashe_radio_stamp"></div> -->
        <h1 class="uk-article-title"><?php the_title(); ?></h1>
        <br>
        <br>


<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td rowspan="2" style=" text-align: left; vertical-align: top;">
                <div class="uk-thumbnail uk-overlay-toggle" href="&lt;?php the_permalink() ?&gt;" style="padding: 0px;">


                   <!--  <div style="border: 3px solid #7d2422;">
                    <img alt="Афиша" src="http://cs424828.vk.me/v424828460/969d/KSH_KJSi53o.jpg" style="max-width:357px;">
                    </div> -->

                <div id="wrap" style="top:0px;z-index:9999;position:relative;">
                    <a href="http://cs424828.vk.me/v424828460/969d/KSH_KJSi53o.jpg" class="cloud-zoom" rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" style="position: relative; display: block;">
                        <img src="http://cs424828.vk.me/v424828460/969d/KSH_KJSi53o.jpg" title="Текст заголовка" alt="" style="display: block; max-width:357px; border:3px solid #7d2422">
                    </a>
<!--                 <div class="mousetrap" style="background-image: url(http://ruseller.com/adds/adds2572/example/); z-index: 999; position: absolute; width: 240px; height: 320px; left: 0px; top: 0px; cursor: move;"></div></div>
 -->


                </div>
            </td>
            <td rowspan="2" style="text-align: left; vertical-align: top; width: 260px;">&nbsp;</td>
            <td colspan="2" style="text-align: left; vertical-align: top; width: 300px;">
                Открытие фестивального сезона 2014!<br><br>
                Незабываемый полет на Рок-фестивале "ПОЕХАЛИ!"<br><br>
                Старт в 18:00 12 апреля 2014 года с космодрома большого зала клуба Glastonberry Pub.<br><br>
                Экипаж: Плаксы, ZNAKI, Дайте Два, СASUAL, GRANI, Небо №7<br><br>
                Путешествие к звездам и космическое настроение гарантировано!<br><br>
                <hr style="vertical-align: bottom;">
            </td>
        </tr>
        <tr>
            <td style="text-align: left; vertical-align: bottom; width: 300px; height: 150px;">
                <img src="http://plaksy.local/wp-content/uploads/nradio_recommend.png" style="width:100px;" alt="Load Style" >
            </td>
            <td style="text-align: right; vertical-align: bottom; width: 300px;">
                <img src="http://www.barcode1.in/wp-content/uploads/QRcodeINDIA.gif" style="width:100px;" alt="Load Style" >
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
            29 ИЮНЯ 2013
            <br>
            Начало в 18:00
            </strong>
        </div>
    </div>

    <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
            <!-- <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div> -->
            <h3 class="uk-panel-title"><i class="uk-icon-map-marker"></i>&nbsp;&nbsp;&nbsp;Где?</h3>
            <hr>
            <strong>Г. МОСКВА
            <br>
            Клуб Grand Furgon Street
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
            М. ЧИСТЫЕ ПРУДЫ
            <br>
            ПОТАПОВСКИЙ ПЕР., 5
            </strong>
            <br><br>
            <a class="uk-button vk" href="#" target="_blank">Встреча в контакте</a>
        </div>
    </div>
    <div class="uk-width-1-1 uk-width-medium-1-2">
        <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
            <!-- <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div> -->
            <h3 class="uk-panel-title"><i class="uk-icon-info"></i>&nbsp;&nbsp;&nbsp;Дополнительно</h3>
            <hr>
            <strong>
            ЦЕНА БИЛЕТА: 200 РУБ.
            </strong>
            <br><br><br>
             <a class="uk-button uk-button-primary " href="<?php the_permalink() ?>">Фото/Видео с концерта</a>
        </div>
    </div>
</section>







        <p class="uk-article-meta">
            <?php
                $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
                printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
            ?>
        </p>

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