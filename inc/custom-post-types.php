<?php

/*Custom Post Types*/

//News

add_action('init', 'uc_slider_init');

function uc_slider_init()

{

	$uc_labels = array(

		'name' => _x('Slider', 'post type general name'),

		'singular_name' => _x('Slider', 'post type singular name'),

		'all_items' => __('All Slider'),

		'add_new' => _x('Add Slider', 'Slider'),

		'add_new_item' => __('Add Slider'),

		'edit_item' => __('Edit Slider'),

		'new_item' => __('New Slider'),

		'view_item' => __('View Slider'),

		'search_items' => __('Search in Slider'),

		'not_found' =>  __('No Slider found'),

		'not_found_in_trash' => __('No Slider found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these*/

		'capability_Show' => 'post',

		'hierarchical' => false,

		'menu_position' => 4,

		'has_archive' => 'true',
		'show_in_rest' => true,

		'supports' => array('title','excerpt','thumbnail')

	);

	register_post_type('slider',$args);

}

//News

add_action('init', 'uc_news_init');

function uc_news_init()

{

	$uc_labels = array(

		'name' => _x('News', 'post type general name'),

		'singular_name' => _x('News', 'post type singular name'),

		'all_items' => __('All News'),

		'add_new' => _x('Add News', 'News'),

		'add_new_item' => __('Add News'),

		'edit_item' => __('Edit News'),

		'new_item' => __('New News'),

		'view_item' => __('View News'),

		'search_items' => __('Search in News'),

		'not_found' =>  __('No News found'),

		'not_found_in_trash' => __('No News found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these icons later, see Jeffrey Way course*/
     // 'rewrite' => array( 'slug' => 'news', 'with_front' => false ), /* you can specify it's url slug */

		'capability_Show' => 'post',

		'hierarchical' => false,

		'menu_position' => 4,

		'has_archive' => 'false',

		'show_in_rest' => true,
		
		'show_in_graphql' => true,
      	'graphql_single_name' => 'news-item',
      	'graphql_plural_name' => 'news-items',

		'supports' => array('title','editor','excerpt','comments','thumbnail')

	);

	register_post_type('news',$args);

}

//Photos

add_action('init', 'uc_photos_init');

function uc_photos_init()

{

	$uc_labels = array(

		'name' => _x('Photos', 'post type general name'),

		'singular_name' => _x('Photos', 'post type singular name'),

		'all_items' => __('All Photos'),

		'add_new' => _x('Add Photos', 'Photos'),

		'add_new_item' => __('Add Photos'),

		'edit_item' => __('Edit Photos'),

		'new_item' => __('New Photos'),

		'view_item' => __('View Photoss'),

		'search_items' => __('Search in Photos'),

		'not_found' =>  __('No Photos found'),

		'not_found_in_trash' => __('No Photos found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these icons later, see Jeffrey Way course*/
     // 'rewrite' => array( 'slug' => 'photos', 'with_front' => false ), /* you can specify it's url slug */

		'capability_Show' => 'post',

		'hierarchical' => false,

		'menu_position' => 4,

		'has_archive' => 'true',
		'show_in_rest' => true,
		
		// 'show_in_graphql' => true,
      	// 'graphql_single_name' => 'photo',
      	// 'graphql_plural_name' => 'photos',

		'supports' => array('title','editor','excerpt','comments','thumbnail')

	);

	register_post_type('photos',$args);

}


//Galleries

add_action('init', 'uc_memorabilia_init');

function uc_memorabilia_init()

{

	$uc_labels = array(

		'name' => _x('Memorabilia', 'post type general name'),

		'singular_name' => _x('Memorabilia', 'post type singular name'),

		'all_items' => __('All Memorabilia'),

		'add_new' => _x('Add Memorabilia', 'Memorabilia'),

		'add_new_item' => __('Add Memorabilia'),

		'edit_item' => __('Edit Memorabilia'),

		'new_item' => __('New Memorabilia'),

		'view_item' => __('View Memorabilia'),

		'search_items' => __('Search in Memorabilia'),

		'not_found' =>  __('No Memorabilia found'),

		'not_found_in_trash' => __('No Memorabilia found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these icons later, see Jeffrey Way course*/
     // 'rewrite' => array( 'slug' => 'memorabilia', 'with_front' => false ), /* you can specify it's url slug */

		'capability_Show' => 'post',

		'hierarchical' => false,

		'menu_position' => 4,

		'has_archive' => 'true',
		'show_in_rest' => true,

		'supports' => array('title','editor','excerpt','comments','thumbnail', 'post-formats', 'page-attributes')

	);

	register_post_type('memorabilia',$args);

}

//Writing

add_action('init', 'uc_writing_init');

function uc_writing_init()

{

	$uc_labels = array(

		'name' => _x('Writing', 'post type general name'),

		'singular_name' => _x('Writing', 'post type singular name'),

		'all_items' => __('All Writing'),

		'add_new' => _x('Add Writing', 'Writing'),

		'add_new_item' => __('Add Writing'),

		'edit_item' => __('Edit Writing'),

		'new_item' => __('New Writing'),

		'view_item' => __('View Writing'),

		'search_items' => __('Search in Writing'),

		'not_found' =>  __('No Writing found'),

		'not_found_in_trash' => __('No Writing found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these icons later, see Jeffrey Way course*/
     // 'rewrite' => array( 'slug' => 'writing', 'with_front' => false ), /* you can specify it's url slug */

		'capability_Show' => 'post',

		'hierarchical' => false,

		'menu_position' => 4,

		'show_in_rest' => true,
		
		'show_in_graphql' => true,
      	'graphql_single_name' => 'story',
      	'graphql_plural_name' => 'stories',

		'has_archive' => 'true',

		'supports' => array('title','editor','excerpt','comments','thumbnail')

	);

	register_post_type('writing',$args);

}
//Video

add_action('init', 'uc_video_init');

function uc_video_init()

{

	$uc_labels = array(

		'name' => _x('Video', 'post type general name'),

		'singular_name' => _x('Video', 'post type singular name'),

		'all_items' => __('All Video'),

		'add_new' => _x('Add Video', 'Video'),

		'add_new_item' => __('Add Video'),

		'edit_item' => __('Edit Video'),

		'new_item' => __('New Video'),

		'view_item' => __('View Video'),

		'search_items' => __('Search in Video'),

		'not_found' =>  __('No Video found'),

		'not_found_in_trash' => __('No Video found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these icons later, see Jeffrey Way course*/
     // 'rewrite' => array( 'slug' => 'video', 'with_front' => false ), /* you can specify it's url slug */

		'capability_Show' => 'post',

		'hierarchical' => false,

		'menu_position' => 4,

		'has_archive' => 'true',
		'show_in_rest' => true,

		'supports' => array('title','editor','excerpt','comments','thumbnail')

	);

	register_post_type('video',$args);

}


//Places
add_action('init', 'uc_places_init');

function uc_places_init()

{

	$uc_labels = array(

		'name' => _x('Places', 'post type general name'),

		'singular_name' => _x('Place', 'post type singular name'),

		'all_items' => __('All Places'),

		'add_new' => _x('Add Place', 'Place'),

		'add_new_item' => __('Add Place'),

		'edit_item' => __('Edit Place'),

		'new_item' => __('New Place'),

		'view_item' => __('View Place'),

		'search_items' => __('Search in Places'),

		'not_found' =>  __('No Place found'),

		'not_found_in_trash' => __('No Place found in trash'),

		'parent_item_colon' => ''

	);

	$args = array(

		'labels' => $uc_labels,

		'public' => true,

		'publicly_queryable' => true,

		'show_ui' => true,

		'query_var' => true,

		'menu_icon' => get_stylesheet_directory_uri() . '/images/misc/quote-icon.png', /* Get these icons later, see Jeffrey Way course*/
     // 'rewrite' => array( 'slug' => 'news', 'with_front' => false ), /* you can specify it's url slug */

		'capability_Show' => 'post',

		'hierarchical' => false,

		'show_in_rest' => true, 
		
		'show_in_graphql' => true,
      	'graphql_single_name' => 'place',
      	'graphql_plural_name' => 'places',

		'menu_position' => 4,

		'has_archive' => 'false',

		'supports' => array('title','editor','excerpt','comments','thumbnail','post-formats')

	);

	register_post_type('places',$args);

}

/*++++++++++++++++++++++++++++++++
	TAXONOMIES
	++++++++++++++++++++++++++++++++++*/


//Type of Post (latest, home, etc)

$show_labels = array(

    'name' => _x( 'item-type', 'taxonomy general name' ),

    'singular_name' => _x( 'item-type', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search in item-type' ),

    'all_items' => __( 'All item-type' ),

    'most_used_items' => null,

    'parent_item' => null,

    'parent_item_colon' => null,

    'edit_item' => __( 'Edit item-type' ),

    'update_item' => __( 'Update item-type' ),

    'add_new_item' => __( 'Add new item-type' ),

    'new_item_name' => __( 'New item-type' ),

    'menu_name' => __( 'item-type' ),

  );


register_taxonomy('item-type',array('news', 'video', 'photos', 'articles'),array(

    'hierarchical' => true,

    'labels' => $show_labels,

    'show_ui' => true,

    'query_var' => true,

    'rewrite' => array('slug' => 'item-type' )

  ));


//Era (or Date)

$show_labels = array(

    'name' => _x( 'item-date', 'taxonomy general name' ),

    'singular_name' => _x( 'item-date', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search in item-date' ),

    'all_items' => __( 'All item-date' ),

    'most_used_items' => null,

    'parent_item' => null,

    'parent_item_colon' => null,

    'edit_item' => __( 'Edit item-date' ),

    'update_item' => __( 'Update item-date' ),

    'add_new_item' => __( 'Add new item-date' ),

    'new_item_name' => __( 'New item-date' ),

    'menu_name' => __( 'item-date' ),

  );


register_taxonomy('item-date',array('news', 'video', 'photos', 'writing'),array(

    'hierarchical' => true,

    'labels' => $show_labels,

    'show_ui' => true,

    'query_var' => true,

    'rewrite' => array('slug' => 'item-type' )

  ));

//Place (Uranium City/ Gunnar/ Eldorado/ Other mines)

$show_labels = array(

    'name' => _x( 'item-place', 'taxonomy general name' ),

    'singular_name' => _x( 'item-place', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search in item-place' ),

    'all_items' => __( 'All item-place' ),

    'most_used_items' => null,

    'parent_item' => null,

    'parent_item_colon' => null,

    'edit_item' => __( 'Edit item-place' ),

    'update_item' => __( 'Update item-place' ),

    'add_new_item' => __( 'Add new item-place' ),

    'new_item_name' => __( 'New item-place' ),

    'menu_name' => __( 'item-place' ),

  );


register_taxonomy('item-place',array('news', 'video', 'photos', 'writing'),array(

    'hierarchical' => true,

    'labels' => $show_labels,

    'show_ui' => true,

    'query_var' => true,

    'rewrite' => array('slug' => 'item-place' )

  ));

//Source (Archive, person, personal collection, newspaper, magazine)

$show_labels = array(

    'name' => _x( 'item-source', 'taxonomy general name' ),

    'singular_name' => _x( 'item-source', 'taxonomy singular name' ),

    'search_items' =>  __( 'Search in item-source' ),

    'all_items' => __( 'All item-source' ),

    'most_used_items' => null,

    'parent_item' => null,

    'parent_item_colon' => null,

    'edit_item' => __( 'Edit item-source' ),

    'update_item' => __( 'Update item-source' ),

    'add_new_item' => __( 'Add new item-source' ),

    'new_item_name' => __( 'New item-source' ),

    'menu_name' => __( 'item-source' ),

  );


register_taxonomy('item-source',array('news', 'video', 'photos', 'writing'),array(

    'hierarchical' => true,

    'labels' => $show_labels,

    'show_ui' => true,

    'query_var' => true,

    'rewrite' => array('slug' => 'item-source' )

  ));

 ?>
