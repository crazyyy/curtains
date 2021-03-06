<?php
/*
 *  Author: knaipa | @Saitobaza
 *  URL: saitobaza.ru
 *  Custom functions, support, custom post types and more.
 */

//  Enable styles for WP admin panel
add_action('admin_enqueue_scripts', 'wpeAdminThemeStyle');
function wpeAdminThemeStyle() {
  wp_enqueue_style('wpe-admin-style', get_template_directory_uri() . '/css/admin.css');
  wp_enqueue_style('wpe-admin-style', get_template_directory_uri() . '/css/editor-style.css');
  wp_register_script('wpe-admin-script', get_template_directory_uri() . '/js/admin.js');
  wp_enqueue_script( 'wpe-admin-script' );
}

//  Catch first image from post and display it
function catchFirstImage() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
    $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){
    $first_img = get_template_directory_uri() . '/img/noimage.jpg'; }
    return $first_img;
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyCZF31krTQH_5QnEpdIsEgmsBV-Iy884rE');
}

add_action('wp_enqueue_scripts', 'wpeStyles'); // Add Theme Stylesheet
function wpeStyles()  {
  wp_dequeue_style('fancybox');
  wp_dequeue_style('wp_dequeue_style');

  wp_register_style('wpeasy-style', get_template_directory_uri() . '/css/main.css', array(), '1.3', 'all');
  wp_enqueue_style('wpeasy-style'); // Enqueue it!
}

add_action('init', 'wpeHeaderScripts'); // Add Scripts to wp_head
function wpeHeaderScripts() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4');
    wp_enqueue_script('jquery');

    wp_register_script('jquery-migrate', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js', array(), '3.0.0');
    wp_enqueue_script('jquery-migrate');

    wp_register_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3');
    wp_enqueue_script('modernizr');

    wp_deregister_script( 'jquery-form' );

    //  Load footer scripts (footer.php)
    wp_register_script('wpeScripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.3.0', true);
    wp_enqueue_script('wpeScripts');

  }
}

//  Remove wp_head() injected Recent Comment styles
//  add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
function my_remove_recent_comments_style() {
  global $wp_widget_factory;
  remove_action('wp_head', array(
    $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
    'recent_comments_style'
  ));
}

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
  $content_width = 980;
}

if (function_exists('add_theme_support')) {
  // Add Menu Support
  add_theme_support('menus');

  // Add Thumbnail Theme Support
  add_theme_support('post-thumbnails');
  add_image_size('large', 1200, '', true); // Large Thumbnail
  add_image_size('medium', 600, '', true); // Medium Thumbnail
  add_image_size('small', 250, '', true); // Small Thumbnail
  add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

  // Enables post and comment RSS feed links to head
  add_theme_support('automatic-feed-links');

  // Localisation Support
  load_theme_textdomain('wpeasy', get_template_directory() . '/languages');
}

