<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<header class="header" role="banner">
    <div class="row around-xs">
      <div class="col-xs-6 col-md-2">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            LOGO
          </a>
        </div><!--/.logo-->
      </div><!--/.col-->
      <div class="col-xs-6 col-md-10">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-primary') ); ?>
        <div class="row end-xs middle-xs">
          <div class="nav-toggle row end-xs middle-xs" id="js-nav-toggle">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </div><!--/.nav-toggle-->
        </div><!--/.row-->
      </div><!--/.col-->
    </div><!--/.row-->
    <div class="nav-mobile row" id="js-nav-mobile">
      <div class="col-xs-12">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'nav-mobile-wrap') ); ?>
      </div><!--/.col-->
    </div><!--/.nav-mobile-->
</header><!--/.header-->


<div class="site-content">
