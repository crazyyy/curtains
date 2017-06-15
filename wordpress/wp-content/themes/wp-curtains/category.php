<?php get_header(); ?>

  <section class="blog-page">

    <div class="container">
      <div class="row">
        <div class="page-tittle">
          <h1 class="upper phil-reg"><?php the_category(', '); ?></h1>
          <div class="breadcrumbs">
            <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
          </div>
        </div><!-- end page-tittle -->
      </div>
    </div><!--  end container -->

    <?php get_template_part('loop'); ?>

    <?php get_template_part('pagination'); ?>

  </section>

<?php get_footer(); ?>
