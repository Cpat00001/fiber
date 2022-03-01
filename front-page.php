<?php
//add header and footer
get_header();
?>
<div class="container">
    <div style="margin-top:200px">
        <h5>This is text from front-page.php</h5>
    </div>
    <?php get_template_part('partials/home_center'); ?>
 </div><!-- end of bootstrap container -->
 



<!-- loop over the posts -->
<?php 
// show list of posts
if(have_posts()){
    while(have_posts()){ the_post(); ?>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
        <h5>Author:</h5>
        <?php the_author(); ?>
        <p>More about article...</p>
        <div><?php the_content(); ?></div>
    <?php
    }
}
?>


<?php get_footer();

