<?php
get_header();

get_template_part( 'template-parts/section', 'hero' );
?>

<div class="page-interior page-default">

<section class="section-wrap">
  <div class="container">
    <div class="row entry-content">
      <div class="col-xs-12">
        <?php
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        ?>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section>

</div><!--/.page-inteior-->

<?php
get_footer();
?>
