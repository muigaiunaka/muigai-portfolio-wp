<?php 
/**
* Template Name: Eddy Template
**/
?>
<?php while ( have_posts() ): the_post(); ?>
    <section class="eddy-banner">
        <?php the_post_thumbnail(); ?>
        <div class="container">
            <div class="content">
                <span>Web Developer</span>
                <h1>Eddy N. Sentongo</h1>
            </div>
            <div class="media">
                <img src="<?php the_field('image'); ?>" />
            </div>
        </div>
    </section>
    <section class="about-eddy">
        <h2>About Me</h2>
        <p><?php the_content(); ?></p>
    </section>
<?php endwhile; ?>