<?php /* Template Name: Catalog Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main>
  <section class="catalog-page">
    <div class="container">
      <div class="row">
        <div class="page-tittle ">
          <h1 class="upper phil-reg">ТКАНИ</h1>
          <div class="breadcrumbs">
            <ul>
              <li><a href="/">Главная</a></li>
              <li>Ткани</li>
            </ul>
          </div>
        </div>
        <!-- end page-tittle -->
        <div class="section-body">
          <div class="catalog mb">
            <div class="col-xs-12 col-md-6 catalog-page__left pl-none">
              <div class="inner inner--catalog1">
                <a href="#" class="upper">
                  <div class="text">
                    <div class="tittle cream">Портьеры</div>
                    <p class="lilac">однотонная</p>
                    <p class="lilac">С рисунком</p>
                    <p class="lilac"><i class="ic ic-shtory"></i>BLACK OUT</p>
                  </div>
                </a>
              </div>
              <div class="catalog-descr">
                <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                <p class="text">Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 catalog-page__right pr-none">
              <div class="inner inner--catalog1 catalog6">
                <a href="#" class="upper">
                  <div class="text">
                    <div class="tittle cream">ТЮЛИ</div>
                    <p class="lilac">однотонная</p>
                    <p class="lilac">С рисунком</p>
                    <p class="lilac"><i class="ic ic-shtory"></i>С ВЫШИВКОЙ</p>
                  </div>
                </a>
              </div>
              <div class="catalog-descr">
                <p class="text">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
                <p class="text">Нажав на кнопку «Написать реферат», вы лично создаете уникальный текст, причем именно от вашего нажатия на кнопку зависит, какой именно текст получится — таким образом, авторские права на реферат принадлежат только вам.</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- end catalog -->
        </div>
        <!-- end section-body -->
      </div>
    </div>
    <!--  end container -->
  </section>
  <section class="call-disainer bg-6">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 call-disainer__descr nopadding">
          <h1 class="upper phil-bold">НУЖНО КОМПЛЕКСНОЕ РЕШЕНИЕ?</h1>
          <h2 class="phil-bold">Закажите бесплатный выезд дизайнера</h2>
        </div>
        <div class="col-xs-12 col-md-8 call-disainer__form">
          <form action="#" class="call-disainer-form">
            <div class="nav">
              <span class="phil-reg">Что вас интересует?</span>
              <ul class="nav nav-tabs nav-tabs--form">
                <li class="active"><a href="#tab-form1" data-toggle="tab">Шторы</a></li>
                <li><a href="#tab-form2" data-toggle="tab">Жалюзи</a></li>
                <li><a href="#tab-form3" data-toggle="tab">Рольшторы</a></li>
              </ul>
            </div>
            <div class="tab-content tab-content--form">
              <div id="tab-form1" class="tab-pane fade in active">
                <div class="catalog-checkbox">
                  <input id="checkbox1" name="checkbox" type="checkbox">
                  <label for="checkbox1"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check1.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check1-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox2" name="checkbox" type="checkbox">
                  <label for="checkbox2"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check2.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check2-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox3" name="checkbox" type="checkbox">
                  <label for="checkbox3"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check3.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check3-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox4" name="checkbox" type="checkbox">
                  <label for="checkbox4"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check4.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check4-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox5" name="checkbox" type="checkbox">
                  <label for="checkbox5"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check5.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check5-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox6" name="checkbox" type="checkbox">
                  <label for="checkbox6"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check6.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check6-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox7" name="checkbox" type="checkbox">
                  <label for="checkbox7"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check7.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check7-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox8" name="checkbox" type="checkbox">
                  <label for="checkbox8"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check8.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check8-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox9" name="checkbox" type="checkbox">
                  <label for="checkbox9"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check9.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check9-chk.png"></label>
                </div>
              </div>
              <!-- end tab1 -->
              <div id="tab-form2" class="tab-pane fade">
                <div class="catalog-checkbox">
                  <input id="checkbox21" name="checkbox" type="checkbox">
                  <label for="checkbox21"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check1.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check1-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox22" name="checkbox" type="checkbox">
                  <label for="checkbox22"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check2.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check2-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox23" name="checkbox" type="checkbox">
                  <label for="checkbox23"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check3.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check3-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox24" name="checkbox" type="checkbox">
                  <label for="checkbox24"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check4.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check4-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox25" name="checkbox" type="checkbox">
                  <label for="checkbox25"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check5.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check5-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox26" name="checkbox" type="checkbox">
                  <label for="checkbox26"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check6.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check6-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox27" name="checkbox" type="checkbox">
                  <label for="checkbox27"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check7.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check7-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox28" name="checkbox" type="checkbox">
                  <label for="checkbox28"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check8.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check8-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox29" name="checkbox" type="checkbox">
                  <label for="checkbox29"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check9.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check9-chk.png"></label>
                </div>
              </div>
              <!-- end tab2 -->
              <div id="tab-form3" class="tab-pane fade">
                <div class="catalog-checkbox">
                  <input id="checkbox31" name="checkbox" type="checkbox">
                  <label for="checkbox31"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check1.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check1-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox32" name="checkbox" type="checkbox">
                  <label for="checkbox32"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check2.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check2-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox33" name="checkbox" type="checkbox">
                  <label for="checkbox33"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check3.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check3-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox34" name="checkbox" type="checkbox">
                  <label for="checkbox34"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check4.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check4-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox35" name="checkbox" type="checkbox">
                  <label for="checkbox35"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check5.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check5-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox36" name="checkbox" type="checkbox">
                  <label for="checkbox36"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check6.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check6-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox37" name="checkbox" type="checkbox">
                  <label for="checkbox37"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check7.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check7-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox38" name="checkbox" type="checkbox">
                  <label for="checkbox38"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check8.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check8-chk.png"></label>
                </div>
                <div class="catalog-checkbox">
                  <input id="checkbox39" name="checkbox" type="checkbox">
                  <label for="checkbox39"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check9.png"><img src="<?php echo get_template_directory_uri(); ?>/img/checkbox/check9-chk.png"></label>
                </div>
              </div>
              <!-- end tab1 -->
            </div>
            <div class="form-inputs form-inputs--inline">
              <div class="form-group">
                <input type="text" class="form-control" id="input-name" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="input-phone" placeholder="Ваш телефон">
              </div>
              <button type="submit" class="btn btn-orange">ОТПРАВИТЬ</button>
            </div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <!-- end call-disainer -->
</main>


  <?php endwhile; endif; ?>

<?php get_footer(); ?>