// WPE head navigation
function wpeHeadNav() {
  wp_nav_menu(
  array(
    'theme_location'  => 'header-menu',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="h-menu__list upper phil-reg">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}
// WPE footer navigation
function wpeFootNav() {
  wp_nav_menu(
  array(
    'theme_location'  => 'footer-menu',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="footernav">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}
// WPE sidebar navigation
function wpeSideNav() {
  wp_nav_menu(
  array(
    'theme_location'  => 'sidebar-menu',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="sidebarnav">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}
//  Register WPE Navigation
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
function register_html5_menu() {
  register_nav_menus(array(
    'header-menu' => __('Меню в шапке', 'wpeasy'),
    'sidebar-menu' => __('Меню в сайдбар', 'wpeasy'),
    'footer-menu' => __('Меню в подвал', 'wpeasy')
  ));
}
//  If Dynamic Sidebar Existsов
if (function_exists('register_sidebar')) {
  //  Define Sidebar Widget Area 1
  register_sidebar(array(
    'name' => __('Блок виджетов #1', 'wpeasy'),
    'description' => __('Description for this widget-area...', 'wpeasy'),
    'id' => 'widgetarea1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));
  //  Define Sidebar Widget Area 2. If your want to display more widget - uncoment this
  /*
  register_sidebar(array(
    'name' => __('Блок виджетов #2', 'wpeasy'),
    'description' => __('Description for this widget-area...', 'wpeasy'),
    'id' => 'widgetarea2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  ));
  */
}

//  Custom Excerpts
//  RU: Произвольное обрезание текста
function wpeExcerpt10($length) {
  return 10;
}
function wpeExcerpt20($length) {
  return 20;
}
function wpeExcerpt40($length) {
  return 40;
}
function wpeExcerpt120($length) {
  return 120;
}
//  Create the Custom Excerpts callback
//  RU: Собственная обрезка контента
function wpeExcerpt($length_callback = '', $more_callback = '') {
  global $post;
  if (function_exists($length_callback)) {
      add_filter('excerpt_length', $length_callback);
  }
  if (function_exists($more_callback)) {
      add_filter('excerpt_more', $more_callback);
  }
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

//  Custom View Article link to Post
//  RU: Добавляем "Читать дальше" к обрезанным записям

function html5_blank_view_article($more) {
  global $post;
  return '...';
}
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts

// Remove the <div> surrounding the dynamic navigation to cleanup markup
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
function my_wp_nav_menu_args($args = '') {
  $args['container'] = false;
  return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
function my_css_attributes_filter($var) {
  return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
function remove_category_rel_from_category_list($thelist) {
  return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
function add_slug_to_body_class($classes) {
  global $post;
  if (is_home()) {
    $key = array_search('blog', $classes);
    if ($key > -1) {
      unset($classes[$key]);
    }
  } elseif (is_page()) {
    $classes[] = sanitize_html_class($post->post_name);
  } elseif (is_singular()) {
    $classes[] = sanitize_html_class($post->post_name);
  }

  return $classes;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
function html5wp_pagination() {
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'prev_text'          => __('«'),
    'next_text'          => __('»')
  ));
}

// Remove Admin bar
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
function remove_admin_bar() {
  return false;
}

// Remove 'text/css' from our enqueued stylesheet
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
function html5_style_remove($tag) {
  return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
function remove_thumbnail_dimensions( $html ) {
  $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
  return $html;
}

// Custom Gravatar in Settings > Discussion
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults) {
  $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
  $avatar_defaults[$myavatar] = "Custom Gravatar";
  return $avatar_defaults;
}

// Threaded Comments
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
function enable_threaded_comments() {
  if (!is_admin()) {
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script('comment-reply');
    }
  }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
?>
  <!-- heads up: starting < for the html tag (li or div) in the next line: -->
  <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
  <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
      <div class="comment-author vcard">
        <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
        <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
        <br />
      <?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
      <?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' ); ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
      <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
      <?php if ( 'div' != $args['style'] ) : ?>
    </div>
  <?php endif; ?>
<?php }

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

 // Как отключить комментарии для Медиафайлов WordPress
 // http://wordpresso.org/hacks/kak-otklyuchit-kommentarii-dlya-mediafaylov-wordpress/
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );
function filter_media_comment_status( $open, $post_id ) {
  $post = get_post( $post_id );
  if( $post->post_type == 'attachment' ) {
    return false;
  }
  return $open;
}

 // Редирект записи, когда поисковый запрос выдает один результат
 // http://wordpresso.org/hacks/29-wordpress-tryukov-dlya-rabotyi-s-zapisyami-i-stranitsami/
add_action('template_redirect', 'single_result');
function single_result() {
  if (is_search()) {
    global $wp_query;
    if ($wp_query->post_count == 1) {
      wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
    }
  }
}

// хлебные крошки   http://dimox.name/wordpress-breadcrumbs-without-a-plugin/
/* <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?> */

function easy_breadcrumbs() {

  // Settings
  $separator          = ' &raquo; ';
  $breadcrums_id      = 'breadcrumbs-in';
  $breadcrums_class   = 'breadcrumbs-in';
  $home_title         = 'Главная';

  // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
  $custom_taxonomy    = 'categories';

  // Get the query & post information
  global $post,$wp_query;

  // Do not display on the homepage
  if ( !is_front_page() ) {

    // Build the breadcrums
    echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

    // Home page
    echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';


        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
/*
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
*/

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
/*
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

*/
            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $last_category = end(array_values($category));

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';

                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            }

        } else if ( is_category() ) {

            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';

                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';


            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';


            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';


            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_year() ) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

        } elseif ( is_404() ) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ul>';

    }

}
// end easy_breadcrumbs()


/*
  Plugin Name: Top Level Categories
  Plugin URI: http://fortes.com/projects/wordpress/top-level-cats/
  Description: Removes the prefix from the URL for a category. For instance, if your old category link was <code>/category/catname</code> it will now be <code>/catname</code>
*/

// In case we're running standalone, for some odd reason
if (function_exists('add_action')) {
  register_activation_hook(__FILE__, 'top_level_cats_activate');
  register_deactivation_hook(__FILE__, 'top_level_cats_deactivate');

  // Setup filters
  add_filter('category_rewrite_rules', 'top_level_cats_category_rewrite_rules');
  add_filter('generate_rewrite_rules', 'top_level_cats_generate_rewrite_rules');
  add_filter('category_link', 'top_level_cats_category_link', 10, 2);

  global $clean_category_rewrites, $clean_rewrites;
  $clean_category_rewrites = array();
}
function top_level_cats_activate() {
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
function top_level_cats_deactivate() {
  // Remove the filters so we don't regenerate the wrong rules when we flush
  remove_filter('category_rewrite_rules', 'top_level_cats_category_rewrite_rules');
  remove_filter('generate_rewrite_rules', 'top_level_cats_generate_rewrite_rules');
  remove_filter('category_link', 'top_level_cats_category_link');

  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
function top_level_cats_generate_rewrite_rules($wp_rewrite) {
  global $clean_category_rewrites;
  $wp_rewrite->rules = $wp_rewrite->rules + $clean_category_rewrites;
}

function top_level_cats_category_rewrite_rules($category_rewrite)
{
  global $clean_category_rewrites;

  global $wp_rewrite;
  // Make sure to use verbose rules, otherwise we'll clobber our
  // category permalinks with page permalinks
  $wp_rewrite->use_verbose_page_rules = true;

  while (list($k, $v) = each($category_rewrite)) {
    // Strip off the category prefix
    $new_k = top_level_cats_remove_cat_base($k);
    $clean_category_rewrites[$new_k] = $v;
  }

    return $category_rewrite;
}

function top_level_cats_category_link($cat_link, $cat_id) {
  return top_level_cats_remove_cat_base($cat_link);
}

function top_level_cats_remove_cat_base($link) {
  $category_base = get_option('category_base');

  // WP uses "category/" as the default
  if ($category_base == '')
      $category_base = 'category';

  // Remove initial slash, if there is one (we remove the trailing slash in the regex replacement and don't want to end up short a slash)
  if (substr($category_base, 0, 1) == '/')
      $category_base = substr($category_base, 1);

  $category_base .= '/';

  return preg_replace('|' . $category_base . '|', '', $link, 1);
}

add_action( 'init', 'disable_wp_emojicons' );
function disable_wp_emojicons() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}


// Add news Post Type
add_action( 'init', 'post_type_product' );
function post_type_product() {

  $labels = array(
    'name'=> 'Продукция',
    'singular_name' => 'Продукция',
    'add_new' => 'Add',
    'add_new_item' => 'Add',
    'edit' => 'Edit',
    'edit_item' => 'Edit',
    'new-item' => 'Add',
    'view' => 'View',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' => 'Not Found',
    'not_found_in_trash' => 'Not Found',
    'parent' => 'Parent',
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Продукция',
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'menu_position' => 3,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-cart',
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail'),
    'rewrite' => array( 'slug' => 'product' ),
    'show_in_rest' => true
  );

  register_post_type( 'product' , $args );
}


// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'taxonomies_category', 0 );
function taxonomies_category() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Рубрики',
    'singular_name'     => 'Рубрики',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Рубрики',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'categories' ),
  );

  register_taxonomy( 'categories', array( 'product' ), $args );

  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name'                       => 'Характеристики',
    'singular_name'              => 'Характеристики',
    'search_items'               => 'Search',
    'popular_items'              => 'Popular',
    'all_items'                  => 'All',
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit',
    'update_item'                => 'Update',
    'add_new_item'               => 'Add',
    'new_item_name'              => 'New',
    'separate_items_with_commas' => 'Separate items with comas',
    'add_or_remove_items'        => 'Add or remove',
    'choose_from_most_used'      => 'Choose from the most used',
    'not_found'                  => 'No found.',
    'menu_name'                  => 'Характеристики',
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'characteristics' ),
  );

  register_taxonomy( 'characteristics', 'product', $args );

  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name'                       => 'Примеры',
    'singular_name'              => 'Примеры',
    'search_items'               => 'Search',
    'popular_items'              => 'Popular',
    'all_items'                  => 'All',
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => 'Edit',
    'update_item'                => 'Update',
    'add_new_item'               => 'Add',
    'new_item_name'              => 'New',
    'separate_items_with_commas' => 'Separate items with comas',
    'add_or_remove_items'        => 'Add or remove',
    'choose_from_most_used'      => 'Choose from the most used',
    'not_found'                  => 'No found.',
    'menu_name'                  => 'Примеры',
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'examples' ),
  );

  register_taxonomy( 'examples', 'product', $args );

}

add_action( 'init', 'post_type_accessories' );
function post_type_accessories() {

  $labels = array(
    'name'=> 'Аксессуары',
    'singular_name' => 'Аксессуары',
    'add_new' => 'Add',
    'add_new_item' => 'Add',
    'edit' => 'Edit',
    'edit_item' => 'Edit',
    'new-item' => 'Add',
    'view' => 'View',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' => 'Not Found',
    'not_found_in_trash' => 'Not Found',
    'parent' => 'Parent',
  );

  $args = array(
    'labels'             => $labels,
    'description' => 'Аксессуары',
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'menu_position' => 3,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-layout',
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail'),
    'rewrite' => array( 'slug' => 'accessories' ),
    'show_in_rest' => true
  );

  register_post_type( 'accessories' , $args );
}

add_action( 'init', 'taxonomies_types', 0 );
function taxonomies_types() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Типы',
    'singular_name'     => 'Типы',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Типы',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'types' ),
  );

  register_taxonomy( 'types', array( 'accessories' ), $args );
}

