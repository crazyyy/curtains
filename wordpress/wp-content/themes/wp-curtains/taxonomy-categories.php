<?php get_header(); ?>
  <?php $term = get_queried_object(); ?>

  <main>
  <?php $image = get_field('header_image', $term); ?>
    <div class="category-banner bg-7" <?php if( !empty($image) ) { ?>style="background-image: url(<?php echo $image['url']; ?>);"<?php } ?>>
      <div class="container">
        <div class="row">
          <div class="page-tittle white decor-none mb-none">

            <h1 class="upper phil-reg"><?php echo $term->name; ?></h1>
            <div class="breadcrumbs phil-reg upper">
              <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end category-banner -->
    <section class="card-product xs-plr-15">
      <div class="container">
        <div class="row">
          <div class="card-product-section section-block">
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 sidebar pd-right nopadding">
              <div class="block block--category">
                <div class="tittle upper gray-l fira-thin">
                  <h2>КАТЕГОРИИ</h2></div>
                <div class="sidebar-category upper">
                  <div class="sidebar-category__btn lilac fira-bold">ПОРТЬЕРА</div>
                  <div class="sidebar-category__cont">
                    <ul>
                      <li><a href="#" class="orange">- Однотонная</a></li>
                      <li><a href="#" class="orange">- С рисунком</a></li>
                      <li><a href="#" class="orange">- Black OUT</a></li>
                    </ul>
                  </div>
                </div>
                <!-- end sidebar-category -->
                <div class="sidebar-category upper">
                  <div class="sidebar-category__btn lilac fira-bold">ТЮЛЬ</div>
                  <div class="sidebar-category__cont">
                    <ul>
                      <li><a href="#" class="orange">- Однотонная</a></li>
                      <li><a href="#" class="orange">- С рисунком</a></li>
                      <li><a href="#" class="orange">- Black OUT</a></li>
                    </ul>
                  </div>
                </div>
                <!-- end sidebar-category -->
                <div class="sidebar-links">
                  <a href="#" class="sidebar-category__link upper fira-bold">НОВИНКИ</a>
                  <a href="#" class="sidebar-category__link upper fira-bold">РАСПРОДАЖА</a>
                </div>
                <div class="sidebar-range">
                  <p class="upper gray-l">СТОИМОСТЬ, BYN:</p>
                  <div class="slider-wrap">
                    <div id="slider-range"></div>
                    <p>
                      <input type="text" id="amount">
                      <input type="text" id="amount_1">
                    </p>
                  </div>
                </div>
              </div>
              <!-- end block -->
              <div class="block block--attention">
                <div class="block-table">
                  <div class="left"><i class="ic ic-attention"></i></div>
                  <div class="right">
                    <p class="upper gray-l">Пожалуйста,
                      <br> уточняйте наличие выбранной ткани у консультанта</p>
                  </div>
                </div>
              </div>
              <!-- end block -->
              <div class="block sidebar-reclam upper">
                <div class="tittle lilac fira-bold">500+</div>
                <p class="text">моделей портьер в
                  <br> наличии
                  <br> в наших салонах</p>
              </div>
              <!-- end block -->
            </div>
            <!-- end sidebar -->
            <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 card-product__wrap nopadding">
              <div class="card-products-cat-wrap">

                <?php $args = array(
                  'post_type' => 'product',
                  'showposts' => 100,
                  'tax_query' => array(
                    array (
                      'taxonomy' => 'categories',
                      'field' => 'slug',
                      'terms' => $term->slug
                      )
                    ),
                  );

                  query_posts($args);
                  if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>

                  <div id="post-<?php the_ID(); ?>" class="col-xs-6 col-md-4 nopadding card-product__img card-product__img--cat">
                    <?php if ( has_post_thumbnail()) { ?>
                      <a href="<?php echo the_post_thumbnail_url('full'); ?>" data-toggle="lightbox" data-gallery="example-gallery">
                        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } else { ?>
                      <a href="<?php echo catchFirstImage(); ?>" data-toggle="lightbox" data-gallery="example-gallery">
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } ?>
                      <?php if( get_field('sale') ): ?>
                        <span class="action upper fira-bold">НА АКЦИИ</span>
                      <?php endif; ?>
                      <span class="num upper fira-bold"><?php the_title(); ?></span>
                      <i class="ic ic-loop"></i>
                    </a>
                    <a href="#" class="like" like-id="<?php the_ID(); ?>"><i class="ic ic-like"></i></a>
                  </div><!-- end card-product__img -->

                <?php endwhile; endif;
                /* Restore original Post Data
                 * NB: Because we are using new WP_Query we aren't stomping on the
                 * original $wp_query and it does not need to be reset.
                */
                wp_reset_postdata();
                ?>

                <div class="clearfix"></div>
              </div><!-- end card-products-cat-wrap -->

              <div class="card-product__descr">
                <?php the_field('description', $term); ?>
              </div><!-- /.card-product__descr -->

            </div>
            <!-- end card-product__wrap -->
            <div class="clearfix"></div>
          </div>
          <!-- end card-product-section -->
        </div>
      </div>
    </section>
    <!-- end call-disainer -->
  </main>




<?php get_footer(); ?>
