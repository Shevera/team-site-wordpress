<?php

/**
 * загружаемые скрипты и стили
 */
function load_style_script(){
    wp_enqueue_script('jquery-google', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js');
    wp_enqueue_script('jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js');
    wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js');
    wp_enqueue_script('jquery-ui-1.9.2', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-flexslider', get_template_directory_uri() . '/flexslider.css');
    wp_enqueue_style('style-jquery-ui-1.9.2', get_template_directory_uri() . '/css/jquery-ui-1.9.2.custom.css');
}

/**
 * загружаем скрипты и стили
 */
add_action('wp_enqueue_scripts', 'load_style_script');

/**
 * опции
 **/
function my_more_options(){
    // создаем поле опции
    // $id, $title, $callback, $page, $section, $args
    add_settings_field(
        'phone', // $id - Название опции (идентификатор)
        'Телефон', // $title - Заголовок поля
        'display_phone', // $callback - callback function
        'general' // $page - Страница меню в которую будет добавлено поле
    );

    // Регистрирует новую опцию и callback функцию (функцию обратного вызова) для обработки значения опции при её сохранении в БД.
    // $option_group, $option_name, $sanitize_callback
    register_setting(
        'general', // $option_group - Название группы, к которой будет принадлежать опция. Это название должно совпадать с названием группы в функции settings_fields()
        'my_phone' // $option_name - Название опции, которая будет сохраняться в БД
    );
}

add_action('admin_init' , 'my_more_options');

function display_phone(){
    echo "<input type='text' class='regular-text' name='my_phone' value='"
        .esc_attr(get_option('my_phone'))."'>";
}

/**
 * иконки
 */
register_sidebar(array(
        'name' => 'Иконки в шапке',
        'id'    => 'icons_header',
        'description' => 'Используйте виджет Текст для добавления HTML - кода иконок',
        'before_widget' => '',
        'after_widget' => ''
    )

);

/**
 * Регистрируем меню
 */
register_nav_menus(array(
    'header_menu' => 'Меню в шапке',
    'footer_menu' => 'Меню в подвале'
));

/**
 * Слайдер на главной
 */
add_action('init' , 'slider_index');
function slider_index(){
    register_post_type('slider' , array(
        'public' => true,
        'supports'=> array('title', 'editor','thumbnail'),
        'menu_position'=> 100,
        'menu_icon'=> admin_url() . 'images/media-button-video.gif',
        'labels'=> array(
            'name'=>'Слайдеры',
            'all_items'=>'Все слайдеры',
            'add_new'=> 'Новый слайдер',
            'add_new_item'=>'Добавить слайдер'
        )
    ));
}

/**
 * Поддержка миниатюр
 */
add_theme_support('post-thumbnails');

?>