add_action( 'init', 'post_type_eaves' );
function post_type_eaves() {

  $labels = array(
    'name'=> 'Карнизы',
    'singular_name' => 'Карнизы',
    'add_new' => 'Add',
    'add_new_item' => 'Add',
    'edit' => 'Edit',
    'edit_item' => 'Edit',
    'new-item' => 'Add',
    'view' => 'View',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' => 'Not Found',
    'not_found_in_trash' => 'Not Found',
    'parent' => 'Parent',
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Карнизы',
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'menu_position' => 3,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-feedback',
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail'),
    'rewrite' => array( 'slug' => 'eaves' ),
    'show_in_rest' => true
  );

  register_post_type( 'eaves' , $args );
}

add_action( 'init', 'taxonomies_variant', 0 );
function taxonomies_variant() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Варианты',
    'singular_name'     => 'Варианты',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Варианты',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'variant' ),
  );

  register_taxonomy( 'variant', array( 'eaves' ), $args );
}

add_action( 'init', 'taxonomies_colours', 0 );
function taxonomies_colours() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Цвет',
    'singular_name'     => 'Цвет',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Цвет',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'colour' ),
  );

  register_taxonomy( 'colour', array( 'eaves' ), $args );
}

add_action( 'init', 'taxonomies_country', 0 );
function taxonomies_country() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Страна',
    'singular_name'     => 'Страна',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Страна',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'country' ),
  );

  register_taxonomy( 'country', array( 'eaves' ), $args );
}
// */
add_action( 'init', 'post_type_shutter' );
function post_type_shutter() {

  $labels = array(
    'name'=> 'Жалюзи',
    'singular_name' => 'Жалюзи',
    'add_new' => 'Add',
    'add_new_item' => 'Add',
    'edit' => 'Edit',
    'edit_item' => 'Edit',
    'new-item' => 'Add',
    'view' => 'View',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' => 'Not Found',
    'not_found_in_trash' => 'Not Found',
    'parent' => 'Parent',
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Жалюзи',
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'menu_position' => 3,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-menu',
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail'),
    'rewrite' => array( 'slug' => 'shutter' ),
    'show_in_rest' => true
  );

  register_post_type( 'shutter' , $args );
}

