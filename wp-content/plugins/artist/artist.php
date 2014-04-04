<?php
/*
Plugin Name: Artist
Description: Тип контента "Музыканты"
Version: plaksy.info
Author: Руслан Жамалетдинов
Author URI: vk.com/krakuts
*/

add_action( 'init', 'create_artist' );
//Регистрашки
//
function create_artist() {

    register_post_type( 'artist',
        array(
            'labels' => array(
                'name'               => 'Музыканты',
                'singular_name'      => 'Музыкант',
                'add_new'            => 'Добавить нового',
                'add_new_item'       => 'Добавить новго музыканта',
                'edit'               => 'Изменить',
                'edit_item'          => 'Изменить музыканта',
                'new_item'           => 'Новый музыкант',
                'view'               => 'Просмотреть',
                'view_item'          => 'Просмотреть музыканта',
                'search_items'       => 'Поиск музыкантов',
                'not_found'          => 'Музыканты не найдены',
                'not_found_in_trash' => 'Музыканты в корзине отсутствуют',
                'parent'             => 'Родительский музыкант'
            ),
            'public'        => true, //Доступ в публичке
            'menu_position' => 15,
            'supports'      => array( 'title', ), // Штатные поля для ввода
            'taxonomies'    => array( '' ), //таксономия
            'menu_icon'     => plugins_url( 'images/logo.png', __FILE__ ),//иконка в админке
            'has_archive'   => true //архивирование пользовательского типа записи
        )
    );
}


//Хук админки
add_action( 'admin_init', 'my_admin' );

//Добавляем тип записи

function my_admin()
{
    add_meta_box(
            'artist_meta_box',
            'Информация об артисте',
            'display_artist_meta_box',
            'artist',
            'normal',
            'high'
        );
}

function display_artist_meta_box( $artist ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $artist = esc_html( get_post_meta( $artist->ID, 'instrument', true ) );
    $artist = esc_html( get_post_meta( $artist->ID, 'name', true ) );
    $artist = esc_html( get_post_meta( $artist->ID, 'photo', true ) );
    $artist = esc_html( get_post_meta( $artist->ID, 'vk_link', true ) );
    // $movie_rating = intval( get_post_meta( $movie_review->ID, 'movie_rating', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Функция в группе (пример:гитара/вокал)</td>
            <td><input type="text" size="80" name="instrument" value="<?php echo $instrument; ?>" /></td>
        </tr>

        <tr>
            <td style="width: 100%">Имя</td>
            <td><input type="text" size="80" name="name" value="<?php echo $name; ?>" /></td>
        </tr>

        <tr>
            <td style="width: 100%">Ссылка на фотографию</td>
            <td><input type="text" size="80" name="photo" value="<?php echo $photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Ссылка на страницу в контакте</td>
            <td><input type="text" size="80" name="photo" value="<?php echo $vk_link; ?>" /></td>
        </tr>
    </table>
    <?php
}



add_action( 'save_post', 'add_artist_fields', 10, 2 ); //сохраняемся в базе данных

function add_artist_fields( $artist_id, $artist ) {
    // Check post type for artist
    if ( $artist->post_type == 'artist' )
    {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['instrument'] ) && $_POST['instrument'] != '' ) {
            update_post_meta( $artist_id, 'instrument', $_POST['instrument'] );
        }
        if ( isset( $_POST['name'] ) && $_POST['name'] != '' ) {
            update_post_meta( $artist_id, 'name', $_POST['name'] );
        }
        if ( isset( $_POST['photo'] ) && $_POST['photo'] != '' ) {
            update_post_meta( $artist_id, 'photo', $_POST['photo'] );
        }
        if ( isset( $_POST['vk_link'] ) && $_POST['vk_link'] != '' ) {
            update_post_meta( $artist_id, 'vk_link', $_POST['vk_link'] );
        }
    }
}

?>