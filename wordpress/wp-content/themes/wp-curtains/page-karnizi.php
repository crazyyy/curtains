<?php /* Template Name: Karnizi Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <main>
      <section class="karnizi-page xs-plr-15">
        <div class="container">
          <div class="row">
            <div class="page-tittle ">
              <h1 class="upper phil-reg"><?php the_title(); ?></h1>
              <div class="breadcrumbs">
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
              </div>
            </div><!-- end page-tittle -->

            <div class="section-body">
              <div class="karnizi-img">
                <div class="karnizi-img-top upper">
                  <span class="span1">профиль</span>
                  <span class="span2">кронштейн</span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/karniz1.jpg" alt="karniz">
                <div class="karnizi-img-bot upper">
                  <span class="span1">фурнитура металлическая</span>
                  <span class="span2">соединительно-удленительный металлический <br> элемент для труб</span>
                  <span class="span3">Наконечник металлический</span>
                </div>
              </div><!-- end karnizi-img -->

              <div class="karnizi-type">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs ta-l">
                  <li><a class="disabled" href="#" data-toggle="tab">Вид профиля:</a></li>
                  <?php $wcatTerms = get_terms('variant', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                    <?php if ($i == 1) { $class = ' class="active"'; } else { $class = ''; } ?>
                    <li <?php echo $class; ?>><a href="#tab-karnizi<?php echo $i; ?>" data-toggle="tab"><?php echo $wcatTerm->name; ?></a></li>
                  <?php $i++; endforeach; ?>
                </ul>

                <!-- Nav tabs content -->
                <div class="tab-content">
                  <?php $wcatTerms = get_terms('variant', array('hide_empty' => 0, 'parent' =>0)); $i = 1; foreach($wcatTerms as $wcatTerm) : ?>
                    <?php if ($i == 1) { $class = 'tab-pane fade in active'; } else { $class = 'tab-pane fade'; } ?>

                  <div class="<?php echo $class; ?>" id="tab-karnizi<?php echo $i; ?>">

                    <?php
                      $n = 1;
                      $args = array(
                      'post_type' => 'eaves',
                      'showposts' => 100,
                      'tax_query' => array(
                        array (
                          'taxonomy' => 'variant',
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

                        <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block" data-id="<?php the_ID(); ?>">
                          <a href="#" data-toggle="modal" data-target="#modal_eaves">
                            <?php if ( has_post_thumbnail()) { ?>
                              <img src="<?php echo the_post_thumbnail_url('small'); ?>" data-image="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                            <?php } else { ?>
                              <img src="<?php echo catchFirstImage(); ?>" data-image="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                            <?php } ?>
                            <span class="orange fira-bold karnizi--title"><?php the_title(); ?></span>
                          </a>
                          <div class="karnizi-type__block-additional">
                            <ul>
                              <?php $color_list = wp_get_post_terms($post->ID, 'colour'); ?>
                              <?php foreach ($color_list as $color) { ?>
                                <li class="eaves-colors" data-color="<?php the_field('colours', $color); ?>"><?php echo $color->name; ?></li>
                              <?php } ?>
                            </ul>
                            <span class="country"><?php $term_list = wp_get_post_terms($post->ID, 'country', array("fields" => "names")); echo $term_list[0]; ?></span>
                            <span class="width"><?php the_field('width'); ?></span>
                            <span class="diametr"><?php the_field('diametr'); ?></span>
                          </div><!-- /.karnizi-type__block-additional -->
                        </div><!-- end karnizi-type__block -->

                      <?php $n++; endwhile; wp_reset_postdata(); ?>

                    <div class="clearfix"></div>
                  </div><!-- end tab-karnizi1 -->

                  <?php $i++; endforeach; ?>

                </div>
                <?php the_content(); ?>
              </div><!-- end karnizi-type -->

              <div class="karnizi-sliders">
                <?php $i = 1; if( have_rows('description') ): ?>
                  <?php while( have_rows('description') ): the_row(); ?>

                    <div class="karnizi-sliders-row">
                      <div class="col-xs-12 col-md-4 karnizi-sliders-slider nopadding">
                        <div class="karnizi-sliders__slider">
                          <?php $images = get_sub_field('gallery'); if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                              <div class="karnizi-sliders__block">
                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                              </div>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </div><!-- end karnizi-sliders__slider -->
                      </div><!-- end karnizi-sliders-slider -->

                      <div class="col-xs-12 col-md-8 karnizi-sliders-text">
                        <div class="block-tittle">
                          <h3 class="upper"><?php the_sub_field('title'); ?></h3>
                        </div>
                        <?php if(get_sub_field('descr_one')) { ?>
                          <?php the_sub_field('descr_one');  ?>
                        <?php } else { ?>

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs ta-l">
                            <?php $n = 1; while( have_rows('types_of') ): the_row(); ?>
                              <?php if ($n == 1) { ?>
                                <?php $class = 'class="active"'; ?>
                              <?php } else { ?>
                                <?php $class = ''; ?>
                              <?php } ?>
                              <li <?php echo $class; ?>><a href="#tab-karnizi-typei<?php echo $i; ?>n<?php echo $n; ?>" data-toggle="tab"><?php the_sub_field('types_title'); ?></a></li>
                            <?php $n++; endwhile; ?>
                          </ul>

                          <!-- Nav tabs content -->
                          <div class="tab-content">
                            <?php $n = 1; while( have_rows('types_of') ): the_row(); ?>
                              <?php if ($n == 1) { ?>
                                <?php $class = 'tab-pane fade in active'; ?>
                              <?php } else { ?>
                                <?php $class = 'tab-pane fade'; ?>
                              <?php } ?>
                              <div class="<?php echo $class; ?>" id="#tab-karnizi-typei<?php echo $i; ?>n<?php echo $n; ?>">
                                <?php the_sub_field('types_descr'); ?>
                              </div>
                            <?php $n++; endwhile; ?>
                          </div>

                        <?php } ?>
                      </div><!-- end karnizi-sliders-slider -->
                      <div class="clearfix"></div>
                    </div><!-- end karnizi-sliders-row -->

                  <?php $i++; endwhile; ?>
                <?php endif; ?>

              </div><!-- end karnizi-sliders -->
            </div><!-- end section-body -->
          </div>
        </div>
      </section><!-- end karnizi-page -->

      <?php get_template_part('includes/formcallback'); ?>

    </main>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