add_action( 'init', 'taxonomies_location', 0 );
function taxonomies_location() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Расположение',
    'singular_name'     => 'Расположение',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Расположение',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'location' ),
  );

  register_taxonomy( 'location', array( 'shutter' ), $args );
}

add_action( 'init', 'taxonomies_rendering', 0 );
function taxonomies_rendering() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Исполнение',
    'singular_name'     => 'Исполнение',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Исполнение',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'rendering' ),
  );

  register_taxonomy( 'rendering', array( 'shutter' ), $args );
}

add_action( 'init', 'taxonomies_materials', 0 );
function taxonomies_materials() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Материалы',
    'singular_name'     => 'Материалы',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Материалы',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'materials' ),
  );

  register_taxonomy( 'materials', array( 'shutter' ), $args );
}

add_action( 'init', 'taxonomies_specs', 0 );
function taxonomies_specs() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Особенности',
    'singular_name'     => 'Особенности',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Особенности',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'specs' ),
  );

  register_taxonomy( 'specs', array( 'shutter' ), $args );
}
/** rollerblinds */
add_action( 'init', 'post_type_rollerblinds' );
function post_type_rollerblinds() {

  $labels = array(
    'name'=> 'Рольшторы',
    'singular_name' => 'Рольшторы',
    'add_new' => 'Add',
    'add_new_item' => 'Add',
    'edit' => 'Edit',
    'edit_item' => 'Edit',
    'new-item' => 'Add',
    'view' => 'View',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' => 'Not Found',
    'not_found_in_trash' => 'Not Found',
    'parent' => 'Parent',
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Рольшторы',
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'menu_position' => 3,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-format-aside',
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail'),
    'rewrite' => array( 'slug' => 'rollerblinds' ),
    'show_in_rest' => true
  );

  register_post_type( 'rollerblinds' , $args );
}

