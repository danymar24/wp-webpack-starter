<?php
/**
Template Name: Homepage
 */
 get_header();
 // start loop
 while ( have_posts() ) : the_post();

 //get_template_part( 'template-parts/section', 'hero' );

 // set custom field variables; Field Group == Template Home
 //$home_stat_properties = get_field('home_stat_properties');

 ?>
<section class="hero page-header vertical-center">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="section-wrap home-intro bg-white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section>

<?php endwhile; // End loop ?>

<?php
//get_sidebar();
get_footer();
?>
