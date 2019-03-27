<?php
/*
Template Name: Blog
*/

get_header(); ?>
<div class="row">
    <div class="col-md-12">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php get_template_part( 'template-parts/section', 'hero' ); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <?php get_template_part( 'template-parts/content', 'posts' ); ?>
    </div>
    <div class="col-md-3">
        <?php get_template_part( 'template-parts/section', 'categories'); ?>
    </div>
</div>


<?php get_footer(); ?>