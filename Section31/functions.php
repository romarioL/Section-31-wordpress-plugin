<?php add_theme_support( 'menus' );


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidebar footer',
    'before_widget' => '<div class = "box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
