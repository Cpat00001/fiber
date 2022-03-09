<?php 

$args = array('category_name' => 'seo');
$query = new WP_Query($args);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();
        ?>
        <div class="col-md-12 col-sm-12 center" >
            <h2><?php the_content(); ?></h2>
        </div>
    <?php
    }
}
?>

                            
                               