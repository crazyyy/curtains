<?php /* Template Name: Actions Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="actions">
      <div class="container">
        <div class="row">
          <div class="page-tittle ">
            <h1 class="upper phil-reg"><?php the_title(); ?></h1>
            <div class="breadcrumbs">
              <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
            </div>
          </div><!-- end page-tittle -->
        </div>
      </div>

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
      </div><!-- end banner -->

      <div class="banner bg-4">
        <div class="container">
          <div class="row">
            <div class="banner__info phil-reg upper">
              <h2 class="tittle">Специальное  <br>предложение</h2>
              <p class="text fira-light">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
              <div class="bot">ПРИ оформлении заказа через сайт</div>
            </div>
            <!-- end banner__info -->
            <div class="banner__link">
              <a href="#" class="fira-med"><i class="ic ic-click"></i><p><span>ОФОРМИТЬ</span> <br>ЗАКАЗ СЕЙЧАС</p></a>
            </div>
            <!-- end banner__link -->
          </div>
        </div>
      </div><!-- end banner -->

      <div class="banner bg-5">
        <div class="container">
          <div class="row">
            <div class="banner__info phil-reg upper">
              <h2 class="tittle">ВРЕМЕННОЕ <br>предложение</h2>
              <p class="text fira-light">Служба Яндекс.Рефераты предназначена для студентов и школьников, дизайнеров и журналистов, создателей научных заявок и отчетов — для всех, кто относится к тексту, как к количеству знаков.</p>
              <div class="bot">ПРИ оформлении заказа через сайт</div>
            </div>
            <!-- end banner__info -->
            <div class="banner__link">
              <a href="#" class="fira-med"><i class="ic ic-click"></i><p><span>ОФОРМИТЬ</span> <br>ЗАКАЗ СЕЙЧАС</p></a>
            </div>
            <!-- end banner__link -->
          </div>
        </div>
        <div class="timeout"><span class="lilac phil-bold">ЗАВЕРШЕНО</span></div>
      </div><!-- end banner -->
    </section>


  <?php endwhile; endif; ?>


<?php get_footer(); ?>
