<?php 
/**
 * Template Name: Home Template
 */
//  TEMPLATE
?>
<?php 
    // renders html onto the page when inside of a php tag
    echo '<h1>Here is my html inside of my PHP tag</h1>';
?>
<h1>Here is my html outside of PHP tag</h1>
<section class="banner">
    <?php the_post_thumbnail(); ?>
</section>