<?php /* Template Name: Catalog Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <main>
      <section class="catalog-page">
        <div class="container">
          <div class="row">
            <div class="page-tittle ">
              <h1 class="upper phil-reg"><?php the_title(); ?></h1>
              <div class="breadcrumbs">
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </div>
            </div><!-- end page-tittle -->

            <div class="section-body">
              <div class="catalog mb">

                <div class="col-xs-12 col-md-6 catalog-page__left pl-none">
                  <div class="inner inner--catalog1">
                    <?php $image = get_field('image_l'); if( !empty($image) ) { ?>
                      <?php $style =  'style="background-image: url('. $image['url'] .');"' ; ?>
                    <?php } else { ?>
                      <?php $style = ''; ?>
                    <?php } ?>
                    <a href="<?php the_field('link_l'); ?>" class="upper" <?php echo $style; ?>>
                      <div class="text">
                        <div class="tittle cream"><?php the_field('title_l'); ?></div>
                        <?php if( have_rows('cats_l') ): while ( have_rows('cats_l') ) : the_row(); ?>
                          <p class="lilac"><?php the_sub_field('item'); ?></p>
                        <?php endwhile; endif; ?>
                      </div>
                    </a>
                  </div>
                  <div class="catalog-descr">
                    <?php the_field('description'); ?>
                  </div>
                </div>

                <div class="col-xs-12 col-md-6 catalog-page__right pr-none">
                  <div class="inner inner--catalog1 catalog6">
                    <?php $image = get_field('image_r'); if( !empty($image) ) { ?>
                      <?php $style =  'style="background-image: url('. $image['url'] .');"' ; ?>
                    <?php } else { ?>
                      <?php $style = ''; ?>
                    <?php } ?>
                    <a href="<?php the_field('link_r'); ?>" class="upper" <?php echo $style; ?>>
                      <div class="text">
                        <div class="tittle cream"><?php the_field('title_r'); ?></div>
                        <?php if( have_rows('cats_r') ): while ( have_rows('cats_r') ) : the_row(); ?>
                          <p class="lilac"><?php the_sub_field('item'); ?></p>
                        <?php endwhile; endif; ?>
                      </div>
                    </a>
                  </div>
                  <div class="catalog-descr">
                    <?php the_field('description_r'); ?>
                  </div>
                </div>

                <div class="clearfix"></div>
              </div><!-- end catalog -->
            </div><!-- end section-body -->
          </div>
        </div><!--  end container -->
      </section>

      <?php get_template_part('includes/calldisainer'); ?>

    </main>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
