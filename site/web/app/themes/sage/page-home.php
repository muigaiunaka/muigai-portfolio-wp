<?php 
/**
 * Template Name: Home Template
 */
?>
<?php 
    // Define my WordPress Query
   $args = array('post_type' => 'project');
   $portfolio_posts = new WP_Query($args);
?>
<?php // Example of a WordPress Loop created using a WordPress Query ?>
<?php if($portfolio_posts->have_posts()) : ?>
     <?php while($portfolio_posts->have_posts()) :  ?>
      <?php $portfolio_posts->the_post(); ?>
            <section class="portfolio-project-container">
                <img src="<?php the_field('thumbnail'); // field name is thumbnail ?>" />
                <div class="portfolio-project-content-container">
                    <h1> <?php the_field('project_name'); // field name is project_name ?> </h1> 
                    <p> <?php the_field('project_description'); // field name is project description ?> </p>
                    <h3> <?php the_field('client'); // field name is client ?> </h3>
                    <?php if( have_rows('tech_stack') ): ?>
                        <?php // loop through the rows of data ?>
                        <?php while ( have_rows('tech_stack') ) : the_row(); ?>
                            <?php // display a sub field value ?>
                            <p> <?php the_sub_field('languages'); ?> </p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
    <?php endwhile; // end while ?>
<?php endif; // end if ?>