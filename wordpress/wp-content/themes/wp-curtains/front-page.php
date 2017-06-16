<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


        <div class="main-promo bg-1">
          <div class="main-promo__link right main-promo__link-1">
            <a href="<?php echo home_url(); ?>/karnizy.htm" class="link upper"><span>КАРНИЗЫ</span></a>
          </div>
          <!-- end main-promo__link -->
          <div class="main-promo__link left main-promo__link-2">
            <a href="<?php echo home_url(); ?>/aksessuary.htm" class="link upper"><span>АКСЕССУАРЫ</span></a>
          </div>
          <!-- end main-promo__link -->
          <div class="main-promo__link left main-promo__link-3">
            <a href="<?php echo home_url(); ?>/categories/tyuli" class="link upper"><span>ТЮЛЬ</span></a>
          </div>
          <!-- end main-promo__link -->
          <div class="main-promo__link left main-promo__link-4">
            <a href="<?php echo home_url(); ?>/categories/portery" class="link upper"><span>ПОРТЬЕРА</span></a>
          </div>
          <!-- end main-promo__link -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="upper phil-bold">ИЗГОТОВЛЕНИЕ ШТОР </h1>
                <h2 class="upper phil-bold">НА ЗАКАЗ В МИНСКЕ</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/decor.png" alt="decor" class="decor">
                <div>
                  <a href="<?php echo home_url(); ?>/tkani.htm" class="link link-orange upper">ПЕРЕЙТИ В КАТАЛОГ<span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- end main-promo -->
        <section class="catalog">
          <div class="container">
            <div class="row">
              <div class="section-tittle gray-l">
                <h3 class="upper phil-reg">КАТАЛОГ</h3>
                <div class="descor"></div>
              </div>
              <!-- end section-tittle -->
              <div class="section-body">
                <div class="col-xs-12 col-md-6 nopadding catalog-left">
                  <div class="inner inner--catalog1">
                    <a href="<?php echo home_url(); ?>/tkani.htm" class="upper">
                      <div class="text">
                        <div class="tittle cream">ТКАНИ</div>
                        <p class="lilac">ПОРТЬЕРЫ</p>
                        <p class="lilac">ТЮЛИ</p>
                        <p class="lilac"><i class="ic ic-shtory"></i>ШТОРЫ-НИТИ</p>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- end catalog-left -->
                <div class="col-xs-12 col-md-6 nopadding catalog-right">
                  <div class="catalog-right__row">
                    <div class="col-xs-6 nopadding left">
                      <div class="inner inner--catalog2">
                        <a href="<?php echo home_url(); ?>/karnizy.htm" class="upper">
                          <div class="text">
                            <div class="tittle cream">КАРНИЗЫ</div>
                            <p class="lilac">ВЕРТИКАЛЬНЫЕ</p>
                            <p class="lilac">ГОРИЗОНТАЛЬНЫЕ</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <!-- end left -->
                    <div class="col-xs-6 nopadding right">
                      <div class="inner inner--catalog3">
                        <a href="<?php echo home_url(); ?>/aksessuary.htm" class="upper">
                          <div class="text">
                            <div class="tittle cream">АКСЕССУАРЫ</div>
                            <p class="lilac">ВЕРТИКАЛЬНЫЕ</p>
                            <p class="lilac">ГОРИЗОНТАЛЬНЫЕ</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <!-- end right -->
                    <div class="clearfix"></div>
                  </div>
                  <!-- end catalog-right__row -->
                  <div class="catalog-right__row">
                    <div class="col-xs-6 nopadding left">
                      <div class="inner inner--catalog4">
                        <a href="<?php echo home_url(); ?>/rolshtory.htm" class="upper">
                          <div class="text">
                            <div class="tittle cream">РОЛЬШТОРЫ</div>
                            <p class="lilac">ВЕРТИКАЛЬНЫЕ</p>
                            <p class="lilac">ГОРИЗОНТАЛЬНЫЕ</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <!-- end left -->
                    <div class="col-xs-6 nopadding right">
                      <div class="inner inner--catalog5">
                        <a href="<?php echo home_url(); ?>/zhalyuzi.htm" class="upper">
                          <div class="text">
                            <div class="tittle cream">ЖАЛЮЗИ</div>
                            <p class="lilac">ВЕРТИКАЛЬНЫЕ</p>
                            <p class="lilac">ГОРИЗОНТАЛЬНЫЕ</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <!-- end right -->
                    <div class="clearfix"></div>
                  </div>
                  <!-- end catalog-right__row -->
                </div>
                <!-- end catalog-right -->
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </section>
        <!-- end catalog -->
        <section class="how-work">
          <div class="container">
            <div class="row">
              <div class="section-tittle gray-l">
                <h3 class="upper phil-reg">КАК МЫ РАБОТАЕМ</h3>
                <div class="descor"></div>
              </div>
              <!-- end section-tittle -->
              <div class="section-body">
                <div class="col-xs-12 col-md-4 col-lg-3 nopadding how-work__promo">
                  <div class="inner bxsh bd-lil">
                    <span class="num lilac fira-thin">4</span>
                    <div class="tittle upper lilac fira-med">ПРОСТЫХ ШАГА <br>К ИДЕАЛЬНОМУ <br> ОФОРМЛЕНИЮ ОКОН</div>
                    <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по эскизам тканей для диванов  заказчика и услуги фотореалистичного "переодевания" мебели при разработке дизайна.</p>
                  </div>
                </div>
                <!-- end how-work__promo -->
                <div class="col-xs-12 col-md-8 col-lg-9 nopadding how-work__steps">
                  <div class="block bd-gray">
                    <div class="icon">
                      <i class="ic ic-pancil"></i>
                    </div>
                    <div class="tittle orange fira-bold">1 шаг</div>
                    <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                    <div class="arrow">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                  </div>
                  <!--  end block -->
                  <div class="block bd-gray">
                    <div class="icon">
                      <i class="ic ic-woman"></i>
                    </div>
                    <div class="tittle orange fira-bold">2 шаг</div>
                    <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                    <div class="arrow">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                  </div>
                  <!--  end block -->
                  <div class="block bd-gray">
                    <div class="icon">
                      <i class="ic ic-layers"></i>
                    </div>
                    <div class="tittle orange fira-bold">3 шаг</div>
                    <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                    <div class="arrow">
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                  </div>
                  <!--  end block -->
                  <div class="block bd-gray">
                    <div class="icon">
                      <i class="ic ic-time"></i>
                    </div>
                    <div class="tittle orange fira-bold">4 шаг</div>
                    <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                  </div>
                  <!--  end block -->
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- end section-body -->
            </div>
          </div>
        </section>
        <!-- end how-work -->
        <div class="banner bg-2">
          <div class="container">
            <div class="row">
              <div class="banner__info phil-reg upper">
                <h2 class="tittle">ВРЕМЕННОЕ <br>предложение</h2>
                <div class="discont phil-bold"><span>-5</span></div>
                <div class="bot">ПРИ оформлении заказа через сайт</div>
              </div>
              <!-- end banner__info -->
              <div class="banner__link">
                <a href="#" class="fira-med"><i class="ic ic-click"></i><p><span>ОФОРМИТЬ</span> <br>ЗАКАЗ СЕЙЧАС</p></a>
              </div>
              <!-- end banner__link -->
            </div>
          </div>
        </div>
        <!-- end banner -->
        <section class="we-make">
          <div class="container">
            <div class="row">
              <div class="section-tittle gray-l">
                <h3 class="upper phil-reg">ЧТО мы делаем</h3>
                <div class="descor"></div>
              </div>
              <!-- end section-tittle -->
              <div class="section-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1" data-toggle="tab">Шторы</a></li>
                  <li><a href="#tab2" data-toggle="tab">Жалюзи</a></li>
                  <li><a href="#tab3" data-toggle="tab">Рольшторы</a></li>
                </ul>
                <!-- Nav tabs content -->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tab1">
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product1.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product2.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product3.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product4.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product5.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product6.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product7.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product8.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product9.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                  </div>
                  <div class="tab-pane fade" id="tab2">
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product1.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product2.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product3.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product4.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product5.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product6.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product7.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product8.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product9.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                  </div>
                  <div class="tab-pane fade" id="tab3">
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product1.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product2.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product3.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product4.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product5.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product6.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product7.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product8.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                    <a href="#" class="we-make__link">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/product-type/product9.png" alt="product">
                      <div class="informer">
                        <span class="tittle fira-bold upper orange">ШТОРЫ-НИТИ</span>
                        <p>Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- end section-tittle -->
            </div>
          </div>
        </section>
        <!-- end we-make -->
        <section class="about-us">
          <div class="container">
            <div class="row">
              <div class="section-tittle gray-l">
                <h3 class="upper phil-reg">О НАС</h3>
                <div class="descor"></div>
              </div>
              <!-- end section-tittle -->
              <div class="section-body">
                <div class="col-xs-12 col-md-6 nopadding about-us__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="about">
                </div>
                <!-- end about-us__img -->
                <div class="col-xs-12 col-md-6 nopadding about-us__descr">
                  <div class="about-us__descr-company">
                    <div class="h3 tittle lilac upper fira-bold">КОМПАНИЯ “ДОМ ШТОР”</div>
                    <?php the_content(); ?>
                  </div>
                  <!-- end about-us__descr-company -->
                  <div class="about-us__descr-plus orange">
                    <div class="h4 tittle upper fira-bold">НАШИ ПРЕИМУЩЕСТВА</div>
                    <div class="pluses">
                      <div class="pluses-block">
                        <span class="fira-thin">1</span>
                        <p class="upper">ШИРОКИЙ <br>АССОРТИМЕНТ</p>
                      </div>
                      <!-- end pluses-block -->
                      <div class="pluses-block">
                        <span class="fira-thin">2</span>
                        <p class="upper">ШИРОКИЙ <br>АССОРТИМЕНТ</p>
                      </div>
                      <!-- end pluses-block -->
                      <div class="pluses-block">
                        <span class="fira-thin">3</span>
                        <p class="upper">КВАЛИФИЦИРОВАННАЯ <br>Поддержка</p>
                      </div>
                      <!-- end pluses-block -->
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- end about-us__descr-plus -->
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- end section-body -->
            </div>
          </div>
        </section>
        <!-- end about-us -->
        <section class="blog">
          <div class="container">
            <div class="row">
              <div class="section-tittle gray-l">
                <h3 class="upper phil-reg">БЛОГ</h3>
                <div class="descor"></div>
              </div>
              <!-- end section-tittle -->
              <div class="section-body">

                <?php query_posts("showposts=3"); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 nopadding blog-block">
                      <a href="<?php the_permalink(); ?>" class="inner bxsh">
                        <div class="img">
                          <?php if ( has_post_thumbnail()) { ?>
                            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php } else { ?>
                            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                          <?php } ?>
                          <p class="date"><span><?php the_time('j.m'); ?></span></p>
                        </div>
                        <div class="bot">
                          <div class="upper left"><?php the_title(); ?></div>
                          <div class="right">
                            <i class="fa fa-angle-right sm" aria-hidden="true"></i>
                            <i class="fa fa-angle-right lg" aria-hidden="true"></i>
                            <i class="fa fa-angle-right sm" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div><!-- end blog-block -->
                  <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

                <div class="clearfix"></div>
              </div>
              <!-- end section-body -->
            </div>
          </div>
        </section>
        <!-- end blog -->


    <?php if( have_rows('shops', 265) ): ?>
      <div id="map">
        <?php while ( have_rows('shops', 265) ) : the_row(); $location = get_sub_field('maps'); ?>
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

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
