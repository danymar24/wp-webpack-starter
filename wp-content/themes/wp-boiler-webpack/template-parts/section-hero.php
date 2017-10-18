<?php
// Get hero bg image field
$hero_bg = get_field('hero_bg');
$is_full_height = get_field('hero_is_full_height');
if(!$hero_bg) {
  $hero_bg = get_template_directory_uri() . '/public/images/hero-bg.jpg';
}
?>
<section class="hero page-header vertical-center <?php if ($is_full_height == true) : echo 'full-height'; endif ?>" style="background-image:url('<?php echo $hero_bg; ?>');">
  <div class="container-fluid">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->
