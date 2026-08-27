<?php
/** Portada Conbiz adaptada a contenido DACRIZ. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
$asset = get_stylesheet_directory_uri() . '/assets/conbiz/';
?>
<section class="cb-home-hero">
 <div class="cb-hero-word" aria-hidden="true">Dacriz</div>
 <div class="container cb-home-hero__grid">
  <div class="cb-home-hero__copy" data-reveal><span class="cb-kicker">Agencia de soluciones digitales</span><h1>Tecnología para hacer crecer <em>tu negocio.</em></h1><p>Desarrollamos sitios web, tiendas online y automatizaciones que convierten procesos complejos en resultados claros.</p><a class="cb-button" href="<?php echo esc_url(home_url('/contacto/')); ?>">Diagnóstico gratuito <span>»</span></a></div>
  <div class="cb-home-hero__visual" data-reveal><div class="cb-photo-slices"><img src="<?php echo esc_url($asset . 'service-v1-img2.jpg'); ?>" alt="Profesionales trabajando en una solución digital" width="570" height="495"><i></i><i></i><i></i></div><span class="cb-shape cb-shape--one"></span><span class="cb-shape cb-shape--two"></span></div>
 </div>
 <div class="container cb-hero-guides"><a href="<?php echo esc_url(home_url('/servicios/web-tech/')); ?>"><b>⌘</b><span><small>Construye tu presencia digital</small><strong>Web y comercio electrónico</strong></span><i>»</i></a><a href="<?php echo esc_url(home_url('/servicios/growth-ia/')); ?>"><b>◎</b><span><small>Optimiza tu operación</small><strong>Automatización e inteligencia artificial</strong></span><i>»</i></a></div>
</section>

<section class="cb-section cb-about-home"><div class="container cb-about-home__grid">
 <div class="cb-about-collage" data-reveal><img class="cb-about-main" src="<?php echo esc_url($asset . 'service-v1-img1.jpg'); ?>" alt="Desarrollo estratégico de proyectos digitales" width="570" height="495"><div class="cb-about-video"><img src="<?php echo esc_url($asset . 'services-details-img2.jpg'); ?>" alt="Equipo desarrollando un proyecto" width="700" height="450"><span>▶</span></div><strong>+10<small>años creando</small></strong></div>
 <div class="cb-about-copy" data-reveal><span class="cb-kicker">Acerca de Dacriz</span><h2>Construimos soluciones con estrategia y precisión</h2><p class="cb-accent-copy">Experiencia real en WordPress, e-commerce, integraciones y crecimiento digital.</p><p>No entregamos únicamente una página web. Analizamos el negocio, diseñamos la experiencia y desarrollamos una herramienta preparada para captar clientes y crecer.</p><div class="cb-mini-feature"><span>⌁</span><div><h3>Desarrollo y estrategia</h3><p>Un solo equipo para diseño, tecnología, SEO y automatización.</p></div></div><a class="cb-button" href="<?php echo esc_url(home_url('/nosotros/')); ?>">Conoce nuestra experiencia <span>»</span></a></div>
</div></section>

<section class="cb-section cb-services-home" id="servicios"><div class="container">
 <div class="cb-heading" data-reveal><span class="cb-kicker">Cómo podemos ayudarte</span><h2>Servicios diseñados para<br>resolver y crecer</h2></div>
 <div class="cb-image-services">
  <a href="<?php echo esc_url(home_url('/servicios/web-tech/')); ?>" data-reveal><img src="<?php echo esc_url($asset . 'feauters-v1-img1.jpg'); ?>" alt="Desarrollo web" width="270" height="200"><span>Desarrollo web y e-commerce <i>»</i></span></a>
  <a href="<?php echo esc_url(home_url('/servicios/growth-ia/')); ?>" data-reveal><img src="<?php echo esc_url($asset . 'feauters-v1-img2.jpg'); ?>" alt="Automatización e inteligencia artificial" width="270" height="200"><span>Automatización e IA <i>»</i></span></a>
  <a href="<?php echo esc_url(home_url('/servicios/seo/')); ?>" data-reveal><img src="<?php echo esc_url($asset . 'feauters-v1-img3.jpg'); ?>" alt="Posicionamiento SEO" width="270" height="200"><span>SEO y crecimiento <i>»</i></span></a>
  <a href="<?php echo esc_url(home_url('/servicios/ads/')); ?>" data-reveal><img src="<?php echo esc_url($asset . 'feauters-v1-img4.jpg'); ?>" alt="Publicidad digital" width="270" height="200"><span>Publicidad digital <i>»</i></span></a>
 </div>
 <div class="cb-achievements" data-reveal><div><b>10+</b><span>Años de experiencia</span></div><div><b>65+</b><span>Proyectos completados</span></div><div><b>4.76</b><span>Valoración profesional</span></div><a href="<?php echo esc_url(home_url('/portafolio/')); ?>"><small>Trabajo comprobado</small>Ver proyectos <i>»</i></a></div>
</div></section>

<section class="cb-section cb-approach"><div class="container">
 <div class="cb-heading cb-heading--center" data-reveal><span class="cb-kicker">Nuestro enfoque</span><h2>Una solución conectada,<br>no servicios aislados</h2></div>
 <div class="cb-tabs" data-reveal><span class="active">Estrategia y diseño</span><span>Desarrollo sólido</span><span>Automatización</span><span>Medición y mejora</span></div>
 <div class="cb-approach__content"><img src="<?php echo esc_url($asset . 'services-details-img1.jpg'); ?>" alt="Consultoría y desarrollo de soluciones" width="700" height="450" data-reveal><div data-reveal><h3>Desarrollo digital orientado a resultados</h3><p>Cada decisión de diseño y tecnología parte de un objetivo comercial. Creamos soluciones rápidas, administrables y preparadas para evolucionar.</p><ul><li>Arquitectura y experiencia de usuario</li><li>Desarrollo WordPress y e-commerce</li><li>Integraciones y automatizaciones</li><li>SEO técnico y analítica</li></ul><a class="cb-text-link" href="<?php echo esc_url(home_url('/servicios/')); ?>">Explorar todos los servicios <span>»</span></a></div></div>
</div></section>

<section class="cb-home-cta"><div class="container" data-reveal><span class="cb-kicker">Comencemos</span><h2>¿Tienes una idea o un problema por resolver?</h2><p>Cuéntanos el objetivo. Te ayudaremos a convertirlo en una solución clara, viable y preparada para crecer.</p><a class="cb-button" href="<?php echo esc_url(home_url('/contacto/')); ?>">Hablemos de tu proyecto <span>»</span></a></div></section>
