<?php
/** Página de inicio de DACRIZ. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
$contact_url = home_url('/contacto/');
?>
<section class="home-premium-hero" aria-labelledby="home-title">
 <div class="hero-orb hero-orb--one" aria-hidden="true"></div><div class="hero-orb hero-orb--two" aria-hidden="true"></div>
 <div class="container home-premium-hero__grid">
  <div class="home-premium-hero__copy" data-reveal>
   <span class="eyebrow"><span></span>Tecnología, estrategia y crecimiento</span>
   <h1 id="home-title">Creamos experiencias digitales que <em>convierten.</em></h1>
   <p class="hero-lead">Diseñamos sitios web, tiendas online y automatizaciones con IA para transformar visitas en oportunidades reales de negocio.</p>
   <div class="hero-actions"><a class="button-premium button-premium--primary" href="<?php echo esc_url($contact_url); ?>">Solicitar diagnóstico <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="button-premium button-premium--ghost" href="#servicios">Explorar servicios</a></div>
   <div class="hero-proof" aria-label="Experiencia de Dacriz"><div><strong>10+</strong><span>Años de experiencia</span></div><div><strong>65+</strong><span>Proyectos entregados</span></div><div><strong>4.76</strong><span>Valoración profesional</span></div></div>
  </div>
  <div class="hero-showcase" data-reveal aria-label="Soluciones digitales Dacriz">
   <div class="showcase-glow" aria-hidden="true"></div>
   <div class="browser-card"><div class="browser-card__bar"><i></i><i></i><i></i><span>dacriz.com</span></div><div class="browser-card__body"><div class="browser-sidebar"><b>D</b><span></span><span></span><span></span><span></span></div><div class="browser-content"><div class="browser-label">CRECIMIENTO DIGITAL</div><div class="browser-heading"></div><div class="browser-heading browser-heading--short"></div><div class="browser-copy"></div><div class="browser-copy browser-copy--short"></div><div class="browser-button"></div><div class="browser-stats"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div></div></div></div>
   <div class="floating-card floating-card--performance"><span class="floating-icon"><svg viewBox="0 0 24 24"><path d="M4 15l4-4 4 3 7-8M15 6h4v4"/></svg></span><span><small>Rendimiento</small><strong>+48%</strong></span></div>
   <div class="floating-card floating-card--ai"><span class="status-dot"></span><span><small>Automatización IA</small><strong>Activa 24/7</strong></span></div>
  </div>
 </div><a class="hero-scroll" href="#servicios" aria-label="Ir a servicios"><span></span></a>
</section>

<section class="premium-section premium-services" id="servicios" aria-labelledby="services-title"><div class="container">
 <div class="premium-heading" data-reveal><div><span class="eyebrow eyebrow--dark"><span></span>Lo que hacemos</span><h2 id="services-title">Soluciones que impulsan<br>tu negocio digital</h2></div><p>Unimos diseño, tecnología y marketing para construir sistemas digitales que se ven bien y, sobre todo, generan resultados.</p></div>
 <div class="premium-services__grid">
 <?php
 $services = array(
  array('01','web-tech','Desarrollo web','WordPress, Shopify, WooCommerce y soluciones a medida rápidas, escalables y fáciles de administrar.','WordPress,E-commerce,UX/UI','<rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 21h8M12 18v3M3 8h18"/>'),
  array('02','growth-ia','Automatización e IA','Flujos inteligentes, asistentes y conexiones con WhatsApp para atender mejor y ahorrar horas operativas.','IA,WhatsApp,Integraciones','<path d="M12 2a4 4 0 014 4v1a4 4 0 014 4v2a4 4 0 01-4 4v1a4 4 0 01-8 0v-1a4 4 0 01-4-4v-2a4 4 0 014-4V6a4 4 0 014-4z"/><path d="M9 9h6M9 13h6"/>'),
  array('03','seo','SEO y crecimiento','Estrategia, contenido y optimización técnica para atraer tráfico calificado y construir autoridad sostenible.','SEO,Contenido,Analítica','<path d="M4 19V9M10 19V5M16 19v-7M22 19H2"/><path d="M3 7l6-4 6 6 6-5"/>'),
  array('04','ads','Publicidad digital','Campañas en Google y Meta enfocadas en leads, ventas y decisiones respaldadas por datos reales.','Google Ads,Meta Ads,Leads','<path d="M3 11l18-7-7 18-3-8-8-3zM11 14l5-5"/>'),
 );
 foreach ($services as $index => $service) : ?>
  <a class="premium-service-card<?php echo 0 === $index ? ' premium-service-card--featured' : ''; ?>" href="<?php echo esc_url(home_url('/servicios/' . $service[1] . '/')); ?>" data-reveal><span class="service-index"><?php echo esc_html($service[0]); ?></span><span class="service-icon-premium"><svg viewBox="0 0 24 24"><?php echo wp_kses($service[5], array('rect'=>array('x'=>array(),'y'=>array(),'width'=>array(),'height'=>array(),'rx'=>array()),'path'=>array('d'=>array()))); ?></svg></span><h3><?php echo esc_html($service[2]); ?></h3><p><?php echo esc_html($service[3]); ?></p><span class="service-tags"><?php foreach (explode(',', $service[4]) as $tag) : ?><i><?php echo esc_html($tag); ?></i><?php endforeach; ?></span><span class="card-link">Conocer el servicio <b>→</b></span></a>
 <?php endforeach; ?>
 </div>
</div></section>

<section class="premium-section premium-trust" aria-labelledby="trust-title"><div class="container premium-trust__grid">
 <div class="trust-copy" data-reveal><span class="eyebrow eyebrow--dark"><span></span>Por qué Dacriz</span><h2 id="trust-title">Tecnología clara.<br><em>Resultados medibles.</em></h2><p>No entregamos solo una web bonita. Construimos una herramienta alineada con tus objetivos, preparada para crecer y convertir.</p><a class="text-link" href="<?php echo esc_url(home_url('/nosotros/')); ?>">Conoce nuestra experiencia <span>→</span></a></div>
 <div class="trust-list"><article data-reveal><span>01</span><div><h3>Visión integral</h3><p>Diseño, desarrollo, SEO y automatización trabajando como un solo sistema.</p></div></article><article data-reveal><span>02</span><div><h3>Comunicación directa</h3><p>Hablas con quien analiza y desarrolla tu proyecto, sin intermediarios innecesarios.</p></div></article><article data-reveal><span>03</span><div><h3>Propiedad y control</h3><p>Recibes tus accesos y una solución que puedes administrar con independencia.</p></div></article></div>
</div></section>

<section class="premium-section premium-process" aria-labelledby="process-title"><div class="container"><div class="premium-heading premium-heading--center" data-reveal><div><span class="eyebrow"><span></span>Método de trabajo</span><h2 id="process-title">De una idea a un sistema que funciona</h2></div></div><div class="process-track"><article data-reveal><span>01</span><h3>Descubrimos</h3><p>Entendemos tu negocio, cliente y objetivo.</p></article><article data-reveal><span>02</span><h3>Diseñamos</h3><p>Definimos experiencia, estructura y estrategia.</p></article><article data-reveal><span>03</span><h3>Construimos</h3><p>Desarrollamos, integramos y probamos.</p></article><article data-reveal><span>04</span><h3>Impulsamos</h3><p>Publicamos, medimos y optimizamos.</p></article></div></div></section>

<section class="premium-section premium-faq" id="faq" aria-labelledby="faq-title"><div class="container premium-faq__grid"><div data-reveal><span class="eyebrow eyebrow--dark"><span></span>Preguntas frecuentes</span><h2 id="faq-title">Antes de empezar</h2><p>Información directa para ayudarte a tomar una buena decisión.</p></div><div class="premium-accordion"><details data-reveal open><summary>¿Qué tipo de proyectos desarrollan?<span></span></summary><p>Sitios corporativos, landing pages, tiendas online, desarrollos WordPress, Shopify, integraciones y automatizaciones con IA o WhatsApp.</p></details><details data-reveal><summary>¿Cuánto cuesta un proyecto?<span></span></summary><p>Depende del alcance, las integraciones y el plazo. Primero realizamos un diagnóstico y entregamos una propuesta clara, sin costos ocultos.</p></details><details data-reveal><summary>¿En cuánto tiempo estará listo?<span></span></summary><p>Una landing puede tomar pocos días; una tienda o solución personalizada, varias semanas. El cronograma se acuerda antes de comenzar.</p></details><details data-reveal><summary>¿La web quedará bajo mi control?<span></span></summary><p>Sí. Entregamos los accesos y dejamos el proyecto preparado para que administres contenidos, productos y solicitudes.</p></details></div></div></section>

<section class="premium-final-cta" aria-labelledby="cta-title"><div class="cta-orb" aria-hidden="true"></div><div class="container" data-reveal><span class="eyebrow"><span></span>Tu próximo proyecto empieza aquí</span><h2 id="cta-title">Construyamos algo que<br><em>haga crecer tu negocio.</em></h2><p>Cuéntanos tu idea y recibe una recomendación técnica inicial, clara y sin compromiso.</p><div class="hero-actions hero-actions--center"><a class="button-premium button-premium--primary" href="<?php echo esc_url($contact_url); ?>">Solicitar diagnóstico <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><?php if ($whatsapp) : ?><a class="button-premium button-premium--ghost" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Hola, quiero conversar sobre un proyecto digital'); ?>" target="_blank" rel="noopener">Conversar por WhatsApp</a><?php endif; ?></div></div></section>
