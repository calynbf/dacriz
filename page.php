<?php
/** Página genérica. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="primary" class="site-main cb-content-page">
 <section class="cb-page-banner"><div class="container"><h1><?php the_title(); ?></h1></div></section>
 <section class="cb-content-section"><div class="container cb-prose"><?php the_content(); ?></div></section>
</main>
<?php endwhile; get_footer();
