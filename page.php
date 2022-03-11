<?php get_header() ?>
<div class="div" style="height:200px;"></div>
<p><?php the_content(); ?></p>
<!-- add small footer for every pages other than front-page -->
<?php 
    include 'partials/footer_small.php';

