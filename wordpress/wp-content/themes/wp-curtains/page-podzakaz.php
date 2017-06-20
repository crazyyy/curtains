<?php /* Template Name: Pod Zakaz Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <main>

      <section class="pod-zakaz-page xs-plr-15">
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
              <div class="pod-zakaz-promo bxsh">
                <div class="pod-zakaz-promo__text">
                  <?php the_content(); ?>
                </div>
                <div class="pod-zakaz-promo__img bg-8"></div>
              </div>
              <!-- end  pod-zakaz-promo-->
              <div class="suppliers">
                <div class="block-tittle">
                  <h3 class="upper">наши поставщики</h3>
                </div>
                <div class="acsessuary-models">
                  <?php if( have_rows('manufacturer') ): while ( have_rows('manufacturer') ) : the_row(); ?>
                    <div class="acsessuary-models__block">
                      <a href="#" class="inner">
                        <div class="img">
                          <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('title'); ?>">
                          <?php endif; ?>
                        </div>
                        <div class="bot upper">
                          <span class="num orange fira-med"><?php the_sub_field('title'); ?></span>
                          <span class="price gray fl-r"><?php the_sub_field('country'); ?></span>
                        </div>
                      </a>
                    </div><!-- end acsessuary-models__block -->
                  <?php endwhile; endif; ?>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end suppliers -->
              <div class="how-order">
                <div class="block-tittle">
                  <h3 class="upper">КАК ЗАКАЗАТЬ</h3>
                </div>
                <div class="how-order-group">
                  <div class="col-xs-6 col-md-3 how-order__block">
                    <div class="inner">
                      <div class="tittle orange fira-bold">1 шаг</div>
                      <?php the_field('steap_1', 277); ?>
                      <div class="consultation">
                        <a href="#" class=" btn btn-consultation"><span class="ic-wrap"><i class="ic ic-h_phone"></i></span><span>Консультация дизайнера</span></a>
                      </div>
                      <div class="chevron">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <!-- end how-order__block -->
                  <div class="col-xs-6 col-md-3 how-order__block">
                    <div class="inner">
                      <div class="tittle orange fira-bold">2 шаг</div>
                      <?php the_field('steap_2', 277); ?>
                      <div class="chevron">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <!-- end how-order__block -->
                  <div class="col-xs-6 col-md-3 how-order__block">
                    <div class="inner">
                      <div class="tittle orange fira-bold">3 шаг</div>
                      <?php the_field('steap_3', 277); ?>
                      <div class="chevron">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <!-- end how-order__block -->
                  <div class="col-xs-6 col-md-3 how-order__block">
                    <div class="inner">
                      <div class="tittle orange fira-bold">4 шаг</div>
                      <?php the_field('steap_4', 277); ?>
                    </div>
                  </div>
                  <!-- end how-order__block -->
                  <div class="clearfix"></div>
                </div>
                <!-- end how-order-group -->
              </div>
              <!-- end  order-->
            </div>
            <!-- end section-body -->
          </div>
        </div>
      </section>
      <!-- end page -->
    </main>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
