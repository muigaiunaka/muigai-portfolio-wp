<?php 
/**
* Template Name: Burberry Template
*/
// Why does Template Name know what to display
?>
<?php // here goes my notes ?>
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>
        <?php the_post(); ?>
            <section class="banner-example">
                <?php // shows the title of this page ?>
                <h1><?php the_title(); ?></h1>
                <?php // shows the content in the WYSIWYG Editor of this page ?>
                <?php the_content(); ?>
                <?php // shows the featured image of this page ?>
                <?php if (has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <h3>Muigai is the h3 of this country</h3>
            </section>
    <?php endwhile; ?>
<?php endif; ?>