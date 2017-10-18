<?php
get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

 <section class="section-wrap page-intro">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content', 'search' );

            endwhile;

            the_posts_navigation();

          else :

            get_template_part( 'template-parts/content', 'none' );

          endif; ?>
        </div><!--/.col-->
      </div><!--/.row-->
    </div><!--/.container-->
  </section>
