<?php get_header(); ?>

  <section class="blog-page">

    <div class="container">
      <div class="row">
        <div class="page-tittle">
          <h1 class="upper phil-reg"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
        </div><!-- end page-tittle -->
      </div>
    </div><!--  end container -->

    <?php get_template_part('loop'); ?>

    <?php get_template_part('pagination'); ?>

  </section>

<?php get_footer(); ?>
