<?php
  $args = array(
    'post_type' => '',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :

// get cat name

?>



<div class="row interior">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php endwhile; ?>
</div><!--/.row-->
<?php endif; ?>
