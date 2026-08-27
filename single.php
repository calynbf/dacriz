<?php
/** Artículo individual. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="primary" class="site-main cb-content-page cb-single-post">
 <section class="cb-page-banner cb-page-banner--blog"><div class="container"><span class="cb-kicker">Blog Dacriz</span><h1><?php the_title(); ?></h1><p><?php echo esc_html(get_the_date()); ?></p></div></section>
 <article class="cb-content-section"><div class="container cb-prose"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', array('class'=>'cb-single-cover')); } ?><?php the_content(); ?></div></article>
</main>
<?php endwhile; get_footer();
