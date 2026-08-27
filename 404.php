<?php
/** Página no encontrada. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
get_header(); ?>
<main id="primary" class="site-main dacriz-ui-error-page"><div class="container"><strong>404</strong><span class="dacriz-ui-kicker">Página no encontrada</span><h1>Esta dirección no existe o fue trasladada</h1><p>Puedes volver al inicio o explorar nuestros servicios digitales.</p><div><a class="dacriz-ui-button" href="<?php echo esc_url(home_url('/')); ?>">Volver al inicio <span>»</span></a><a class="dacriz-ui-text-link" href="<?php echo esc_url(home_url('/servicios/')); ?>">Ver servicios <span>»</span></a></div></div></main>
<?php get_footer(); ?>
