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


<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td style=" text-align: left; vertical-align: top;">

                <div class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="<?php the_permalink() ?>">
                    <div style="border: 3px solid #7d2422;">
                        <img src="http://cs424828.vk.me/v424828460/969d/KSH_KJSi53o.jpg" style="max-width:357px;" alt="Load Style" >

                    </div>
                </div>

            </td>
            <td style="text-align: right; vertical-align: top;">

              <!--   <section class="tm-main-top uk-grid" data-uk-grid-match="{target:'&gt; div &gt; .uk-panel'}" data-uk-grid-margin="">
                  <div class="uk-width-1-1 uk-width-medium-1-2">
                      <div class="uk-panel uk-panel-box widget_text" style="min-height: 161px;">
                          <div class="uk-panel-badge uk-badge uk-badge-success">HOT</div>
                          <h3 class="uk-panel-title"><i class="uk-icon-calendar"></i>&nbsp;&nbsp;&nbsp;Когда?</h3>
                          <hr>
                          <strong>
                          29 ИЮНЯ 2013
                          <br>
                          Начало в 18:00
                          </strong>
                      </div>
                  </div>
              </section> -->


                Клубный фестиваль при поддержке программы "Живые".<br>
                <br>
                Наше Радио:<br>
                http://vk.com/semenchayka <br>
                <br>
                Участники: <br>
                #Плаксы, <br>
                ZNAKI, <br>
                Дайте Два, <br>
                СASUAL, <br>
                GRANI, <br>
                Небо №7.....<br>
                <br>
                <br>
                Ба-а-а-альшой зал! <br>
                Поехали!

            </td>
        </tr>
    </tbody>
</table>
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