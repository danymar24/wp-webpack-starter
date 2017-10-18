<?php
// Default single page
get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

<div class="page-single">

<section class="section-wrap">
  <div class="container">
    <div class="entry-content">
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    ?>
    </div><!--/.entry-content-->
  </div><!--/.container-->
</section>

</div><!--/.page-single-->

<?php
get_footer(); ?>
