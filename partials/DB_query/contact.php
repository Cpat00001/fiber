<?php

$query = new WP_Query(array('category_name' => 'contact'));

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();
        ?>
        
        <h1 class="ofertaTextGlowny" style="float:left;"><?php the_title(); ?></h1>
        <h2 style="clear:left;"><?php the_content(); ?></h2>
        
    <?php
    }
}



?>