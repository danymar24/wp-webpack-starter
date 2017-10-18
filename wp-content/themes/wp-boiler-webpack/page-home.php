<?php
/**
Template Name: Homepage
 */
 get_header();
 // start loop
 while ( have_posts() ) : the_post();

 get_template_part( 'template-parts/section', 'hero' );
 ?>

<div class="page-home">

<section class="section-wrap bg-white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        Homepage content, yo.
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section>

</div><!--/.page-home-->

<?php endwhile; // End loop ?>

<?php
get_footer();
?>
