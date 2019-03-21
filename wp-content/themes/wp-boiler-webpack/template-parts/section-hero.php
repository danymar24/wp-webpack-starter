<?php
//Custom Field Group == Section-Hero
  $hero_type = get_field('hero_type');
  $hero_bg = get_field('hero_bg');
  $is_overlay = get_field('hero_is_overlay'); //boolean
  $is_full_height = get_field('hero_is_full_height');//boolean
  $hero_title = get_field('hero_title');
  $hero_subtitle = get_field('hero_subtitle');
  $hero_cta_title = get_field('hero_cta_title');
  $hero_cta_link = get_field('hero_cta_link');
?>

<?php if ($hero_type == "Slider") : ?>
  <?php
  $slides = get_field('hero_slider');
  if ($slides) : ?>

    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach($slides as $slide) : ?>
          <div class="carousel-item">
            <img src="<?php echo $slide['hero_slide_img']; ?>" class="d-block w-100" alt="<?php echo $slide['hero_slide_alt']; ?>">
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $slide['hero_slide_title']; ?></h5>
              <p><?php echo $slide['hero_slide_subtitle']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <?php else : ?>
  <?php endif; ?>

<?php elseif ($hero_type == "Image"): ?>
<section class="hero hero-type-default page-header vertical-center <?php if ($is_full_height == true) : echo 'full-height'; endif; ?><?php if ($is_overlay == true) : echo ' has-overlay'; endif; ?>" style="background-image:url('<?php echo $hero_bg; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 hero-text">
        <?php if ($hero_title) : ?>
          <h1 class="hero-title"><?php echo $hero_title; ?></h1>
        <?php elseif ( is_search() ) : ?>
          <h1 class="hero-title"><?php printf( esc_html__( 'Results for: %s', 'sparxoo-dev' ), '<strong>' . get_search_query() . '</strong>' ); ?></h1>
        <?php elseif ( is_404() ) : ?>
          <h1 class="hero-title"><?php printf( esc_html__( 'Page Does Not Exist: 404', 'sparxoo-dev' ), '<strong>' . get_search_query() . '</strong>' ); ?></h1>
        <?php else : ?>
          <h1 class="hero-title"><?php the_title(); ?></h1>
        <?php endif; ?>
        <?php if ($hero_subtitle) : ?>
          <p class="hero-subtitle"><?php echo $hero_subtitle; ?></p>
        <?php else : ?>
        <?php endif; ?>
        <?php if ($hero_cta_link) : ?>
          <a class="btn secondary hvr-ripple-out" href="<?php echo $hero_cta_link; ?>"><?php echo $hero_cta_title; ?></a>
        <?php else : ?>
        <?php endif; ?>
      </div><!--/.col-->
    </div><!--/.row-->

  </div><!--/.container-->
</section><!--/.hero.hero-type-default-->
<?php else : ?>
<?php endif; ?>
