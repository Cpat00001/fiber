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
<h1>Hello from posts.php</h1>