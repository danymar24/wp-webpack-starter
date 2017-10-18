<?php
/**
Template Name: Interior Template
 */
get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

<section class="section-entry section-wrap page-interior">
  <div class="container">
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    ?>
  </div><!--/.container-->
</section>

<?php
get_footer();
?>
