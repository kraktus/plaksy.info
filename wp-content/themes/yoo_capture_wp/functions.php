<?php
/**
* @package   Capture
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

//Меняем страницу поиска на с /s/ на /search/
function fb_change_search_url_rewrite() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }
}
add_action( 'template_redirect', 'fb_change_search_url_rewrite' );



/*Функция правильного русскоязычного отображения даты и времени*/
function rdate($format, $timestamp, $case = 0)
{
    if ( $timestamp === null )
        $timestamp = time();

    static $loc =
    'Январ,ь,я,е,ю,ём,е
    Феврал,ь,я,е,ю,ём,е
    Март, ,а,е,у,ом,е
    Апрел,ь,я,е,ю,ем,е
    Ма,й,я,е,ю,ем,е
    Июн,ь,я,е,ю,ем,е
    Июл,ь,я,е,ю,ем,е
    Август, ,а,е,у,ом,е
    Сентябр,ь,я,е,ю,ём,е
    Октябр,ь,я,е,ю,ём,е
    Ноябр,ь,я,е,ю,ём,е
    Декабр,ь,я,е,ю,ём,е';

    if ( is_string($loc) )
    {
        $months = array_map('trim', explode("\n", $loc));
        $loc    = array();

        foreach($months as $monthLocale)
        {
            $cases = explode(',', $monthLocale);
            $base  = array_shift($cases);

            $cases = array_map('trim', $cases);

            $loc[] = array(
                'base'  => $base,
                'cases' => $cases,
            );
        }
    }

    $m = (int)date('n', $timestamp)-1;

    $F = $loc[$m]['base'].$loc[$m]['cases'][$case];

    $format = strtr($format, array(
        'F' => $F,
        'M' => substr($F, 0, 3),
    ));

    return date($format, $timestamp);
}


/*Костыль для удаления абсолютной части линка */
function cut_link($a)
{   // внимание, ГОВНОКОД!!!
    $url = preg_replace("!http://plaksy.local!","",$a);
    return $url;
}




// check compatibility
if (version_compare(PHP_VERSION, '5.3', '>=')) {

    // bootstrap warp
    require(__DIR__.'/warp.php');
}
