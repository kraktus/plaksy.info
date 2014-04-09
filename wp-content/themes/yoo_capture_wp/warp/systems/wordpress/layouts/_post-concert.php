<article id="item-<?php the_ID(); ?>" class="uk-article" data-permalink="<?php the_permalink(); ?>">

    <?php if (has_post_thumbnail()) : ?>
        <?php
        $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
        $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
        ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></a>
    <?php endif; ?>

    <!-- <h1 class="uk-article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1> -->

<br>
<table border="0" cellpadding="1" cellspacing="1" style="width: 100%; height: 200px;">
    <tbody>
        <tr>
            <td rowspan="3" style="vertical-align: top;">
                <a class="uk-thumbnail uk-overlay-toggle" style="padding: 0px;" href="<?php the_permalink() ?>">
                    <div class="uk-overlay" style="border: 3px solid #7d2422;">
                        <img src="http://cs424828.vk.me/v424828460/969d/KSH_KJSi53o.jpg" style="max-height:473px;" alt="Load Style" >
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
                <div style="margin-left: 234px;" class="nradio_recommend"></div>
                <br>
                <br>
                <br>
                <h5 style="text-align: right;" class="uk-article-lead">01 Апреля 2014</h5>
                <h5 style="text-align: right;" class="uk-article-lead">&nbsp; 20:00</h5>
                <h5 style="text-align: right;" class="uk-article-lead">г. Москва</h5>
                <h5 style="text-align: right;" class="uk-article-lead">Клуб&nbsp;Grand Bourbon Street</h5>
                <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: right; vertical-align: bottom; height: 42px;">
                    <a class="uk-button uk-button-primary " href="<?php the_permalink() ?>">Подробнее</a>
                    &nbsp;
                    <a class="uk-button vk" href="#" target="_blank">Встреча в контакте</a>
            </td>
        </tr>
    </tbody>
</table>



  <p class="uk-article-meta">
        <?php
            $date = '<time datetime="'.get_the_date('Y-m-d').'" pubdate>'.get_the_date().'</time>';
            printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
        ?>
    </p>

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

