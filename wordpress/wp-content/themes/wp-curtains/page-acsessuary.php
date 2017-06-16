<?php /* Template Name: Acsessuary Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="acsessuary">
      <div class="container">
        <div class="row">
          <div class="page-tittle ">
            <h1 class="upper phil-reg"><?php the_title(); ?></h1>
            <div class="breadcrumbs">
              <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
            </div>
          </div><!-- end page-tittle -->

          <div class="section-body">
            <!-- Nav tabs -->

            <ul class="nav nav-tabs ta-l">
              <?php $wcatTerms = get_terms('types', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                <?php if ($i == 1) { $class = ' class="active"'; } else { $class = ''; } ?>
                <li<?php echo $class; ?>><a href="#tab<?php echo $i; ?>" data-toggle="tab"><?php echo $wcatTerm->name; ?></a></li>
              <?php $i++; endforeach; ?>
            </ul>

            <!-- Nav tabs content -->
            <div class="tab-content">

              <?php $wcatTerms = get_terms('types', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                <?php if ($i == 1) { $class = ' in active'; } else { $class = ''; } ?>
                <div class="tab-pane fade<?php echo $class; ?>" id="tab<?php echo $i; ?>">
                  <div class="acsessuary-promo">
                    <div class="left bg-3"></div>
                    <div class="descr upper">
                      <div class="lilac phil-bold">
                        <p class="h1"><?php the_field('numbers', $wcatTerm); ?></p><span>моделей</span>
                      </div>
                      <p class="gray-l">В наличии и под заказ</p>
                    </div>
                  </div>
                  <!-- end acsessuary-promo -->
                  <div class="acsessuary-promo-text xs-plr-15">
                    <div class="col-xs-12 col-md-6 nopadding left">
                      <?php the_field('descr_l', $wcatTerm); ?>
                    </div>
                    <div class="col-xs-12 col-md-6 nopadding right">
                      <?php the_field('descr_r', $wcatTerm); ?>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <!-- end acsessuary-promo-text -->
                  <div class="block-tittle xs-plr-15">
                    <h3 class="upper">МОДЕЛИ В НАЛИЧИИ</h3>
                  </div>
                  <!-- end block-tittle -->

                  <div class="acsessuary-models xs-plr-15">
                  <?php
                    $n = 1;
                    $args = array(
                    'post_type' => 'accessories',
                    'showposts' => 100,
                    'tax_query' => array(
                      array (
                        'taxonomy' => 'types',
                        'field' => 'slug',
                        'terms' => $wcatTerm->slug
                        )
                      ),
                    );
                      // The Loop
                      $news_secondary_query = new WP_Query( $args );
                      while ( $news_secondary_query->have_posts() ) :
                        $news_secondary_query->the_post();

                    ?>
                      <?php if ($n == 1) { $class = ' in active'; } else { $class = ''; } ?>

                        <div id="post-<?php the_ID(); ?>" class="acsessuary-models__block">
                          <a href="#" class="inner">
                            <div class="img">
                              <?php if ( has_post_thumbnail()) { ?>
                                <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                              <?php } else { ?>
                                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                              <?php } ?>
                            </div>
                            <div class="bot upper fira-bold">
                              <span class="num orange"><?php the_title(); ?></span>
                              <span class="price lilac fl-r"><?php the_field('price'); ?>15 BYN</span>
                            </div>
                            <p class="help">Уточняйте наличие у консультанта</p>
                          </a>
                        </div><!-- end acsessuary-models__block -->

                      <?php $n++; endwhile; wp_reset_postdata(); ?>

                    <div class="clearfix"></div>
                  </div>
                  <!-- end acsessuary-models -->
                </div><!-- end tab1 -->
              <?php $i++; endforeach; ?>

            </div>
            <!-- end tab-content -->
          </div>
          <!-- end section-body -->
        </div>
      </div>
    </section><!-- end acsessuary -->

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