add_action( 'init', 'taxonomies_location_r', 0 );
function taxonomies_location_r() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Расположение',
    'singular_name'     => 'Расположение',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Расположение',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'location_r' ),
  );

  register_taxonomy( 'location_r', array( 'rollerblinds' ), $args );
}

add_action( 'init', 'taxonomies_rendering_r', 0 );
function taxonomies_rendering_r() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Исполнение',
    'singular_name'     => 'Исполнение',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Исполнение',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'rendering_r' ),
  );

  register_taxonomy( 'rendering_r', array( 'rollerblinds' ), $args );
}

add_action( 'init', 'taxonomies_materials_r', 0 );
function taxonomies_materials_r() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Материалы',
    'singular_name'     => 'Материалы',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Материалы',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'materials_r' ),
  );

  register_taxonomy( 'materials_r', array( 'rollerblinds' ), $args );
}

add_action( 'init', 'taxonomies_specs_r', 0 );
function taxonomies_specs_r() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Особенности',
    'singular_name'     => 'Особенности',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Особенности',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'specs_r' ),
  );

  register_taxonomy( 'specs_r', array( 'rollerblinds' ), $args );
}

/** portfolio */
add_action( 'init', 'post_type_portfolio' );
function post_type_portfolio() {

  $labels = array(
    'name'=> 'Портфолио',
    'singular_name' => 'Портфолио',
    'add_new' => 'Add',
    'add_new_item' => 'Add',
    'edit' => 'Edit',
    'edit_item' => 'Edit',
    'new-item' => 'Add',
    'view' => 'View',
    'view_item' => 'View',
    'search_items' => 'Search',
    'not_found' => 'Not Found',
    'not_found_in_trash' => 'Not Found',
    'parent' => 'Parent',
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Портфолио',
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'menu_position' => 3,
    // https://developer.wordpress.org/resource/dashicons/
    'menu_icon' => 'dashicons-format-gallery',
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail'),
    'rewrite' => array( 'slug' => 'portfolio' ),
    'show_in_rest' => true
  );

  register_post_type( 'portfolio' , $args );
}

add_action( 'init', 'taxonomies_room', 0 );
function taxonomies_room() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Помещение',
    'singular_name'     => 'Помещение',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Помещение',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'room' ),
  );

  register_taxonomy( 'room', array( 'portfolio' ), $args );
}

add_action( 'init', 'taxonomies_exampl', 0 );
function taxonomies_exampl() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => 'Примеры',
    'singular_name'     => 'Примеры',
    'search_items'      => 'Search',
    'all_items'         => 'All',
    'parent_item'       => 'Parent',
    'parent_item_colon' => 'Parent',
    'edit_item'         => 'Edit',
    'update_item'       => 'Update',
    'add_new_item'      => 'Добавить',
    'new_item_name'     => 'Добавить',
    'menu_name'         => 'Примеры',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'exampl' ),
  );

  register_taxonomy( 'exampl', array( 'portfolio' ), $args );
}


