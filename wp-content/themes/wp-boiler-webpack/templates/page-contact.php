<?php
    /*
    Template Name: Contact
    Field group: Page - Contact
    */

    get_header();

    get_template_part( 'template-parts/section', 'hero' ); 
    get_template_part( 'template-parts/content', 'page' );
?>
    
    <div class="row">
        <div class="col-md-6"><?php the_field('address') ?></div>
        <div class="col-md-6"><?php the_field('map') ?></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php the_field('form'); ?>
        </div>
    </div>
    <?php
    get_footer();

?>
