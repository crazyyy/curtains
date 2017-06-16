<?php /* Template Name: Pod Zakaz Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


        <main>

          <section class="pod-zakaz-page xs-plr-15">
            <div class="container">
              <div class="row">
                <div class="page-tittle ">
                  <h1 class="upper phil-reg">Под заказ</h1>
                  <div class="breadcrumbs">
                    <ul>
                      <li><a href="/">Главная</a></li>
                      <li><a href="#">Ткани</a></li>
                      <li>Под заказ</li>
                    </ul>
                  </div>
                </div>
                <!-- end page-tittle -->
                <div class="section-body">
                  <div class="pod-zakaz-promo bxsh">
                    <div class="pod-zakaz-promo__text">
                      <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                      <p class="text">Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образомавторские права на реферат принадлежат только вам. Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит</p>
                    </div>
                    <div class="pod-zakaz-promo__img bg-8"></div>
                  </div>
                  <!-- end  pod-zakaz-promo-->
                  <div class="suppliers">
                    <div class="block-tittle">
                      <h3 class="upper">наши поставщики</h3>
                    </div>
                    <div class="acsessuary-models">
                      <div class="acsessuary-models__block">
                        <a href="#" class="inner" data-toggle="modal" data-target="#myModal">
                          <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/1.jpg" alt="partners">
                          </div>
                          <div class="bot upper">
                            <span class="num orange fira-med">Zafira</span>
                            <span class="price gray fl-r">Польша</span>
                          </div>
                        </a>
                      </div>
                      <!-- end acsessuary-models__block -->
                      <div class="acsessuary-models__block">
                        <a href="#" class="inner" data-toggle="modal" data-target="#myModal">
                          <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/2.jpg" alt="partners">
                          </div>
                          <div class="bot upper">
                            <span class="num orange fira-med">Zafira</span>
                            <span class="price gray fl-r">Польша</span>
                          </div>
                        </a>
                      </div>
                      <!-- end acsessuary-models__block -->
                      <div class="acsessuary-models__block">
                        <a href="#" class="inner" data-toggle="modal" data-target="#myModal">
                          <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/3.jpg" alt="partners">
                          </div>
                          <div class="bot upper">
                            <span class="num orange fira-med">Zafira</span>
                            <span class="price gray fl-r">Польша</span>
                          </div>
                        </a>
                      </div>
                      <!-- end acsessuary-models__block -->
                      <div class="acsessuary-models__block">
                        <a href="#" class="inner" data-toggle="modal" data-target="#myModal">
                          <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/4.jpg" alt="partners">
                          </div>
                          <div class="bot upper">
                            <span class="num orange fira-med">Zafira</span>
                            <span class="price gray fl-r">Польша</span>
                          </div>
                        </a>
                      </div>
                      <!-- end acsessuary-models__block -->
                      <div class="acsessuary-models__block">
                        <a href="#" class="inner" data-toggle="modal" data-target="#myModal">
                          <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partners/5.jpg" alt="partners">
                          </div>
                          <div class="bot upper">
                            <span class="num orange fira-med">Zafira</span>
                            <span class="price gray fl-r">Польша</span>
                          </div>
                        </a>
                      </div>
                      <!-- end acsessuary-models__block -->
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
                          <p class="text">Предоставление возможности изготовления обивочных мебельных тканей, тканей для </p>
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
                          <p class="text">Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по эскизам тканей для диванов  заказчика и услуги  </p>
                          <div class="chevron">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                      <!-- end how-order__block -->
                      <div class="col-xs-6 col-md-3 how-order__block">
                        <div class="inner">
                          <div class="tittle orange fira-bold">3 шаг</div>
                          <p class="text">Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по эскизам тканей для диванов  заказчика и услуги </p>
                          <div class="chevron">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                      <!-- end how-order__block -->
                      <div class="col-xs-6 col-md-3 how-order__block">
                        <div class="inner">
                          <div class="tittle orange fira-bold">4 шаг</div>
                          <p class="text">Предоставление возможности изготовления обивочных мебельных тканей, тканей для диванов по эскизам тканей для диванов  заказчика и услуги </p>
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
