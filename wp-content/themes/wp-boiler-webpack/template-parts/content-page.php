<div class="row">
	<div class="col-md-12">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</div>
<div class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-md-12">
		<?php while ( have_posts() ) : the_post();
			the_content(); 
		endwhile ?>

	</div>
</div>
