<?php
/**
Template Name: Interior Template
 */
get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

<div class="page-interior">

<section class="section-wrap">
  <div class="container">
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    ?>
  </div><!--/.container-->
</section>

</div><!--/.page-interior-->

<?php
get_footer();
?>
