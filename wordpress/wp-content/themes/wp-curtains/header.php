<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="wrapper">

    <header class="header shaddow">
      <div class="h-top">
        <div class="container">
          <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-5 h-top-logo">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/h-logo.png" alt="logo"></a>
            </div><!-- end h-top-logo -->

            <div class="col-xs-12 col-sm-8 col-md-7 h-top-info lilac">
              <div class="block block--consult">
                <a href="#" class="link lilac"><i class="ic ic-chat"></i><span>Консультация <br> дизайнера</span></a>
              </div>
              <div class="block block--phones">
                <i class="ic ic-h_phone"></i>
                <div class="text">
                  <p><small>+375 (29)</small> 234-26-51 </p>
                  <p><small>+375 (29)</small> 234-26-51 </p>
                </div>
              </div>
              <div class="block block--like"><a href="<?php echo home_url(); ?>/wishlist.htm"><i class="ic ic-heart"></i></a></div>
            </div><!--  end h-top-info -->

            <div class="clearfix"></div>
          </div>
          <div class="descor"></div>
        </div>
      </div><!-- end h-top -->

      <div class="h-menu">
        <div class="container">
          <div class="row">
            <div class="hamburger hamburger--elastic">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
            <?php wpeHeadNav(); ?>
          </div>
        </div>
      </div><!-- end h-menu -->
    </header>

