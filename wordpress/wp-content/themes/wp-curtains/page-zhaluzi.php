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
                  <a href="#" class="btn btn-orange-f filter-1">ВЕРТИКАЛЬНОЕ</a>
                  <a href="#" class="btn btn-orange-f filter-1">ГОРИЗОНТАЛЬНОЕ</a>
                </div>
                <div class="col-xs-12 col-lg-7 nopadding">
                  <span class="phil-reg">ИСПОЛНЕНИЕ:</span>
                  <a href="#" class="btn btn-orange-f filter-2">АРОЧНОЕ</a>
                  <a href="#" class="btn btn-orange-f filter-2">ТКАНЬ</a>
                  <a href="#" class="btn btn-orange-f filter-2">МУЛЬТИ</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- end filter-orange -->
              <div class="zhaluzi-card">
                <div class="col-xs-12 col-sm-5 col-lg-5 nopadding zhaluzi-card-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/zhaluzi/1.jpg" alt="zhaluzi">
                  <div class="zhaluzi-card-img__price upper phil-bold">
                    <div class="left lilac">от <span>1</span> дня</div>
                    <div class="right orange">от <span>920</span> BYN</div>
                  </div>
                  <a href="#" class="btn btn-gallery fira-bold"><i class="ic ic-gal"></i><span>ГАЛЕРЕЯ ВЫПОЛНЕННЫХ РАБОТ</span></a>
                </div>
                <!-- end zhaluzi-card-img -->
                <div class="col-xs-12 col-sm-7 col-lg-7 nopadding zhaluzi-card-descr">
                  <h2 class="block-tittle fira-bold upper">ВЕРТИКАЛЬНЫЕ АРОЧНЫЕ ЖАЛЮЗИ</h2>
                  <div class="block">
                    <div class="block-tittle-sm upper">КОНСТРУКЦИЯ:</div>
                    <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                    <p class="text">Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                  </div>
                  <!-- end block -->
                  <div class="block">
                    <div class="block-tittle-sm upper">ПРИНЦИП РАБОТЫ:</div>
                    <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                  </div>
                  <!-- end block -->
                  <div class="block">
                    <div class="block-tittle-sm upper">ОСОБЕННОСТИ:</div>
                    <div class="block-inline">
                      <i class="ic ic-sun"></i>
                      <p>Защита от яркого света</p>
                    </div>
                    <div class="block-inline">
                      <i class="ic ic-sun"></i>
                      <p>Защита от яркого света</p>
                    </div>
                    <div class="block-inline">
                      <i class="ic ic-sun"></i>
                      <p>Защита от яркого света</p>
                    </div>
                  </div>
                  <!-- end block -->
                  <div class="block">
                    <div class="block-tittle-sm upper">МАТЕРИАЛЫ:</div>
                    <div class="materials-slider-wrap">
                      <div class="materials-slider">
                        <div class="materials-slider__block">
                          <div class="inner color-1"></div>
                        </div>
                        <div class="materials-slider__block">
                          <div class="inner color-2"></div>
                        </div>
                        <div class="materials-slider__block">
                          <div class="inner color-3"></div>
                        </div>
                        <div class="materials-slider__block">
                          <div class="inner color-4"></div>
                        </div>
                        <div class="materials-slider__block">
                          <div class="inner color-5"></div>
                        </div>
                        <div class="materials-slider__block">
                          <div class="inner color-1"></div>
                        </div>
                      </div>
                      <!--  end materials-slider -->
                    </div>
                    <!-- end materials-slider-wrap -->
                  </div>
                  <!-- end block -->
                </div>
                <!-- end zhaluzi-card-descr -->
                <div class="clearfix"></div>
              </div>
              <!-- end zhaluzi-card -->
              <div class="zhaluzi-info">
                <div class="col-xs-12 col-md-6 nopadding left">
                  <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                  <p class="text">Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                  <p class="text">Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                  <p class="text">Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении текстов в массовое пользование ссылка на Яндекс.Рефераты обязательна.</p>
                </div>
                <div class="col-xs-12 col-md-6 nopadding right">
                  <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                  <p class="text">Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
                  <p class="text">Теперь никто не сможет обвинить вас в плагиате, ибо каждый текст Яндекс.Рефератов неповторим.</p>
                  <p class="text">Текстами рефератов можно пользоваться совершенно бесплатно, однако при транслировании и предоставлении текстов в массовое пользование ссылка на Яндекс.Рефераты обязательна.</p>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- end zhaluzi-card -->
            </div>
            <!-- end section-body -->
          </div>
        </div>
      </section>
      <!-- end page -->

       <?php get_template_part('includes/formcallback'); ?>

    </main>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
