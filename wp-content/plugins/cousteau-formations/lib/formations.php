<?php
// Création d'un post_type "Formations" 

add_action( 'init', function(){
    register_post_type('formation', [
        'labels' => [
            'name' => 'Formations',
            'singular_name' => 'Formations',
            'menu_name' => 'Formations',
            'name_admin_bar' => 'Formations',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'hierarchical' => false,
        'support' => ['title'],
    ]);

    register_taxonomy(
        'formation-type',
        ['formation'], 
        [
            'labels' => [
                'name' => 'Type de formation',
                'singular_name' => 'Type de formation',
                'menu_name' => 'Type de formation'
            ],        
            'menu_icon' => 'dashicons-awards',
            'public' => true,
            'show_admin_column' => true,
            'hierarchical' => true
        ]
    );
});

add_action( 'admin_init', function(){
    remove_post_type_support( 'formation', 'editor' );
});