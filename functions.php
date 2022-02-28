<?php

//add styling

function fiber_enqueue_style()
{
    $parenthandle = 'stylesheet';
    wp_enqueue_style($parenthandle , get_template_directory_uri() . '/style.css','false');
}

//add functions
add_action('wp_enqueue_scripts', 'fiber_enqueue_style');

//register menus on webpage

function register_my_menus(){
    register_nav_menus(array(
        'topMenuHeader'  =>  __('Header Menu'),
        'container_class' => 'topHeaderMenuStyle'
    ));
}
add_action('init' , 'register_my_menus');


