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
            <?php $slide_image = $slide['hero_slide_img']; ?>
            <?php $image = wp_get_attachment_image_src( $slide_image, 'medium' ); ?>
            <div class="carousel-item">
                <img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="<?php echo $slide['hero_slide_alt']; ?>">
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php else : ?>
  <?php endif; ?>

<?php elseif ($hero_type == "Image"): ?>
    <div class="post-image <?php if ($is_overlay == true) : echo 'has-overlay'; endif; ?>">
        <?php $image = wp_get_attachment_image_src( $hero_bg, 'medium' ); ?>
        <img src="<?php echo $image[0]; ?>" class="d-block w-100" alt="<?php echo $slide['hero_slide_alt']; ?>">
    </div>
<?php else : ?>
<?php endif; ?>
