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
                  <li class="active"><a href="#tab-karnizi1" data-toggle="tab">Вид профиля</a></li>
                  <li><a href="#tab-karnizi2" data-toggle="tab">КРОНШТЕЙНЫ</a></li>
                  <li><a href="#tab-karnizi3" data-toggle="tab">ФУРНИТУРА МЕТАЛЛИЧЕСКАЯ</a></li>
                  <li><a href="#tab-karnizi4" data-toggle="tab">НАКОНЕЧНИКИ МЕТАЛЛИЧЕСКИЕ</a></li>
                </ul><!-- Nav tabs content -->

                <div class="tab-content">

                  <div class="tab-pane fade in active" id="tab-karnizi1">

                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div><!-- end karnizi-type__block -->

                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="clearfix"></div>
                  </div><!-- end tab-karnizi1 -->

                  <div class="tab-pane fade" id="tab-karnizi2">
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="clearfix"></div>
                  </div>
                  <!-- end tab-karnizi2 -->
                  <div class="tab-pane fade" id="tab-karnizi3">
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="clearfix"></div>
                  </div>
                  <!-- end tab-karnizi3 -->
                  <div class="tab-pane fade" id="tab-karnizi4">
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="col-xs-6 col-sm-4 col-md-3 karnizi-type__block">
                      <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/karnizi/model1.jpg" alt="model">
                        <span class="orange fira-bold">Гладкая</span>
                      </a>
                    </div>
                    <!-- end karnizi-type__block -->
                    <div class="clearfix"></div>
                  </div>
                  <!-- end tab-karnizi4 -->
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
