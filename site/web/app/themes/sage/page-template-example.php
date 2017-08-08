<?php
/**
 * Template Name: Template Example
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php
  /**
  * Variables Declarations (declare all variables for this page template here, option to
  * be set below in other places, i.e. a loop)
  * $heroImg = the_post_thumbnail();
  *  $heroTxt = the_content();
  */
  ?>
  <?php include(locate_template('templates/components/banner.php')); ?>
<?php endwhile; ?>
