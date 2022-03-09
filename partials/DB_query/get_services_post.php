<?php
//query for post by category "services"
$query = new WP_Query(array('category_name' => 'services'));
// var_dump($query);
//the loop
if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 loop_oferta_uslugi">
                    <h3><b><?php the_content(); ?></b></h3>
                </div>
            </div>
        </div>
        
<?php
    }
}
wp_reset_postdata();
