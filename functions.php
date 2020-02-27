<?php 

function add_theme_scripts() {
    //感觉和放在header和footer差别不大
    
    //css
    wp_enqueue_style( 'new_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //js
    wp_enqueue_script( 'new_jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script( 'new_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

    // if(is_404()){}
    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//注册一个小工具
register_sidebar(
    array(
        'name'          => '侧边栏',
        'before_widget' => '<div class="sbox">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    )
);
