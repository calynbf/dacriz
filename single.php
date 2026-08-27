<?php
/** Artículo individual. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="primary" class="site-main dacriz-ui-content-page dacriz-ui-single-post">
 <section class="dacriz-ui-page-banner dacriz-ui-page-banner--blog"><div class="container"><span class="dacriz-ui-kicker">Blog Dacriz</span><h1><?php the_title(); ?></h1><p><?php echo esc_html(get_the_date()); ?></p></div></section>
 <article class="dacriz-ui-content-section"><div class="container dacriz-ui-prose"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', array('class'=>'dacriz-ui-single-cover')); } ?><?php the_content(); ?></div></article>
</main>
<?php endwhile; get_footer();