function get_new() {
  // args
  $args = array(
    'post_type' => 'product',
    'showposts' => 100,
    'meta_query' => array(
      array(
        'key' => 'new',
        'value' => '1',
        'compare' => '=='
      )
    )
  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();

      if ( has_post_thumbnail()) {
        $post_thumbnail_id = get_post_thumbnail_id( $post );
        $image = '<img src="'. wp_get_attachment_image_url( $post_thumbnail_id, "medium" ) .'" title="'. get_the_title() .'" alt="'. get_the_title() .'" />';
      } else {
        $image = '<img src="'. catchFirstImage() .'" title="'. the_title() .'" alt="'. the_title() .'" />';
      }
      if( get_field('sale') ) {
        $action = '<span class="action upper fira-bold">НА АКЦИИ</span>';
      } else {
        $action = '';
      }

      $output = $output .'<div id="post-'. get_the_ID() .'" class="col-xs-6 col-md-4 nopadding card-product__img card-product__img--cat">
        <a href="'. get_the_permalink() .'">'. $image .'
          '. $action .'
          <span class="num upper fira-bold">'. get_the_title() .'</span>
          <i class="ic ic-loop"></i>
        </a>
        <a href="#" class="like" like-id="'. get_the_ID() .'"><i class="ic ic-like"></i></a>
      </div><!-- end card-product__img -->';
    endwhile;
  endif;

  // Reset Query
  wp_reset_query();
  die($output);
}
add_action('wp_ajax_get_new', 'get_new');
add_action('wp_ajax_nopriv_get_new', 'get_new'); // not really needed

function get_sale() {

  // args
  $args = array(
    'post_type' => 'product',
    'showposts' => 100,
    'meta_query' => array(
      array(
        'key' => 'sale',
        'value' => '1',
        'compare' => '=='
      )
    )
  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();

      if ( has_post_thumbnail()) {
        $post_thumbnail_id = get_post_thumbnail_id( $post );
        $image = '<img src="'. wp_get_attachment_image_url( $post_thumbnail_id, "medium" ) .'" title="'. get_the_title() .'" alt="'. get_the_title() .'" />';
      } else {
        $image = '<img src="'. catchFirstImage() .'" title="'. the_title() .'" alt="'. the_title() .'" />';
      }
      if( get_field('sale') ) {
        $action = '<span class="action upper fira-bold">НА АКЦИИ</span>';
      } else {
        $action = '';
      }

      $output = $output .'<div id="post-'. get_the_ID() .'" class="col-xs-6 col-md-4 nopadding card-product__img card-product__img--cat">
        <a href="'. get_the_permalink() .'">'. $image .'
          '. $action .'
          <span class="num upper fira-bold">'. get_the_title() .'</span>
          <i class="ic ic-loop"></i>
        </a>
        <a href="#" class="like" like-id="'. get_the_ID() .'"><i class="ic ic-like"></i></a>
      </div><!-- end card-product__img -->';
    endwhile;
  endif;

  // Reset Query
  wp_reset_query();
  die($output);
}
add_action('wp_ajax_get_sale', 'get_sale');
add_action('wp_ajax_nopriv_get_sale', 'get_sale'); // not really needed

function get_prices_and_id() {
  // args
  $args = array(
    'post_type' => 'product',
    'showposts' => 100
  );

  // query
  $the_query = new WP_Query( $args );


  $output ='[';

  $i = 0;

  if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();

      if ( has_post_thumbnail()) {
        $post_thumbnail_id = get_post_thumbnail_id( $post );
        $image = wp_get_attachment_image_url( $post_thumbnail_id, "medium" );
      } else {
        $image = catchFirstImage();
      }
      if( get_field('sale') ) {
        $action = '1';
      } else {
        $action = '2';
      }
      if ($i == 0) {
        $start = '';
      } else {
        $start = ',';
      }

      $output = $output.$start.'{
        "id": "'. get_the_ID() .'",
        "price": "'. get_field("price") .'",
        "image": "'. $image .'",
        "sale": "'. $action .'"
      }';

      $i++;

    endwhile;
  endif;

  $output = $output .']';

  // Reset Query
  wp_reset_query();
  die($output);
}
add_action('wp_ajax_get_prices_and_id', 'get_prices_and_id');
add_action('wp_ajax_nopriv_get_prices_and_id', 'get_prices_and_id'); // not really needed

function get_ranged() {

  $posts = $_GET['ids'];

  // args
  $args = array(
    'post_type' => 'product',
    'showposts' => 100,
    'orderby' => 'ASC',
    'post__in' => $posts,

  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();

      if ( has_post_thumbnail()) {
        $post_thumbnail_id = get_post_thumbnail_id( $post );
        $image = '<img src="'. wp_get_attachment_image_url( $post_thumbnail_id, "medium" ) .'" title="'. get_the_title() .'" alt="'. get_the_title() .'" />';
      } else {
        $image = '<img src="'. catchFirstImage() .'" title="'. the_title() .'" alt="'. the_title() .'" />';
      }
      if( get_field('sale') ) {
        $action = '<span class="action upper fira-bold">НА АКЦИИ</span>';
      } else {
        $action = '';
      }

      $output = $output .'<div id="post-'. get_the_ID() .'" class="col-xs-6 col-md-4 nopadding card-product__img card-product__img--cat">
        <a href="'. get_the_permalink() .'">'. $image .'
          '. $action .'
          <span class="num upper fira-bold">'. get_the_title() .'</span>
          <i class="ic ic-loop"></i>
        </a>
        <a href="#" class="like" like-id="'. get_the_ID() .'"><i class="ic ic-like"></i></a>
      </div><!-- end card-product__img -->';
    endwhile;
  endif;

  // Reset Query
  wp_reset_query();
  die($output);
}
add_action('wp_ajax_get_ranged', 'get_ranged');
add_action('wp_ajax_nopriv_get_ranged', 'get_ranged'); // not really needed

add_action( 'wp_ajax_set_my_cookie', 'set_my_cookie' );
add_action('wp_ajax_nopriv_set_my_cookie', 'set_my_cookie'); // not really needed
function set_my_cookie() {

  $cookie_id = $_GET['id'];
  $id_in_cookie = $_COOKIE['post_ids'];

  if(!isset($_COOKIE['post_ids'])) {
    $cookie_array = $cookie_id;
  } else {
    $test_array = explode(" ", $id_in_cookie);

    if (in_array($cookie_id, $test_array)) {
      $cookie_array = $id_in_cookie;
    } else {
      $cookie_array = $id_in_cookie . ', ' . $cookie_id;
    }
  }

  $path = parse_url(get_option('siteurl'), PHP_URL_PATH);
  $host = parse_url(get_option('siteurl'), PHP_URL_HOST);
  $expiry = strtotime('+1 month');
  setcookie('post_ids', $cookie_array, $expiry, $path, $host);

  if(!isset($_COOKIE['post_ids'])) {
    echo "The cookie: post_id is not set.";
  } else {
    echo "The cookie is set.";
    echo "Value of cookie: " . $_COOKIE['post_ids'];
  }

  wp_die();
}

// Same handler function...
add_action( 'wp_ajax_get_my_cookie', 'get_my_cookie' );
add_action( 'wp_ajax_nopriv_get_my_cookie', 'get_my_cookie' );
function get_my_cookie() {



  $id_in_cookie = $_COOKIE['post_ids'];

  $posts = explode(" ", $id_in_cookie);

$output = '';

  $args = array(
    'post_type' => 'product',
    'showposts' => 100,
    'orderby' => 'ASC',
    'post__in' => $posts,

  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();

      if ( has_post_thumbnail()) {
        $post_thumbnail_id = get_post_thumbnail_id( $post );
        $image = '<img src="'. wp_get_attachment_image_url( $post_thumbnail_id, "medium" ) .'" title="'. get_the_title() .'" alt="'. get_the_title() .'" />';
      } else {
        $image = '<img src="'. catchFirstImage() .'" title="'. the_title() .'" alt="'. the_title() .'" />';
      }
      if( get_field('sale') ) {
        $action = '<span class="action upper fira-bold">НА АКЦИИ</span>';
      } else {
        $action = '';
      }

      $output = $output .'<div id="post-'. get_the_ID() .'" class="col-xs-6 col-md-4 nopadding card-product__img card-product__img--cat">
        <a href="'. get_the_permalink() .'">'. $image .'
          '. $action .'
          <span class="num upper fira-bold">'. get_the_title() .'</span>
          <i class="ic ic-loop"></i>
        </a>
      </div><!-- end card-product__img -->';
    endwhile;
  endif;

  // Reset Query
  wp_reset_query();
  die($output);

}
?>
