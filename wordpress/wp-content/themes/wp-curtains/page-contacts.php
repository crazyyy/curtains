<?php /* Template Name: Contacts Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <main>
      <section class="pb-none">
        <div class="container">
          <div class="row">
            <div class="page-tittle ">
              <h1 class="upper phil-reg"><?php the_title(); ?></h1>
              <div class="breadcrumbs">
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </div>
            </div><!-- end page-tittle -->
          </div>
        </div><!--  end container -->
      </section>

      <?php if( have_rows('shops') ): ?>
        <div id="map">
          <?php while ( have_rows('shops') ) : the_row(); $location = get_sub_field('maps'); ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
              <div class="infowindow-map">
                <div class="infowindow-head">
                  <h3 class="upper orange fira-bold"><?php the_sub_field('name'); ?></h3><p><?php echo $location['address']; ?></p>
                </div>
                <?php $i = 0; if( have_rows('worktime') ): while( have_rows('worktime') ): the_row(); ?>
                  <?php if ($i == 0) { ?>
                    <p>Время работы: <?php the_sub_field('days'); ?>: <?php the_sub_field('time'); ?></p>
                  <?php } else { ?>
                    <p class="lilac"><?php the_sub_field('days'); ?>: <?php the_sub_field('time'); ?></p>
                  <?php } ?>
                <?php $i++; endwhile; endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <section class="contacts-shop">
        <div class="container">
          <div class="row">

            <?php if( have_rows('shops') ): while( have_rows('shops') ): the_row(); ?>
              <div class="col-xs-6 col-md-3 block nopadding xs-plr-15">
                <div class="contacts-shop__top">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/marker.png">
                  <div class="tittle upper fira-bold orange"><?php the_sub_field('name'); ?></div>
                  <p><?php the_sub_field('adress'); ?></p>
                </div>
                <div class="contacts-shop__bot upper">
                  <i class="ic ic-clock"></i>
                  <?php $i = 0; if( have_rows('worktime') ): while( have_rows('worktime') ): the_row(); ?>
                    <?php if ($i == 0) { ?>
                      <p class="gray"><?php the_sub_field('days'); ?>: <?php the_sub_field('time'); ?></p>
                    <?php } else { ?>
                      <p class="lilac"><?php the_sub_field('days'); ?>: <?php the_sub_field('time'); ?></p>
                    <?php } ?>
                  <?php $i++; endwhile; endif; ?>
                </div>
              </div><!-- end block -->
            <?php endwhile; endif; ?>

            <div class="clearfix"></div>
          </div>
        </div>
      </section><!-- end contacts-shop -->

      <?php get_template_part('includes/calldisainer'); ?>

    </main>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
