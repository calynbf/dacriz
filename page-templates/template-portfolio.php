<?php
/**
 * Template Name: Portfolio
 *
 * @package DACRIZ
 */

if (!defined('ABSPATH')) exit;

get_header();

$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
$projects = array(
    array('title' => 'MOPC Broadband Network', 'image' => 'mopc-broadband-network.webp'),
    array('title' => 'Pharmavet Corporation', 'image' => 'pharmavet-corporation.webp'),
    array('title' => 'La Cervecería del Valle', 'image' => 'cerveceria-del-valle.webp'),
    array('title' => 'Legallo Boutique Legal', 'image' => 'legallo-boutique-legal.webp'),
    array('title' => 'La Estrella Maestra', 'image' => 'estrella-maestra.webp'),
    array('title' => 'SIEC Uniformes', 'image' => 'siec-uniformes.webp'),
    array('title' => 'CDA Moto CP', 'image' => 'cda-moto-cp.webp'),
    array('title' => 'Escuela de Conducción', 'image' => 'escuela-de-conduccion.webp'),
);
$projects_uri = trailingslashit(get_stylesheet_directory_uri()) . 'assets/img/proyectos/';
?>

<main id="primary" class="site-main">
 <section class="dacriz-hero dacriz-portfolio-hero">
  <div class="container"><div class="section-title">
   <span class="dacriz-portfolio-eyebrow">Experiencia comprobada</span>
   <h1>Nuestros proyectos</h1>
   <p>Una selección de experiencias digitales creadas para empresas de distintos sectores.</p>
  </div></div>
 </section>

 <section class="dacriz-portfolio-gallery" aria-labelledby="dacriz-portfolio-title">
  <div class="container">
   <header class="dacriz-portfolio-intro">
    <div><span>Diseño y desarrollo web</span><h2 id="dacriz-portfolio-title">Trabajo real, pensado para cada marca</h2></div>
    <p>Selecciona una imagen para verla completa. Cada pieza presenta el diseño del sitio sin enlaces externos ni páginas individuales.</p>
   </header>
   <div class="dacriz-project-grid">
    <?php foreach ($projects as $index => $project) : $image_url = $projects_uri . $project['image']; ?>
     <article class="dacriz-project-card" data-reveal>
      <button class="dacriz-project-open" type="button" data-lightbox-src="<?php echo esc_url($image_url); ?>" data-lightbox-title="<?php echo esc_attr($project['title']); ?>" aria-label="Ver proyecto <?php echo esc_attr($project['title']); ?> en tamaño completo">
       <span class="dacriz-project-image">
        <img src="<?php echo esc_url($image_url); ?>" alt="Diseño web del proyecto <?php echo esc_attr($project['title']); ?>" width="1366" height="900" loading="<?php echo $index < 2 ? 'eager' : 'lazy'; ?>" decoding="async">
        <span class="dacriz-project-zoom" aria-hidden="true"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-4-4M11 8v6M8 11h6"></path></svg>Ampliar</span>
       </span>
       <span class="dacriz-project-title"><?php echo esc_html($project['title']); ?></span>
      </button>
     </article>
    <?php endforeach; ?>
   </div>
  </div>
 </section>

 <section class="dacriz-cta dacriz-portfolio-cta"><div class="container">
  <h2>¿Construimos tu próximo proyecto?</h2>
  <p>Cuéntanos qué necesita tu negocio y preparemos una solución a tu medida.</p>
  <div class="btn-group">
   <a href="<?php echo esc_url(home_url('/contacto/')); ?>" class="btn-primary btn-white">Solicitar cotización</a>
   <?php if (!empty($whatsapp)) : ?><a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Hola, vi su portafolio y me gustaría conversar sobre mi proyecto.'); ?>" class="btn-primary dacriz-portfolio-whatsapp" target="_blank" rel="noopener">Escribir por WhatsApp</a><?php endif; ?>
  </div>
 </div></section>
</main>

<div class="dacriz-project-lightbox" id="dacriz-project-lightbox" aria-hidden="true">
 <button class="dacriz-project-lightbox__backdrop" type="button" data-lightbox-close aria-label="Cerrar imagen"></button>
 <div class="dacriz-project-lightbox__dialog" role="dialog" aria-modal="true" aria-labelledby="dacriz-lightbox-title">
  <div class="dacriz-project-lightbox__bar"><h2 id="dacriz-lightbox-title"></h2><button class="dacriz-project-lightbox__close" type="button" data-lightbox-close aria-label="Cerrar lightbox">&times;</button></div>
  <div class="dacriz-project-lightbox__canvas"><img src="" alt=""></div>
 </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
 const lightbox = document.getElementById('dacriz-project-lightbox');
 if (!lightbox) return;
 const image = lightbox.querySelector('img');
 const title = lightbox.querySelector('#dacriz-lightbox-title');
 const closeButton = lightbox.querySelector('.dacriz-project-lightbox__close');
 let trigger = null;
 function openLightbox(button) {
  trigger = button;
  image.src = button.dataset.lightboxSrc;
  image.alt = 'Vista completa del proyecto ' + button.dataset.lightboxTitle;
  title.textContent = button.dataset.lightboxTitle;
  lightbox.classList.add('is-open');
  lightbox.setAttribute('aria-hidden', 'false');
  document.body.classList.add('dacriz-lightbox-open');
  closeButton.focus();
 }
 function closeLightbox() {
  lightbox.classList.remove('is-open');
  lightbox.setAttribute('aria-hidden', 'true');
  document.body.classList.remove('dacriz-lightbox-open');
  image.removeAttribute('src');
  if (trigger) trigger.focus();
 }
 document.querySelectorAll('.dacriz-project-open').forEach(function (button) { button.addEventListener('click', function () { openLightbox(button); }); });
 lightbox.querySelectorAll('[data-lightbox-close]').forEach(function (button) { button.addEventListener('click', closeLightbox); });
 document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && lightbox.classList.contains('is-open')) closeLightbox(); });
});
</script>

<?php get_footer();
