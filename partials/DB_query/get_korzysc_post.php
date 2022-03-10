<?php

$args = array('category_name' => 'korzysc');
$query = new WP_Query($args);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();
        // var_dump($query->post);
        ?>
        <div class="col-sm-10 f1">
            <h5><b><?php the_content(); ?></b></h5>
        </div>
    <?php
    }
}
