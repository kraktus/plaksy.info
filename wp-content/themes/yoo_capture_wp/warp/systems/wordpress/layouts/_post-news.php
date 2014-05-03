<article id="item-<?php the_ID(); ?>" class="uk-article" data-permalink="<?php the_permalink(); ?>">

    <?php if (has_post_thumbnail()) : ?>
        <?php
        $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
        $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
        ?>
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></a>
    <?php endif; ?>

    <?
    /*Получаем данные о посте*/
    $post_info = get_post_custom();
//     echo "<pre>";
//     var_dump($post_info);
//     echo "</pre>";
    ?>
    <a href="<?php the_permalink() ?>" >
    <div class="uk-overlay" style="border: 3px solid #7d2422;">
        <img width="900" src="<?=$post_info["wpcf-image"][0];?>" class=" wp-post-image" alt="Изображение новости" >
<!--        <div class="uk-overlay-area"></div>-->
    </div>
    </a>

<!--    <a href="<?php /*the_permalink() */?>" >
    <img style="border: 3px solid #7C2322" width="900" src="<?/*=$post_info["wpcf-image"][0];*/?>" class=" wp-post-image" alt="blog_warp">
    </a>-->



    <h1 class="uk-article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

   <br><br>
    <?=$post_info["wpcf-news-anonce"][0];?>
    <br><br>

   <br>

    <a class="uk-button uk-button-primary" href="<?php the_permalink() ?>">Подробнее</a>

    <div style="position: relative; float:right; margin-top: 10px;"><?=rdate( 'd F Y', $post_info["wpcf-date"][0], 1);?></div>
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

    <ul class="uk-subnav uk-subnav-line">
        <!-- <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('Continue Reading', 'warp'); ?></a></li> -->
        <?php if(comments_open()) : ?>
            <li><?php comments_popup_link(__('No Comments', 'warp'), __('1 Comment', 'warp'), __('% Comments', 'warp'), "", ""); ?></li>
        <?php endif; ?>
    </ul>

    <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>
<br>
</article>
<hr>