<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="blog-page">

      <div class="container">
        <div class="row">
          <div class="page-tittle">
            <h1 class="upper phil-reg"><?php the_title(); ?></h1>
            <div class="breadcrumbs">
              <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
            </div>
          </div><!-- end page-tittle -->
        </div>
      </div><!--  end container -->

      <div id="post-<?php the_ID(); ?>" <?php post_class('blog-page__block img-left pt-none xs-plr-15'); ?>>
        <div class="container">
          <div class="row">
            <div class="section-body">
              <div class="col-xs-12 col-md-12 nopadding descr">
                <?php the_content(); ?>
                <div class="descr-head">
                  <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div><!-- end section-body -->
          </div>
        </div>
      </div><!-- end blog-page__block -->

    </section>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
