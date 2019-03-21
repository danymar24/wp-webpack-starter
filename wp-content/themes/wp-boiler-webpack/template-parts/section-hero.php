<?php
//Custom Field Group == Section-Hero
  $hero_type = get_field('hero_type');
  $hero_bg = get_field('hero_bg');
  $hero_bg_alt = get_field('hero_background_alt');
  $is_overlay = get_field('hero_is_overlay'); //boolean
  $hero_title = get_field('hero_title');
  $hero_subtitle = get_field('hero_subtitle');

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
<div class="page-header-image <?php if ($is_overlay == true) : echo 'has-overlay'; endif; ?>">
  <div class="header-background">
    <div class="overlay"></div>
    <img src="<?php echo $hero_bg; ?>" alt="<?php echo $hero_bg_alt; ?>">
  </div>
  <div class="hero-text">
    <?php if ($hero_title) : ?>
      <h1 class="hero-title"><?php echo $hero_title; ?></h1>
    <?php else : ?>
    <?php endif; ?>

    <?php if ($hero_subtitle) : ?>
      <p class="hero-subtitle"><?php echo $hero_subtitle; ?></p>
    <?php else : ?>
    <?php endif; ?>

  </div>
</div>
<?php else : ?>
<?php endif; ?>
