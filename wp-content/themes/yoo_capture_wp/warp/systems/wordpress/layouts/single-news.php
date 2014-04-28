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

        <?
        /*Получаем данные о посте*/
        $post_info = get_post_custom();
        //     echo "<pre>";
        //     var_dump($post_info);
        //     echo "</pre>";
        ?>


            <div class="uk-overlay" style="border: 3px solid #7d2422;">
            <img width="900" src="<?=$post_info["wpcf-image"][0];?>" class=" wp-post-image" alt="Изображение новости" >
<!--        <div class="uk-overlay-area"></div>-->
            </div>



<h1 class="uk-article-title"><?php the_title(); ?></h1>

   <br><br>
        <?=$post_info["wpcf-news-full"][0];?>
    <br><br>
    <div style="position: relative; float:right; margin-top: 10px;">20 августа 2014г</div>
      <a href="http://www.nashe.ru/" target="_blank" <? if(!$post_info["wpcf-nradio"][0]) echo 'style="display:none;"';?>>
    <div style="position: relative;right: 50px;float: right;zoom: 0.7;" class="nradio_recommend"></div>
    </a>
        <p class="uk-article-meta">
            <?php
                $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
                // printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
            ?>
        </p>

        <?php the_content(''); ?>

        <?php the_tags('<p>'.__('Tags: ', 'warp'), ', ', '</p>'); ?>

        <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

        <?php if (pings_open()) : ?>
        <p><?php printf(__('<a href="%s">Trackback</a> from your site.', 'warp'), get_trackback_url()); ?></p>
        <?php endif; ?>

        <?php if (get_the_author_meta('description')) : ?>
    <!--     <div class="uk-panel uk-panel-box">

            <?php echo get_avatar(get_the_author_meta('user_email')); ?>

            <h2 class="uk-h3 uk-margin-top-remove"><?php the_author(); ?></h2>

            <div class="uk-margin"><?php the_author_meta('description'); ?></div>

        </div> -->
        <?php endif; ?>

        <?php comments_template(); ?>

    </article>

    <?php endwhile; ?>
 <?php endif; ?>