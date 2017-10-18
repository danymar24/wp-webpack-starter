<?php
/**
Template Name: Interior Template
 */
get_header();
// start loop
while ( have_posts() ) : the_post();

get_template_part( 'template-parts/section', 'hero' );

?>

<section class="section-entry section-wrap page-interior">
  <div class="container">
    <?php get_template_part( 'template-parts/content', 'interior' ); ?>
  </div><!--/.container-->
</section>

<?php
get_footer();
?>
