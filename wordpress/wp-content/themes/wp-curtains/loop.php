<?php $i = 1; if (have_posts()): while (have_posts()) : the_post(); ?>

<?php if ( $i == 1 ) { ?>

  <div id="post-<?php the_ID(); ?>" class="blog-page__block img-left pt-none xs-plr-15">
    <div class="container">
      <div class="row">
        <div class="section-body">
          <div class="descr visible-sm visible-xs">
            <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
            <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
          </div>
          <div class="col-xs-12 col-md-4 nopadding img">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </div>
          <div class="col-xs-12 col-md-8 nopadding descr">
            <div class="descr-head">
              <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
              <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
            </div>
            <?php wpeExcerpt('wpeExcerpt120'); ?>
          </div>
          <div class="clearfix"></div>
        </div><!-- end section-body -->
      </div>
    </div>
  </div><!-- end blog-page__block -->

<?php } else if ( $i == 2 ) { ?>

  <div id="post-<?php the_ID(); ?>" class="blog-page__block img-right bg-gray-l xs-plr-15">
    <div class="container">
      <div class="row">
        <div class="section-body">
          <div class="col-xs-12 col-md-8 nopadding descr">
            <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
            <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
            <?php wpeExcerpt('wpeExcerpt120'); ?>
          </div>
          <div class="col-xs-12 col-md-4 nopadding img">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </div><!-- end blog-page__block -->

<?php } else if ( $i == 3 ) { ?>

  <div id="post-<?php the_ID(); ?>" class="blog-page__block img-left xs-plr-15">
    <div class="container">
      <div class="row">
        <div class="section-body">
          <div class="descr visible-sm visible-xs">
            <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
            <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
          </div>
          <div class="col-xs-12 col-md-4 nopadding img">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </div>
          <div class="col-xs-12 col-md-8 nopadding descr">
            <div class="descr-head">
              <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
              <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
            </div>
            <?php wpeExcerpt('wpeExcerpt120'); ?>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- end section-body -->
      </div>
    </div>
  </div><!-- end blog-page__block -->

<?php } else if ( $i == 4 || $i == 6 || $i == 8 || $i == 10 ) { ?>

  <div id="post-<?php the_ID(); ?>" class="blog-page__block img-right bg-gray-l xs-plr-15">
    <div class="container">
      <div class="row">
        <div class="section-body">
          <div class="col-xs-12 col-md-8 nopadding descr">
            <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
            <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
            <?php wpeExcerpt('wpeExcerpt120'); ?>
          </div>
          <div class="col-xs-12 col-md-4 nopadding img">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </div>
          <div class="clearfix"></div>
        </div><!-- end section-body -->
      </div>
    </div>
  </div><!-- end blog-page__block -->

<?php } else { ?>

  <div id="post-<?php the_ID(); ?>" class="blog-page__block img-left xs-plr-15">
    <div class="container">
      <div class="row">
        <div class="section-body">
          <div class="descr visible-sm visible-xs">
            <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
            <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
          </div>
          <div class="col-xs-12 col-md-4 nopadding img">
            <?php if ( has_post_thumbnail()) { ?>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php } ?>
          </div>
          <div class="col-xs-12 col-md-8 nopadding descr">
            <div class="descr-head">
              <div class="tittle lilac phil-reg"><?php the_title(); ?></div>
              <div class="date gray phil-reg"><?php the_time('j.m.Y'); ?></div>
            </div>
            <?php wpeExcerpt('wpeExcerpt120'); ?>
          </div>
          <div class="clearfix"></div>
        </div><!-- end section-body -->
      </div>
    </div>
  </div><!-- end blog-page__block -->

<?php } ?>

<?php $i++; endwhile; endif; ?>
