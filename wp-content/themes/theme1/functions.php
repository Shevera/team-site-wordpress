<?php

/**
 * Загружаемые скрипты и стили
 */
function load_style_script(){
    wp_enqueue_script('jquery_my', get_template_directory_uri().'/js/jquery-1.10.1.min.js');
    wp_enqueue_script('jqFancyTransitions', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');
    wp_enqueue_style('style' , get_template_directory_uri().'/style.css');
}

/**
 * Загружаем скрипты и стили
 */
add_action('wp_enqueue_scripts' , 'load_style_script');

/**
 * Поддержка миниатюр
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);

/**
 * Добавляем виджеты
 */

register_sidebar(array('name' => 'Меню',
                        'id' => 'menu_header',
                        'before_widget'=>'',
                        'after_widget'=>''));

register_sidebar(array('name' => 'Sidebar',
                        'id' => 'sidebar',
                        'before_widget'=>'<div class="sidebar-widjet %2$s">',
                        'after_widget'=>'</div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'));

register_sidebar(array('name' => 'Footer',
                        'id' => 'footer',
                        'before_widget'=>'<div class="footer-info %2$s">',
                        'after_widget'=>'</div>',
                        'before_title'=>'<h3>',
                        'after_title'=>'</h3>'));

/**
 * баннер
 */
function banner_posts(){
    $labels = array(
            'name'               => 'Баннеры', // основное название для типа записи
            'singular_name'      => 'Баннер', // название для одной записи этого типа
            'add_new'            => 'Добавить новый', // для добавления новой записи
            'add_new_item'       => 'Добавить новый баннер', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать баннер', // для редактирования типа записи
            'new_item'           => 'Новый баннер', // текст новой записи
            'view_item'          => 'Посмотреть баннер', // для просмотра записи этого типа.
            'search_items'       => 'Найти баннер', // для поиска по этим типам записи
            'not_found'          => 'Баннер не найден', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'В корзине баннера не найдено', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родительских типов. для древовидных типов
            'menu_name'          => 'Баннеры', // название меню
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title','thumbnail')
    );

    register_post_type('type_name', $args );
}

add_action('init' , 'banner_posts');