<?php /* Template Name: Portfolio Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <main>

      <section class="portfolio xs-plr-15">
        <div class="container">
          <div class="row">
            <div class="page-tittle ">
              <h1 class="upper phil-reg"><?php the_title(); ?></h1>
              <div class="breadcrumbs">
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </div>
            </div>
            <!-- end page-tittle -->
            <div class="section-body">
              <div class="portfolio-filter upper">
                <div class="portfolio-filter__top">
                  <span class="gray-l">ШТОРЫ ДЛЯ:</span>
                  <a href="#" class="btn btn-filter all active" data-slug="all">все</a>
                  <?php $wcatTerms = get_terms('room', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                    <a href="#" class="btn btn-filter" data-slug="<?php echo $wcatTerm->slug; ?>"><?php echo $wcatTerm->name; ?></a>
                  <?php $i++; endforeach; ?>
                </div>
                <div class="portfolio-filter__bot">
                  <span class="gray-l">Примеры оформления:</span>
                  <a href="#" class="btn btn-filter all active" data-slug="all">все</a>
                  <?php $wcatTerms = get_terms('exampl', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                    <a href="#" class="btn btn-filter btn-filter--img" data-slug="<?php echo $wcatTerm->slug; ?>">
                    <?php $image = get_field('image', $wcatTerm);if( !empty($image) ): ?>
                      <img class="black" src="<?php echo $image['url']; ?>" alt="<?php echo $wcatTerm->name; ?>">
                    <?php endif; ?>
                    <?php $image = get_field('image_a', $wcatTerm);if( !empty($image) ): ?>
                      <img class="pink" src="<?php echo $image['url']; ?>" alt="<?php echo $wcatTerm->name; ?>">
                    <?php endif; ?>
                  </a>
                  <?php $i++; endforeach; ?>
                  <span href="#" class="btn btn-reset fl-r">СБРОСИТЬ ФИЛЬТР</span>
                </div>
              </div>
              <!-- end portfolio-filter -->
              <div class="portfolio-rezalt">

                <?php query_posts("showposts=100&post_type=portfolio"); ?>
                <?php $n = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <?php $room = wp_get_post_terms($post->ID, 'room'); ?>
                  <?php $room = array_shift($room); ?>
                  <?php $room = $room->slug; ?>
                  <?php $exampl = wp_get_post_terms($post->ID, 'exampl'); ?>
                  <?php $exampl = array_shift($exampl); ?>
                  <?php $exampl = $exampl->slug; ?>


                  <div class="block portfolio-rezalt--block portfolio-rezalt--active room_<?php echo $room; ?> room_all exampl_<?php echo $exampl; ?> exampl_all">
                    <?php if ( has_post_thumbnail()) { ?>
                      <a href="<?php echo the_post_thumbnail_url(''); ?>" data-toggle="lightbox" data-gallery="example-gallery">
                        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                      <i class="ic ic-loop"></i>
                    </a>
                    <?php } else { ?>
                      <a href="<?php echo catchFirstImage(); ?>" data-toggle="lightbox" data-gallery="example-gallery">
                        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                        <i class="ic ic-loop"></i>
                      </a>
                    <?php } ?>

                  </div><!-- end block -->

                <?php $n++; endwhile; endif; ?>
                <?php wp_reset_query(); ?>

                <div class="clearfix"></div>
              </div>
              <!-- end portfolio-rezalt -->
            </div>
            <!-- end section-body -->
          </div>
        </div>
      </section>
      <!-- end page -->

      <?php get_template_part('includes/calldisainer'); ?>

    </main>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
