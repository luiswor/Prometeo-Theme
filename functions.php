<?php
/**
 * Functions and definitions
 * In WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your aIn WordPress, functions.php or the theme functions file is a template included in WordPress themes. It acts like a plugin for your WordPress site that's automatically activated with your current theme.
 *
 *
 */

 define('FORCE_SSL_ADMIN', true);
	add_theme_support( 'title' );
 	
	//ADD SUPPORT FOR TITLE TAG
	// Register Theme Features
	function custom_theme_features()  {

		// Add theme support for Post Formats
		add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );

		// Add theme support for HTML5 Semantic Markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Add theme support for document Title tag
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'custom_theme_features' );


	add_theme_support( 'title-tag' );


	add_theme_support( 'custom-logo', array(
		'width'  				=> 300,
		'height' 				=> 160,
		'flex-height' 			=> true,
		'flex-width'			=> true,
		'header-text'			=> array('site-title', 'site-description'),
		'unlink-homepage-logo'	=> true
	));


	if (function_exists('register_nav_menus')){
		register_nav_menus(array(
				'Header' => __('Menú General','Prometeo'),
				'Social' => __('Social','Prometeo'),
				'Footer' => __('Menú en Footer','Prometeo'),
			)
		);
	}

		//Añadir sidebar widgets
		add_action('widgets_init', 'mis_widgets');

		function mis_widgets(){
			//Registrar un sidebar
			register_sidebar(
				array(
					'id'			=> 'sidebar',
					'name'			=> __('Barra Lateral'),
					'description'	=> __('Sólo aparece al costado'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="widget-title">',
					'after_title'	=> '</p>'
				)
			);
			
			register_sidebar(
				array(
					'id'			=> 'sidebara',
					'name'			=> __('Barra Lateral'),
					'description'	=> __('Sólo aparece al costado'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="widget-title">',
					'after_title'	=> '</p>'
				)
			);

			register_sidebar(
				array(
					'id'			=> 'sidebar_services',
					'name'			=> __('Barra Lateral'),
					'description'	=> __('Sólo aparece al costado de servicios'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="widget-title">',
					'after_title'	=> '</p>'
				)
			);
			register_sidebar(
				array(
					'id'			=> 'footer_1',
					'name'			=> __('Footer 1'),
					'description'	=> __('Sólo aparece en el footer'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="footer_title">',
					'after_title'	=> '</p>'
				)
			);
			register_sidebar(
				array(
					'id'			=> 'footer_2',
					'name'			=> __('Footer 2'),
					'description'	=> __('Sólo aparece en el footer'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="footer_title">',
					'after_title'	=> '</p>'
				)
			);
			register_sidebar(
				array(
					'id'			=> 'footer_3',
					'name'			=> __('Footer 3'),
					'description'	=> __('Sólo aparece en el footer'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="footer_title">',
					'after_title'	=> '</p>'
				)
			);
			register_sidebar(
				array(
					'id'			=> 'footer_4',
					'name'			=> __('Footer 4'),
					'description'	=> __('Sólo aparece en el footer'),
					'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
					'after_widget'	=> '</div>',
					'before_title'	=> '<p class="footer_title">',
					'after_title'	=> '</p>'
				)
			);
		}
	


	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);



	add_shortcode('pagelist', function ($args) {
		$args = wp_parse_args($args, [
			'type'  => 'page',
			'limit' => 10,
		]);
		$out = [];
		$ids = [];
		// Check if we have a predefined list od IDs
		if ( ! empty($args['id'])) {
			$ids = array_filter(explode(',', $args['id']), function ($id) {
				return ! empty($id);
			});
			$ids = array_map('intval', $ids);
		}
		// If we don't have a predefined list od IDs, get the latest posts based on 'limit' parameter
		if (empty($ids)) {
			$queryArgs = [
				'post_type'              => isset($args['type']) && post_type_exists($args['type']) ? $args['type'] : 'page',
				'posts_per_page'         => ! empty($args['limit']) && is_numeric($args['limit']) ? intval($args['limit']) : 10,
				'ignore_sticky_posts'    => true,
				'fields'                 => 'ids',
				'cache_results'          => false,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			];
			$ids = get_posts($queryArgs);
			wp_reset_postdata();
		}
		foreach ($ids as $id) {
			$img = has_post_thumbnail($id)
				? get_the_post_thumbnail($id, [100, 100])
				: '<span class="wpb-post-list__no-image"></span>';
			$excerpt = has_excerpt($id) ? wpautop(get_the_excerpt($id)) : '';
			$out[] = "<a href='" . get_the_permalink($id) . "' class='wpb-page-list__item'>
				<div>{$img}</div>
				<div>
					<div><h4>" . get_the_title($id) . "</h4></div>
					{$excerpt}
				</div>
			</a>";
		}
		return "<div class='wpb-page-list'>" . implode('', $out) . "</div>";
	});
    
    
    function tribe_attachment_404_fix () {
	if (class_exists('Tribe__Events__Main')) {
		remove_action( 'init', array( Tribe__Events__Main::instance(), 'init' ), 10 );
		add_action( 'init', array( Tribe__Events__Main::instance(), 'init' ), 1 );
	}
}

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'prometeo' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'prometeo' ),
		'menu_name'             => __( 'Eventos', 'prometeo' ),
		'name_admin_bar'        => __( 'Eventos', 'prometeo' ),
		'archives'              => __( 'Archivo de eventos', 'prometeo' ),
		'attributes'            => __( 'Atributos de eventos', 'prometeo' ),
		'parent_item_colon'     => __( 'Evento superior', 'prometeo' ),
		'all_items'             => __( 'Todos los eventos', 'prometeo' ),
		'add_new_item'          => __( 'Agregar evento', 'prometeo' ),
		'add_new'               => __( 'Agregar Nuevo', 'prometeo' ),
		'new_item'              => __( 'Nuevo Evento', 'prometeo' ),
		'edit_item'             => __( 'Editar Evento', 'prometeo' ),
		'update_item'           => __( 'Actualizar Evento', 'prometeo' ),
		'view_item'             => __( 'Ver Evento', 'prometeo' ),
		'view_items'            => __( 'Ver Eventos', 'prometeo' ),
		'search_items'          => __( 'Buscar Evento', 'prometeo' ),
		'not_found'             => __( 'Evento no encontrado', 'prometeo' ),
		'not_found_in_trash'    => __( 'Evento no encontrado en la papelera', 'prometeo' ),
		'featured_image'        => __( 'Imagen destacada', 'prometeo' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'prometeo' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'prometeo' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'prometeo' ),
		'insert_into_item'      => __( 'Insertar dentro de', 'prometeo' ),
		'uploaded_to_this_item' => __( 'Actualizar este evento', 'prometeo' ),
		'items_list'            => __( 'Lista de Eventos', 'prometeo' ),
		'items_list_navigation' => __( 'Lista de navegación de eventos', 'prometeo' ),
		'filter_items_list'     => __( 'Filtrar eventos', 'prometeo' ),
	);
	$rewrite = array(
		'slug'                  => 'eventos',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Evento', 'prometeo' ),
		'description'           => __( 'Post Type Description', 'prometeo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'			=> true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'events',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'custom_post_type', 0 );




