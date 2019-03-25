<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>

<?php if(get_field('analytics_key', 'option')) : ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('analytics_key', 'option'); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', <?php the_field('analytics_key', 'option'); ?>);
  </script>

<?php endif; ?>

</head>

<body <?php body_class(); ?>>

<?php
  //Custom Field Group == Site Options
  $site_logo = get_field('site_logo', 'option');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <?php if ($site_logo) : ?>
      <img src="<?php echo $site_logo ?>" width="30" height="30" class="d-inline-block align-top" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" rel="logo">
    <?php endif; ?>
    <?php bloginfo('name'); ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-primary') ); ?>
  </div>
</nav>

<div class="container">
