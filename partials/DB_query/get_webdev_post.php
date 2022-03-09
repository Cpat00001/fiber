<?php 

$args = array('category_name' => 'webdev',
             'orderby' => 'date',
             'order' => 'ASC'
             );
$query = new WP_Query($args);
// $query = new WP_Query(array('category_name' => 'webdev'));

//loop posts webdev
if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 loop_oferta_uslugi">
                    <h5><b><?php the_content(); ?></b></h5>
                </div>
            </div>
        </div>
    <?php
    }
}
wp_reset_postdata();



