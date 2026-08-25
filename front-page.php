<?php
/**
 * Front Page Template
 * Página de inicio de DACRIZ
 * 
 * @package DACRIZ
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/content', 'home'); ?>
</main>

<?php
get_footer();
