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

        <h1 class="uk-article-title"><?php the_title(); ?></h1>
        <br>
        <br>

        <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td style="vertical-align:top">
                        <img src="/wp-content/uploads/albums/playboy.jpg" width="350px" alt="DVD Case" />

            </td>
            <td >
                <h3 class="uk-panel-title">Участники записи:</h3>

                <ul class="uk-list uk-list-striped">
                    <li>Якухин Пашандра - Вокал/Гитары</li>
                    <li>Данилов Максим - Вокал/Клавиши</li>
                    <li>Лейкин Че - Бас</li>
                    <li>Чаленков Димон - Барабансы</li>
                    <li>Жамалетдинов Руслан - Гитара</li>
                    <li>Ратников Юра - Трубадур</li>
                    <li>Какой-то Вадим - Тромбон</li>
                    <li>Василек Никита - Саксафон</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>
<br>
<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
    <tbody>
        <tr>
            <td style="vertical-align:top">

                Год выпуска: 2013
                <br>
                Тип издания: Radio Edit
                <br>
                Записанно на студии <a href="#" target="_blank">HerSound</a>
                <br>
                <br>

            </td>
            <td style="text-align:right;">

                <a class="uk-button vk" href="http://www.getuikit.com" target="_blank">Рассказать друзьям</a>
                <button class="uk-button uk-button-primary" data-uk-modal="{target:'#modal-1'}">Скачать альбом</button>

            </td>
        </tr>
    </tbody>
</table>
<div id="modal-1" class="uk-modal" style="display: none;">
                    <div class="uk-modal-dialog" style="margin-left: -300px;">
                        <button type="button" class="uk-modal-close uk-close"></button>
                        <h1>Скачивание</h1>
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
<table class="uk-table  uk-table-condensed uk-table-hover">
                    <tbody style="color:#7C2322">
                        <tr >
                            <td width="100%"><p style="color: #7d2422;">
                            <i class="uk-icon-music"></i>&nbsp;<span class="uk-badge">Плаксы - Я все видел</span></p></td>
                            <td style="float:right;"><audio src="/wp-content/uploads/test.mp3" type="audio/mp3"></audio></td>

                        </tr>                        <tr >
                            <td width="100%"><p style="color: #7d2422;">
                            <i class="uk-icon-music"></i>&nbsp;<span class="uk-badge">Плаксы - Я все видел</span></p></td>
                            <td style="float:right;"><audio src="/wp-content/uploads/test.mp3" type="audio/mp3"></audio></td>
                        </tr>                        <tr >
                            <td width="100%"><p style="color: #7d2422;">
                            <i class="uk-icon-music"></i>&nbsp;<span class="uk-badge">Плаксы - Я все видел</span></p></td>
                            <td style="float:right;"><audio src="/wp-content/uploads/test.mp3" type="audio/mp3"></audio></td>
                        </tr>                        <tr >
                            <td width="100%"><p style="color: #7d2422;">
                            <i class="uk-icon-music"></i>&nbsp;<span class="uk-badge">Плаксы - Я все видел</span></p></td>
                            <td style="float:right;"><audio src="/wp-content/uploads/test.mp3" type="audio/mp3"></audio></td>
                        </tr>                        <tr >
                            <td width="100%"><p style="color: #7d2422;">
                            <i class="uk-icon-music"></i>&nbsp;<span class="uk-badge">Плаксы - Я все видел</span></p></td>
                            <td style="float:right;"><audio src="/wp-content/uploads/test.mp3" type="audio/mp3"></audio></td>
                        </tr>
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