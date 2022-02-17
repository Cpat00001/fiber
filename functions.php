<?php

//add styling

function fiber_enqueue_style()
{
    wp_enqueue_style('fiber','style.css','false');
}

//add functions
add_action('wp_enqueue_scripts', 'fiber_enqueue_style');