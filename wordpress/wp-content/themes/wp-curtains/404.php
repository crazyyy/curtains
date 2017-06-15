<?php get_header(); ?>
  <section class="blog-page">

    <div class="container">
      <div class="row">
        <div class="page-tittle">
          <h1 class="upper phil-reg"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        </div><!-- end page-tittle -->
      </div>
    </div><!--  end container -->

    <div id="post-<?php the_ID(); ?>" <?php post_class('blog-page__block img-left pt-none xs-plr-15'); ?>>
      <div class="container">
        <div class="row">
          <div class="section-body">
            <div class="col-xs-12 col-md-12 nopadding descr">
              <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
              <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
            </div>
            <div class="clearfix"></div>
          </div><!-- end section-body -->
        </div>
      </div>
    </div><!-- end blog-page__block -->

  </section>
<?php get_footer(); ?>
