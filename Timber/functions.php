<?php





/**************подключение изображения в админке************/

add_action( 'after_setup_theme', 'home_setup' );

 function home_setup(){
 	add_theme_support ('post-thumbnails');
 }




/**************подключение стилей************/

function localhost_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}


/**************подключение скриптов************/

add_action( 'wp_enqueue_scripts', 'localhost_scripts');
add_action( 'wp_enqueue_scripts', 'localhost_style' );

function localhost_scripts() {
		wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/main.js');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );
}    




add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'newpost', [
		'label'  => null,
		'labels' => [
			'name'               => 'Посты', // основное название для типа записи
			'singular_name'      => 'Пост', // название для одной записи этого типа
			'add_new'            => 'Добавить пост', // для добавления новой записи
			'add_new_item'       => 'Добавление поста', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование поста', // для редактирования типа записи
			'new_item'           => 'Новый пост', // текст новой записи
			'view_item'          => 'Смотреть пост', // для просмотра записи этого типа.
			'search_items'       => 'Искать пост', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Посты', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','excerpt','thumbnail','author' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => 5,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
    
}

wp_reset_postdata(); // сброс
