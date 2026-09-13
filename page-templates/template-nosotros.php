<?php
/**
 * Template Name: Página Nosotros
 *
 * @package DACRIZ
 */

if (!defined('ABSPATH')) exit;

get_header();
$media = trailingslashit(get_stylesheet_directory_uri()) . 'assets/img/dacriz-media/';
$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
?>

<main id="primary" class="site-main dacriz-about">
 <section class="dacriz-hero dacriz-about-hero">
  <div class="container"><div class="dacriz-about-hero__copy">
   <span>Conoce a DACRIZ</span>
   <h1>Experiencia digital que se convierte en soluciones reales</h1>
   <p>Más de 10 años desarrollando sitios web, tiendas online y estrategias digitales para empresas que necesitan avanzar con una base sólida.</p>
  </div></div>
 </section>

 <section class="dacriz-about-story">
  <div class="container dacriz-about-story__grid">
   <div class="dacriz-about-story__media" data-reveal>
    <img src="<?php echo esc_url($media . 'equipo-estrategia-dacriz.webp'); ?>" alt="Equipo de DACRIZ definiendo una estrategia digital" width="1600" height="1067" loading="eager" decoding="async">
    <div><strong>10+</strong><span>años creando<br>soluciones digitales</span></div>
   </div>
   <div class="dacriz-about-story__copy" data-reveal>
    <span class="dacriz-about-kicker">Nuestra trayectoria</span>
    <h2>Conocemos el trabajo que existe detrás de un negocio digital</h2>
    <p>DACRIZ nace de años de experiencia resolviendo necesidades reales: crear una web desde cero, recuperar un sitio que dejó de funcionar, mejorar una tienda online o convertir procesos manuales en soluciones más eficientes.</p>
    <p>Hemos trabajado con WordPress, WooCommerce, Shopify, PrestaShop y Elementor, además de servidores, integraciones, automatización con inteligencia artificial, SEO y publicidad digital.</p>
    <p>No aplicamos una fórmula igual para todos. Primero entendemos el negocio y luego proponemos una solución clara, viable y preparada para crecer.</p>
    <a href="<?php echo esc_url(home_url('/portafolio/')); ?>" class="dacriz-about-link">Conoce nuestros proyectos <span>→</span></a>
   </div>
  </div>
 </section>

 <section class="dacriz-about-principles">
  <div class="container">
   <header class="dacriz-about-heading" data-reveal><span class="dacriz-about-kicker">Cómo trabajamos</span><h2>Una relación directa, ordenada y sin complicaciones</h2><p>La experiencia también consiste en anticipar problemas, explicar cada decisión y cuidar el proyecto después de publicarlo.</p></header>
   <div class="dacriz-about-principles__grid">
    <article data-reveal><span>01</span><h3>Escuchamos primero</h3><p>Conocemos tus objetivos, el momento de tu empresa y lo que realmente necesitas antes de recomendar una solución.</p></article>
    <article data-reveal><span>02</span><h3>Hablamos con claridad</h3><p>Definimos alcance, prioridades y próximos pasos en un lenguaje sencillo, sin promesas difíciles de sostener.</p></article>
    <article data-reveal><span>03</span><h3>Construimos con criterio</h3><p>Cuidamos diseño, rendimiento, seguridad y facilidad de administración para que el resultado sea útil a largo plazo.</p></article>
    <article data-reveal><span>04</span><h3>Seguimos presentes</h3><p>Después del lanzamiento podemos acompañarte con mantenimiento, mejoras, marketing y nuevas integraciones.</p></article>
   </div>
  </div>
 </section>

 <section class="dacriz-about-purpose">
  <div class="container dacriz-about-purpose__grid">
   <div data-reveal><span class="dacriz-about-kicker">Nuestro propósito</span><h2>Ayudar a las empresas a crecer con tecnología bien aplicada</h2></div>
   <div class="dacriz-about-purpose__copy" data-reveal>
    <p>Nuestro objetivo no es entregar una web bonita y desaparecer. Buscamos que cada solución sea fácil de usar, responda a una necesidad concreta y contribuya al crecimiento del negocio.</p>
    <div class="dacriz-about-values">
     <div><strong>Responsabilidad</strong><span>Cuidamos cada entrega y respetamos los acuerdos.</span></div>
     <div><strong>Transparencia</strong><span>Comunicamos avances, decisiones y costos con claridad.</span></div>
     <div><strong>Mejora continua</strong><span>Aprendemos, medimos y optimizamos cuando el proyecto lo requiere.</span></div>
    </div>
   </div>
  </div>
 </section>

 <section class="dacriz-about-experience">
  <div class="container">
   <div class="dacriz-about-experience__intro" data-reveal><span>Experiencia multidisciplinaria</span><h2>Una visión completa de tu presencia digital</h2></div>
   <div class="dacriz-about-experience__items">
    <div><strong>01</strong><span>Desarrollo web y e-commerce</span></div>
    <div><strong>02</strong><span>SEO y rendimiento</span></div>
    <div><strong>03</strong><span>Publicidad y conversión</span></div>
    <div><strong>04</strong><span>Automatización e IA</span></div>
   </div>
  </div>
 </section>

 <section class="dacriz-cta dacriz-about-cta"><div class="container">
  <span>Hablemos de tu negocio</span><h2>¿Tienes un proyecto en mente?</h2><p>Cuéntanos qué quieres mejorar y evaluaremos contigo el mejor camino para hacerlo realidad.</p>
  <div class="btn-group"><a href="<?php echo esc_url(home_url('/contacto/')); ?>" class="btn-primary btn-white">Solicitar una evaluación</a><?php if ($whatsapp) : ?><a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Hola, vi la página de DACRIZ y quisiera conversar sobre mi proyecto.'); ?>" class="btn-primary dacriz-about-whatsapp" target="_blank" rel="noopener">Conversar por WhatsApp</a><?php endif; ?></div>
 </div></section>
</main>

<?php get_footer();
