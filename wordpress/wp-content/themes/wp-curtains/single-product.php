<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <main>
      <section class="card-product xs-plr-15">

        <div class="breadcrumbs ta-l">
          <div class="container">
            <div class="row">
              <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
            </div>
          </div>
        </div><!-- end breadcrumbs -->

        <div class="container">
          <div class="row">
            <div class="card-product-section section-block">
              <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 card-product__wrap nopadding">

                <div class="col-xs-12 col-md-6 col-lg-7 nopadding card-product__img">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                  <?php if( get_field('sale') ): ?>
                    <span class="action upper fira-bold">НА АКЦИИ</span>
                  <?php endif; ?>
                  <span class="num upper fira-bold"><?php the_title(); ?></span>
                </div><!-- end card-product__img -->

                <div class="col-xs-12 col-md-6 col-lg-5 card-product__descr">
                  <div class="block-tittle">
                   <?php $terms = get_the_terms( get_the_ID(), 'categories'); if( !empty($terms) ) { foreach ($terms as $term) { ?>
                    <h3 class="upper"><?php echo $term->description; ?> <?php the_title(); ?></h3>
                   <?php } } else { ?>
                    <h3 class="upper"><?php the_title(); ?></h3>
                   <?php } ?>
                  </div>
                  <?php the_content(); ?>

                  <div class="card-product__characters">
                    <div class="block-tittle upper">характеристики</div>
                    <?php $terms = get_the_terms( get_the_ID(), 'characteristics'); if( !empty($terms) ) { foreach ($terms as $term) { $image = get_field('image', $term ); ?>
                      <div class="block">
                        <i class="ic" style="background-image: url(<?php echo $image['url']; ?>);"></i>
                        <p><?php echo $term->name; ?></p>
                      </div><!-- end block -->
                    <?php } } ?>
                  </div>
                </div><!-- end card-product__descr -->

                <div class="clearfix"></div>
              </div><!-- end card-product__wrap -->

              <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 sidebar nopadding">
                <div class="block block--product upper">
                <?php if( get_field('country') ): ?>
                  <div class="block-row--product">
                    <div class="left lilac fira-bold">СТРАНА</div>
                    <div class="right orange"><?php the_field('country'); ?></div>
                  </div>
                <?php endif; ?>

                <?php if( get_field('ingredients') ): ?>
                  <div class="block-row--product">
                    <div class="left lilac fira-bold">СОСТАВ</div>
                    <div class="right orange"><?php the_field('ingredients'); ?></div>
                  </div>
                <?php endif; ?>

                <?php if( get_field('height') ): ?>
                  <div class="block-row--product">
                    <div class="left lilac fira-bold">ВЫСОТА</div>
                    <div class="right orange"><?php the_field('height'); ?> м.</div>
                  </div>
                <?php endif; ?>

                <?php if( get_field('price') ): ?>
                  <div class="block-row--product">
                    <div class="left lilac fira-bold">стоимость</div>
                    <div class="right orange"><?php the_field('price'); ?> BYN</div>
                  </div>
                <?php endif; ?>

                </div><!-- end block -->

                <div class="block block--attention">
                  <div class="block-table">
                    <div class="left"><i class="ic ic-attention"></i></div>
                    <div class="right">
                      <p class="upper gray-l">Пожалуйста,
                        <br> уточняйте наличие выбранной ткани у консультанта</p>
                    </div>
                  </div>
                </div><!-- end block -->
              </div>
              <!-- end sidebar -->
              <div class="clearfix"></div>
            </div>
            <!-- end card-product-section -->
            <div class="decor-illustration section-block">
              <div class="block-tittle">
                <h3 class="upper">Примеры оформления</h3>
              </div>
              <div class="decor-illustration-inner">

                <?php $terms = get_the_terms( get_the_ID(), 'examples'); if( !empty($terms) ) { foreach ($terms as $term) { $image = get_field('image', $term ); ?>
                  <a href="#" class="we-make__link">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $term->name; ?>">
                    <div class="informer">
                      <span class="tittle fira-bold upper orange"><?php echo $term->name; ?></span>
                      <?php echo $term->description; ?>
                    </div>
                  </a>
                <?php } } ?>

              </div>
            </div><!-- end decor-illustration -->

            <?php get_template_part('includes/howorder'); ?>

          </div>
        </div>
      </section>
      <!-- end call-disainer -->
    </main>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
