<?php
/**
 * Template Name: Gracias
 * @package DACRIZ
 */
if (!defined('ABSPATH')) exit;
get_header();
?>
<main id="primary" class="site-main"><section class="dacriz-thanks"><div class="container"><div class="dacriz-thanks__card">
 <span>Mensaje recibido</span><strong aria-hidden="true">✓</strong><h1>Gracias por contactarnos</h1>
 <p>Recibimos la información de tu proyecto. La revisaremos y nos comunicaremos contigo a la brevedad.</p>
 <div><a class="btn-primary" href="<?php echo esc_url(home_url('/')); ?>">Volver al inicio</a><a href="<?php echo esc_url(home_url('/portafolio/')); ?>">Ver proyectos <b>→</b></a></div>
</div></div></section></main>
<?php get_footer();
