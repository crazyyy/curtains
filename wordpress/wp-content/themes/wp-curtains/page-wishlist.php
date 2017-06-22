<?php /* Template Name: Wishlist Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <main>

    <div class="category-banner bg-7">
      <div class="container">
        <div class="row">
          <div class="page-tittle ">
            <h1 class="upper phil-reg"><?php the_title(); ?></h1>
            <div class="breadcrumbs">
              <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
            </div>
          </div><!-- end page-tittle -->
        </div>
      </div>
    </div><!-- end category-banner -->

    <section class="card-product xs-plr-15">
      <div class="container">
        <div class="row">
          <div class="card-product-section section-block clearfix">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 card-product__wrap nopadding">
              <div class="card-products-cat-wrap clearfix">
                <br><br><br><br><br><br><br><br><br><br>
                <div class="loader col-md-12 col-xs-12">
                  <span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span><span class="loader-block"></span>
                </div>

              </div><!-- end card-products-cat-wrap -->

              <div class="card-product__descr">
                <?php the_content(); ?>
              </div><!-- /.card-product__descr -->

            </div><!-- end card-product__wrap -->
          </div><!-- end card-product-section -->
        </div>
      </div>
    </section>
    <?php get_template_part('includes/calldisainer'); ?>

  </main>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
