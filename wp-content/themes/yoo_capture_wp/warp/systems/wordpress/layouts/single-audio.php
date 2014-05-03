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
//             echo "<pre>";
//             var_dump($post_info);
//             echo "</pre>";
        ?>

        <?
//       Парсер для массива участников записи
        function role_parcer($item)
        {
            $person = explode("*", $item);
            echo '<dt>'.$person[0].'</dt>';
            echo '<dd>'.$person[1].'</dd>';
        }
        ?>

        <!--ВЫВОД ШАБЛОНА-->

        <h1 class="uk-article-title"><?php the_title(); ?></h1>
        <br>
        <br>

<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
	<tbody>
		<tr>
			<td style="vertical-align:top; width:350px" ><img alt="DVD Case" src="<?=cut_link($post_info["wpcf-audio-image"][0]);?>" ><br>
				<br>
				&nbsp;</td>
			<td style="vertical-align:top; width: 10%;">&nbsp;</td>
			<td rowspan="2" style=" vertical-align: top;background: #f7f7f7;padding: 35px; box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);">
				<h3 class="uk-panel-title">Участники записи:</h3>
				<dl class="uk-description-list uk-description-list-line">

                    <? foreach ($post_info["wpcf-audio-role"] as $item): ?>
                    <? role_parcer($item)?>
                    <? endforeach; ?>
				</dl>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: bottom; text-align: left;">

				Год выпуска: <?=date("Y", $post_info["wpcf-audio-date"][0]);?><br>
				Тип издания: <?=$post_info["wpcf-audio-album-type"][0];?><br>
				Записанно на студии&nbsp;<a href="<?=cut_link($post_info["wpcf-audio-studio-link"][0]);?>" target="_blank"><?=$post_info["wpcf-audio-studio-name"][0];?></a>
                <hr>

                <a href="<?=cut_link($post_info["wpcf-audio-download-link"][0]);?>">
                <button class="uk-button uk-button-primary" data-uk-modal="{target:'#modal-1'}">Скачать альбом</button>
                </a>
            </td>
		</tr>
	</tbody>
</table>

<br>

<div id="modal-1" class="uk-modal" style="display: none;">
                    <div class="uk-modal-dialog" style="margin-left: -300px;">
                        <button type="button" class="uk-modal-close uk-close"></button>
                        <h1>Спасибо за скачивание!</h1>
                        <p>
                            В архиве находятся все песни альбома с полностью прописанными тэгами.
                            <br>
                            <br>
                            Зарабатывать не умеем, если не жалко, подайте на следующую запись!
                        </p>
                    </div>
                </div>
                <br>
                <hr>

    <table border="0" cellpadding="1" cellspacing="1" style="width: 100%; color: #7C2322">
	<tbody>

<? $i = 0;?>
<? while ($post_info["wpcf-audio-song"][$i]): ?>

            <tr>
                <td style="width: 100%">
                    <strong><?=$post_info["wpcf-audio-song-name"][$i];?></strong>
                </td>
                <td></td>
                <td style="text-align: right;">
                    <audio  src="<?=cut_link($post_info["wpcf-audio-song"][$i]);?>" type="audio/mp3"></audio>
                </td>
            </tr>
<? $i++; ?>
<? endwhile; ?>






    </tbody>
</table>



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
      <!--   <div class="uk-panel uk-panel-box">

            <?php echo get_avatar(get_the_author_meta('user_email')); ?>

            <h2 class="uk-h3 uk-margin-top-remove"><?php the_author(); ?></h2>

            <div class="uk-margin"><?php the_author_meta('description'); ?></div>

        </div> -->
        <?php endif; ?>

        <?php comments_template(); ?>

    </article>

    <?php endwhile; ?>
 <?php endif; ?>