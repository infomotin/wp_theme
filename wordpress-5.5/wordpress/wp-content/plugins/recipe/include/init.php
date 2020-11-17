<?php 
function recipe_init(){
    $labels = array(
        'name'                  => _x( 'Recipe', 'Post type general name', 'recipe_dazzle' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'recipe_dazzle' ),
        'menu_name'             => _x( 'Recipe', 'Admin Menu text', 'recipe_dazzle' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'recipe_dazzle' ),
        'add_new'               => __( 'Add New', 'recipe_dazzle' ),
        'add_new_item'          => __( 'Add New Recipe', 'recipe_dazzle' ),
        'new_item'              => __( 'New Recipe', 'recipe_dazzle' ),
        'edit_item'             => __( 'Edit Recipe', 'recipe_dazzle' ),
        'view_item'             => __( 'View Recipe', 'recipe_dazzle' ),
        'all_items'             => __( 'All Recipe', 'recipe_dazzle' ),
        'search_items'          => __( 'Search Recipe', 'recipe_dazzle' ),
        'parent_item_colon'     => __( 'Parent Recipe:', 'recipe_dazzle' ),
        'not_found'             => __( 'No Recipe found.', 'recipe_dazzle' ),
        'not_found_in_trash'    => __( 'No Recipe found in Trash.', 'recipe_dazzle' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe_dazzle' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe_dazzle' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe_dazzle' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe_dazzle' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe_dazzle' ),
        'insert_into_item'      => _x( 'Insert into Recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe_dazzle' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe_dazzle' ),
        'filter_items_list'     => _x( 'Filter Recipe list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe_dazzle' ),
        'items_list_navigation' => _x( 'Recipe list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe_dazzle' ),
        'items_list'            => _x( 'Recipe list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe_dazzle' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'description'        =>'A custom post Type Recipe',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ],
        'taxonomies'         => ['category','post_tag'],
        'show_in_rest'       => true
    );
 
    register_post_type( 'Recipe', $args );
}


?>