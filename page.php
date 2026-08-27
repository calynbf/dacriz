<?php
/** Página genérica. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
get_header();
while (have_posts()) : the_post(); ?>
<main id="primary" class="site-main dacriz-ui-content-page">
 <section class="dacriz-ui-page-banner"><div class="container"><h1><?php the_title(); ?></h1></div></section>
 <section class="dacriz-ui-content-section"><div class="container dacriz-ui-prose"><?php the_content(); ?></div></section>
</main>
<?php endwhile; get_footer();
