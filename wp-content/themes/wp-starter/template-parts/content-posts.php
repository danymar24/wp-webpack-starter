<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gromkt-dev
 */

  $args = array(
    'post_type'      => '',
    'posts_per_page' => 5,
    'paged'          => $paged,
  );

  $temp = $wp_query;
  $wp_query= null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  if ( $wp_query->have_posts() ) :
?>

    <div class="row interior">
        <div class="col-sm-12">
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <div class="row post">
                    <div class="col-md-4">
                        <div class="post-thumbnail">
                            <?php get_template_part( 'template-parts/content', 'thumbnails' ); ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="row">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination">
                        <div class="pagination-link alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                        <div class="pagination-link alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
<?php else : ?>

    <h1>There are no posts in the blog!.</h1>

<?php endif; ?>