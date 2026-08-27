<?php
/** Índice del blog. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
get_header();
?>
<main id="primary" class="site-main dacriz-ui-content-page dacriz-ui-blog-page">
 <section class="dacriz-ui-page-banner dacriz-ui-page-banner--blog"><div class="container"><h1>Ideas para crecer en digital</h1><p>Desarrollo web, e-commerce, automatización, SEO y estrategias aplicables a tu negocio.</p></div></section>
 <section class="dacriz-ui-content-section"><div class="container">
  <?php if (have_posts()) : ?>
   <div class="dacriz-ui-post-grid">
    <?php while (have_posts()) : the_post(); ?>
     <article <?php post_class('dacriz-ui-post-card'); ?>>
      <a class="dacriz-ui-post-card__image" href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', array('loading'=>'lazy')); } else { echo '<span aria-hidden="true">D</span>'; } ?></a>
      <div class="dacriz-ui-post-card__body"><time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p><a class="dacriz-ui-read-more" href="<?php the_permalink(); ?>">Leer artículo <span>»</span></a></div>
     </article>
    <?php endwhile; ?>
   </div>
   <div class="dacriz-ui-pagination"><?php the_posts_pagination(array('prev_text'=>'Anterior','next_text'=>'Siguiente')); ?></div>
  <?php else : ?>
   <div class="dacriz-ui-empty-state"><span>✎</span><h2>Estamos preparando nuevos contenidos</h2><p>Pronto encontrarás guías y recomendaciones sobre tecnología, ventas y crecimiento digital.</p><a class="dacriz-ui-button" href="<?php echo esc_url(home_url('/servicios/')); ?>">Explorar servicios <span>»</span></a></div>
  <?php endif; ?>
 </div></section>
</main>
<?php get_footer(); ?>
