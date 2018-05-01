<?php
add_action( 'init', 'bouquets_post_type_register' );
/**
 * Register a partner post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bouquets_post_type_register() {
	$labels = array(
		'name'               => _x( 'Букети', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Букет', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Букети', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Букети', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Додати новий букет', 'букет', 'understrap' ),
		'add_new_item'       => __( 'Додати новий букет', 'understrap' ),
		'new_item'           => __( 'Новий букет', 'understrap' ),
		'edit_item'          => __( 'Редагувати букет', 'understrap' ),
		'view_item'          => __( 'Переглянути букет', 'understrap' ),
		'all_items'          => __( 'Всі букети', 'understrap' ),
		'search_items'       => __( 'Знайти букети', 'understrap' ),
		'parent_item_colon'  => __( 'Батьківські букети:', 'understrap' ),
		'not_found'          => __( 'Букети не знайдено', 'understrap' ),
		'not_found_in_trash' => __( 'Букети в кошику не знайдено', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Тут відображається список букетів та додаються нові букети.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'bouquets' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('thumbnail', 'title', 'page-attributes')
	);

	register_post_type( 'bouquets', $args );
}

add_action( 'init', 'shares_post_type_register' );
/**
 * Register a partner post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function shares_post_type_register() {
	$labels = array(
		'name'               => _x( 'Акції', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Акція', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Акції', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Акції', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Додати нову акцію', 'акцію', 'understrap' ),
		'add_new_item'       => __( 'Додати нову акцію', 'understrap' ),
		'new_item'           => __( 'Нова акція', 'understrap' ),
		'edit_item'          => __( 'Редагувати акцію', 'understrap' ),
		'view_item'          => __( 'Переглянути акцію', 'understrap' ),
		'all_items'          => __( 'Всі акції', 'understrap' ),
		'search_items'       => __( 'Знайти акцію', 'understrap' ),
		'parent_item_colon'  => __( 'Батьківські акції:', 'understrap' ),
		'not_found'          => __( 'Акції не знайдено', 'understrap' ),
		'not_found_in_trash' => __( 'Акції в кошику не знайдено', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Тут відображається список акцій та додаються нові акції.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'shares' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('thumbnail', 'title', 'page-attributes')
	);

	register_post_type( 'shares', $args );
}
