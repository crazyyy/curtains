<?php /* Template Name: Zhaluzi Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <main>
      <section class="zhaluzi xs-plr-15">
        <div class="container">
          <div class="row">
            <div class="page-tittle ">
              <h1 class="upper phil-reg"><?php the_title(); ?></h1>
              <div class="breadcrumbs">
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </div>
              </div>
            </div><!-- end page-tittle -->

            <div class="section-body">
              <div class="filter-orange upper">

                <div class="col-xs-12 col-lg-5 nopadding">
                  <span class="phil-reg">РАСПОЛОЖЕНИЕ:</span>
                  <?php $wcatTerms = get_terms('location', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                    <?php if ($i == 1) { $class = 'active"'; } else { $class = ''; } ?>
                    <a href="#" class="btn btn-orange-f filter-1 <?php echo $class; ?>" data-slug="<?php echo $wcatTerm->slug; ?>"><?php echo $wcatTerm->name; ?></a>
                  <?php $i++; endforeach; ?>
                </div>

                <div class="col-xs-12 col-lg-7 nopadding">
                  <span class="phil-reg">ИСПОЛНЕНИЕ:</span>
                  <?php $wcatTerms = get_terms('rendering', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                    <?php if ($i == 1) { $class = 'active"'; } else { $class = ''; } ?>
                    <a href="#" class="btn btn-orange-f filter-2 <?php echo $class; ?>" data-slug="<?php echo $wcatTerm->slug; ?>"><?php echo $wcatTerm->name; ?></a>
                  <?php $i++; endforeach; ?>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- end filter-orange -->

              <?php query_posts("showposts=12&post_type=shutter"); ?>
              <?php $n = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ($n == 1) { $class = 'zhaluzi-card--active'; } else { $class = ''; } ?>

                <?php $location = wp_get_post_terms($post->ID, 'location'); ?>
                <?php $loc = array_shift($location); ?>
                <?php $loc = $loc->slug; ?>
                <?php $rendering = wp_get_post_terms($post->ID, 'rendering'); ?>
                <?php $rend = array_shift($rendering); ?>
                <?php $rend = $rend->slug; ?>

                <div class="zhaluzi-card <?php echo $class; ?> <?php echo $loc; ?>_<?php echo $rend; ?>">
                  <div class="col-xs-12 col-sm-5 col-lg-5 nopadding zhaluzi-card-img">
                    <?php if ( has_post_thumbnail()) { ?>
                      <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } else { ?>
                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } ?>
                    <div class="zhaluzi-card-img__price upper phil-bold">
                      <div class="left lilac">от <span><?php the_field('time'); ?></span> дня</div>
                      <div class="right orange">от <span><?php the_field('price'); ?></span> BYN</div>
                    </div>
                    <a href="<?php echo home_url(); ?>/portfolio.htm" class="btn btn-gallery fira-bold"><i class="ic ic-gal"></i><span>ГАЛЕРЕЯ ВЫПОЛНЕННЫХ РАБОТ</span></a>
                  </div>
                  <!-- end zhaluzi-card-img -->
                  <div class="col-xs-12 col-sm-7 col-lg-7 nopadding zhaluzi-card-descr">
                    <h2 class="block-tittle fira-bold upper"><?php the_title(); ?></h2>
                    <div class="block">
                      <div class="block-tittle-sm upper">КОНСТРУКЦИЯ:</div>
                      <?php the_content(); ?>
                    </div>
                    <!-- end block -->
                    <div class="block">
                      <div class="block-tittle-sm upper">ПРИНЦИП РАБОТЫ:</div>
                      <?php the_field('workprincipe'); ?>
                    </div>
                    <!-- end block -->
                    <div class="block">
                      <div class="block-tittle-sm upper">ОСОБЕННОСТИ:</div>
                      <?php $specs_list = wp_get_post_terms($post->ID, 'specs'); ?>
                      <?php foreach ($specs_list as $specs) { ?>
                        <div class="block-inline">
                          <?php $image = get_field('image', $specs);if( !empty($image) ): ?>
                            <i class="ic ic-sun" style="background-image: url(<?php echo $image['url']; ?>);"></i>
                          <?php endif; ?>
                          <p><?php echo $specs->name; ?></p>
                        </div>
                      <?php } ?>
                    </div>
                    <!-- end block -->
                    <div class="block">
                      <div class="block-tittle-sm upper">МАТЕРИАЛЫ:</div>
                      <div class="materials-slider-wrap">
                        <div class="materials-slider-<?php echo $n; ?>">
                          <?php $color_list = wp_get_post_terms($post->ID, 'materials'); ?>
                          <?php foreach ($color_list as $color) { ?>
                            <div class="materials-slider__block">
                              <div class="inner color-1" style="background-color: <?php the_field('color', $color); ?>"></div>
                            </div>
                          <?php } ?>
                        </div>
                        <!--  end materials-slider -->
                      </div>
                      <!-- end materials-slider-wrap -->
                    </div>
                    <!-- end block -->
                  </div>
                  <!-- end zhaluzi-card-descr -->
                  <div class="clearfix"></div>
                </div><!-- end zhaluzi-card -->

              <?php $n++; endwhile; endif; ?>
              <?php wp_reset_query(); ?>

              <div class="zhaluzi-info">
                <div class="col-xs-12 col-md-12 nopadding ">
                  <?php the_content(); ?>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- end zhaluzi-card -->
            </div>
            <!-- end section-body -->
          </div>

      </section><!-- end page -->

       <?php get_template_part('includes/formcallback'); ?>

    </main>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
