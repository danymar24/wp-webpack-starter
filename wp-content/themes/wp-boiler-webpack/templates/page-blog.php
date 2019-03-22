<?php
/*
Template Name: Blog
*/

get_header();

get_template_part( 'template-parts/section', 'hero' );
get_template_part( 'template-parts/content', 'posts' );

get_footer();

?>