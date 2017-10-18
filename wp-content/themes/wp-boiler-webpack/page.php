<?php
get_header();

get_template_part( 'template-parts/section', 'hero' );
?>
<section class="section-wrap page-intro">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php
          while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content', 'page' );
          endwhile;
        ?>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section>


<?php
//get_sidebar();
get_footer();
?>
