<?php
/**
 * Template Name: Landing - Campañas
 *
 * @package DACRIZ
 */

if (!defined('ABSPATH')) { exit; }

$slug = get_post_field('post_name', get_queried_object_id());
$landings = array(
    'desarrollo-web-para-negocios' => array(
        'eyebrow' => 'Desarrollo web y e-commerce',
        'title' => 'Una web profesional diseñada para convertir visitas en clientes',
        'lead' => 'Creamos sitios web y tiendas online rápidas, administrables y preparadas para vender, posicionarse y crecer contigo.',
        'image' => 'ecommerce-responsive-dacriz.webp',
        'image_alt' => 'Tienda online desarrollada para escritorio, tablet y celular',
        'service' => 'Desarrollo web',
        'form_option' => 'Página web o landing',
        'whatsapp' => 'Hola, vi la landing de desarrollo web y quiero una evaluación para mi proyecto.',
        'problem_title' => 'Tu sitio debe trabajar para tu negocio, no ser solo una tarjeta digital',
        'problem_text' => 'Si tu web es lenta, se ve desactualizada o no facilita el contacto, estás perdiendo oportunidades incluso cuando inviertes en publicidad.',
        'benefits' => array(
            array('Diseño orientado a conversión', 'Jerarquía clara, llamadas a la acción y navegación pensadas para generar consultas o ventas.'),
            array('WordPress, WooCommerce y Shopify', 'Elegimos la plataforma adecuada y dejamos una administración sencilla.'),
            array('Velocidad y experiencia móvil', 'Optimizamos imágenes, estructura y carga para usuarios que llegan desde anuncios.'),
        ),
        'deliverables' => array('Diseño responsive personalizado', 'Estructura de páginas y contenidos', 'Formulario y WhatsApp', 'SEO técnico inicial', 'Analítica y eventos preparados', 'Capacitación y soporte de lanzamiento'),
        'faq' => array(
            array('¿Cuánto demora un proyecto?', 'Una web corporativa suele tomar entre 2 y 4 semanas. Una tienda o desarrollo con integraciones requiere una estimación según el alcance.'),
            array('¿Podré editar el contenido?', 'Sí. Entregamos una solución administrable y explicamos cómo actualizar textos, imágenes, productos o secciones.'),
            array('¿Trabajan con una web existente?', 'Sí. Podemos rediseñar, corregir o migrar un sitio actual preservando la información útil.'),
        ),
    ),
    'chatbot-ia-para-empresas' => array(
        'eyebrow' => 'Chatbots y automatización con IA',
        'title' => 'Atiende consultas y oportunidades incluso cuando tu equipo no está conectado',
        'lead' => 'Implementamos asistentes con inteligencia artificial entrenados con la información de tu negocio para responder, orientar y derivar conversaciones.',
        'image' => 'chatbot-ia-dacriz.webp',
        'image_alt' => 'Configuración de un asistente empresarial con inteligencia artificial',
        'service' => 'Automatización',
        'form_option' => 'Automatización con WhatsApp o IA',
        'whatsapp' => 'Hola, vi la landing de chatbots con IA y quiero automatizar la atención de mi empresa.',
        'problem_title' => 'Responder tarde cuesta ventas y sobrecarga a tu equipo',
        'problem_text' => 'Un asistente bien configurado resuelve preguntas repetitivas, recopila datos y entrega las conversaciones importantes a una persona.',
        'benefits' => array(
            array('Respuestas basadas en tu información', 'Organizamos productos, servicios, políticas y preguntas frecuentes para mantener respuestas coherentes.'),
            array('Atención y calificación de prospectos', 'El asistente identifica necesidades, registra datos y guía al usuario al siguiente paso.'),
            array('Integración con tus procesos', 'Podemos conectar formularios, CRM, correo, calendarios, WhatsApp y otras herramientas.'),
        ),
        'deliverables' => array('Diseño del flujo conversacional', 'Carga de base de conocimiento', 'Configuración del asistente', 'Integración con canales disponibles', 'Derivación a agentes humanos', 'Pruebas, ajustes y capacitación'),
        'faq' => array(
            array('¿La IA puede inventar respuestas?', 'Configuramos instrucciones, fuentes autorizadas y límites para reducir respuestas incorrectas y derivar los casos sensibles.'),
            array('¿Se puede conectar con WhatsApp?', 'Sí, dependiendo de la cuenta y proveedor disponible. Revisamos la integración adecuada para WhatsApp Business.'),
            array('¿Puedo actualizar la información?', 'Sí. La solución se prepara para ampliar o corregir su conocimiento conforme cambien tus servicios.'),
        ),
    ),
    'publicidad-digital-para-negocios' => array(
        'eyebrow' => 'Meta Ads y Google Ads',
        'title' => 'Campañas digitales enfocadas en oportunidades reales de negocio',
        'lead' => 'Planificamos, configuramos y optimizamos campañas con medición clara para transformar inversión publicitaria en consultas y ventas.',
        'image' => 'publicidad-digital-dacriz.webp',
        'image_alt' => 'Análisis y optimización de campañas de publicidad digital',
        'service' => 'Publicidad digital',
        'form_option' => 'SEO o publicidad',
        'whatsapp' => 'Hola, vi la landing de publicidad digital y quiero evaluar una campaña para mi negocio.',
        'problem_title' => 'Publicar anuncios sin medición convierte el presupuesto en una apuesta',
        'problem_text' => 'Antes de escalar revisamos oferta, página de destino y seguimiento para que cada campaña produzca datos útiles y pueda mejorar.',
        'benefits' => array(
            array('Estrategia y segmentación', 'Definimos objetivo, públicos, mensajes y canales según el servicio que necesitas vender.'),
            array('Medición de conversiones', 'Configuramos eventos para saber qué anuncios generan formularios, contactos y ventas.'),
            array('Optimización continua', 'Revisamos resultados y ajustamos presupuesto, audiencias y creatividades con base en datos.'),
        ),
        'deliverables' => array('Diagnóstico publicitario', 'Estructura de campañas', 'Segmentación y anuncios', 'Pixel y eventos de conversión', 'UTM y analítica', 'Reporte y optimización'),
        'faq' => array(
            array('¿El presupuesto de anuncios está incluido?', 'No. La inversión publicitaria se paga directamente a Meta o Google y se define según objetivo, zona y competencia.'),
            array('¿Garantizan una cantidad de ventas?', 'No prometemos cifras irreales. Mejoramos la estructura, medición y optimización para aumentar las probabilidades de obtener resultados sostenibles.'),
            array('¿Necesito una landing page?', 'Es recomendable. Una página enfocada en una sola oferta suele convertir mejor que enviar el tráfico a una portada general.'),
        ),
    ),
    'seo-para-empresas' => array(
        'eyebrow' => 'SEO y visibilidad orgánica',
        'title' => 'Haz que tus clientes encuentren tu negocio cuando ya están buscando una solución',
        'lead' => 'Mejoramos la base técnica, la estructura y el contenido de tu sitio para aumentar su visibilidad en Google de forma sostenible.',
        'image' => 'seo-analitica-dacriz.webp',
        'image_alt' => 'Análisis de posicionamiento SEO y conversiones',
        'service' => 'SEO',
        'form_option' => 'SEO o publicidad',
        'whatsapp' => 'Hola, vi la landing de SEO y quiero evaluar el posicionamiento de mi sitio.',
        'problem_title' => 'Tener una web no garantiza aparecer frente a las búsquedas correctas',
        'problem_text' => 'El SEO conecta la intención de búsqueda con páginas útiles, técnicamente sólidas y capaces de convertir tráfico en oportunidades.',
        'benefits' => array(
            array('Auditoría técnica', 'Revisamos indexación, rendimiento, arquitectura, etiquetas y problemas que limitan la visibilidad.'),
            array('Estrategia de contenidos', 'Organizamos páginas y temas según lo que tus clientes realmente buscan.'),
            array('Medición y mejora', 'Seguimos consultas, posiciones y conversiones para priorizar acciones con impacto.'),
        ),
        'deliverables' => array('Auditoría SEO inicial', 'Investigación de palabras clave', 'Optimización técnica y on-page', 'Arquitectura de contenidos', 'Configuración de Search Console', 'Informe de avances y prioridades'),
        'faq' => array(
            array('¿Cuándo se ven resultados?', 'El SEO es progresivo. Las mejoras técnicas pueden notarse antes, pero el crecimiento sostenido normalmente requiere varios meses.'),
            array('¿Pueden garantizar la primera posición?', 'Nadie puede garantizar una posición específica. Sí podemos aplicar buenas prácticas, medir avances y trabajar sobre oportunidades reales.'),
            array('¿También crean contenidos?', 'Sí. Podemos definir el plan, optimizar páginas existentes y desarrollar contenidos alineados con la estrategia.'),
        ),
    ),
);

$landing = $landings[$slug] ?? $landings['desarrollo-web-para-negocios'];
$is_web_landing = 'desarrollo-web-para-negocios' === $slug;
$whatsapp_number = preg_replace('/\D+/', '', get_theme_mod('dacriz_whatsapp_number', ''));
$whatsapp_url = $whatsapp_number ? 'https://wa.me/' . $whatsapp_number . '?text=' . rawurlencode($landing['whatsapp']) : home_url('/contacto/');
$media = get_stylesheet_directory_uri() . '/assets/img/dacriz-media/';

get_header();
?>
<main id="primary" class="site-main dacriz-campaign-landing" data-landing-service="<?php echo esc_attr($landing['service']); ?>" data-form-option="<?php echo esc_attr($landing['form_option']); ?>">
 <section class="dacriz-landing-hero">
  <div class="container dacriz-landing-hero__grid">
   <div class="dacriz-landing-hero__copy">
    <span class="dacriz-landing-kicker"><?php echo esc_html($landing['eyebrow']); ?></span>
    <h1><?php echo esc_html($landing['title']); ?></h1>
    <p><?php echo esc_html($landing['lead']); ?></p>
    <div class="dacriz-landing-actions">
     <a class="dacriz-landing-button dacriz-track-lead" href="#cotizar">Solicitar evaluación gratuita <span>→</span></a>
     <a class="dacriz-landing-whatsapp dacriz-track-whatsapp" href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener">Hablar por WhatsApp</a>
    </div>
    <ul class="dacriz-landing-assurances"><li>Más de 10 años de experiencia</li><li>Atención directa</li><li>Propuesta sin compromiso</li></ul>
   </div>
   <figure class="dacriz-landing-hero__media"><img src="<?php echo esc_url($media . $landing['image']); ?>" alt="<?php echo esc_attr($landing['image_alt']); ?>" width="1600" height="1067" fetchpriority="high"><figcaption><b>65+</b><span>proyectos<br>completados</span></figcaption></figure>
  </div>
 </section>

 <section class="dacriz-landing-proof"><div class="container"><p>Experiencia práctica en</p><?php if ($is_web_landing) : ?>
  <ul class="dacriz-platforms"><?php foreach (array('wordpress'=>'WordPress','woocommerce'=>'WooCommerce','shopify'=>'Shopify','elementor'=>'Elementor','prestashop'=>'PrestaShop','php'=>'PHP') as $icon => $name) : ?>
   <li><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/platforms/' . $icon . '.svg'); ?>" alt="" width="30" height="30" loading="lazy"><span><?php echo esc_html($name); ?></span></li>
  <?php endforeach; ?></ul>
 <?php else : ?><ul><li>WordPress</li><li>WooCommerce</li><li>Shopify</li><li>Automatización</li><li>Analítica</li><li>OpenAI</li></ul><?php endif; ?></div></section>

 <section class="dacriz-landing-problem"><div class="container dacriz-landing-two-cols">
  <div><span class="dacriz-landing-kicker">El reto</span><h2><?php echo esc_html($landing['problem_title']); ?></h2></div>
  <div class="dacriz-landing-problem__content"><p><?php echo esc_html($landing['problem_text']); ?></p><a href="#cotizar">Revisemos tu caso <span>↘</span></a><?php if ($is_web_landing) : ?><figure><img src="<?php echo esc_url($media . 'desarrollo-web-dacriz.webp'); ?>" alt="Planificación de una experiencia web profesional" width="1600" height="1067" loading="lazy"><figcaption><strong>Estrategia + diseño + tecnología</strong><span>Una solución alineada con tus objetivos comerciales.</span></figcaption></figure><?php endif; ?></div>
 </div></section>

 <section class="dacriz-landing-benefits"><div class="container">
  <div class="dacriz-landing-heading"><span class="dacriz-landing-kicker">Cómo te ayudamos</span><h2>Una solución clara, implementada de principio a fin</h2></div>
  <div class="dacriz-landing-benefits__grid"><?php foreach ($landing['benefits'] as $index => $benefit) : ?>
   <article><?php if ($is_web_landing) : $benefit_images = array(
       array('diseno-conversion.webp', 'Diseño web profesional orientado a conversiones'),
       array('ecommerce-profesional.webp', 'Tienda online profesional adaptable a diferentes dispositivos'),
       array('experiencia-movil.webp', 'Experiencia web rápida y optimizada para celulares'),
   ); ?><div class="dacriz-benefit-image"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/landing-web/' . $benefit_images[$index][0]); ?>" alt="<?php echo esc_attr($benefit_images[$index][1]); ?>" width="1200" height="750" loading="lazy"></div><?php endif; ?><span>0<?php echo esc_html($index + 1); ?></span><h3><?php echo esc_html($benefit[0]); ?></h3><p><?php echo esc_html($benefit[1]); ?></p></article>
  <?php endforeach; ?></div>
 </div></section>

 <section class="dacriz-landing-deliverables"><div class="container dacriz-landing-deliverables__grid">
  <div><span class="dacriz-landing-kicker">Qué incluye</span><h2>Todo lo necesario para poner la solución en marcha</h2><p>El alcance final se adapta a tu situación, objetivos y herramientas actuales.</p><?php if ($is_web_landing) : ?><figure class="dacriz-deliverables-visual"><img src="<?php echo esc_url($media . 'ecommerce-responsive-dacriz.webp'); ?>" alt="Sitio web adaptable a escritorio, tablet y celular" width="1600" height="1067" loading="lazy"></figure><?php endif; ?></div>
  <ul><?php foreach ($landing['deliverables'] as $index => $item) : ?><li><span><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span><?php echo esc_html($item); ?></li><?php endforeach; ?></ul>
 </div></section>

 <section class="dacriz-landing-process"><div class="container">
  <div class="dacriz-landing-heading"><span class="dacriz-landing-kicker">Proceso</span><h2>De la evaluación al lanzamiento</h2></div>
  <ol><li><b>01</b><strong>Diagnóstico</strong><span>Conocemos el negocio, objetivo y situación actual.</span></li><li><b>02</b><strong>Propuesta</strong><span>Definimos alcance, tiempos y entregables.</span></li><li><b>03</b><strong>Implementación</strong><span>Desarrollamos y comunicamos los avances.</span></li><li><b>04</b><strong>Pruebas y entrega</strong><span>Validamos, publicamos y explicamos la gestión.</span></li></ol>
 </div></section>

 <section class="dacriz-landing-experience"><div class="container dacriz-landing-two-cols">
  <div><span class="dacriz-landing-kicker">Experiencia comprobable</span><h2>Más de una década resolviendo proyectos digitales</h2></div>
  <div><p>Experiencia en WordPress, WooCommerce, Shopify, Elementor, PrestaShop, integraciones, servidores, automatización y marketing digital.</p><a href="<?php echo esc_url(home_url('/portafolio/')); ?>">Ver proyectos realizados <span>→</span></a></div>
 </div></section>

 <section class="dacriz-landing-faq"><div class="container dacriz-landing-faq__grid">
  <div><span class="dacriz-landing-kicker">Preguntas frecuentes</span><h2>Resolvamos las dudas iniciales</h2></div>
  <div class="premium-accordion"><?php foreach ($landing['faq'] as $index => $faq) : ?><details<?php echo 0 === $index ? ' open' : ''; ?>><summary><?php echo esc_html($faq[0]); ?><span></span></summary><p><?php echo esc_html($faq[1]); ?></p></details><?php endforeach; ?></div>
 </div></section>

 <section class="dacriz-landing-form" id="cotizar"><div class="container dacriz-landing-form__grid">
  <div><span class="dacriz-landing-kicker">Siguiente paso</span><h2>Cuéntanos brevemente qué necesitas</h2><p>Te responderemos con preguntas concretas y una recomendación inicial. La primera evaluación no tiene costo.</p><a class="dacriz-landing-whatsapp dacriz-track-whatsapp" href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener">Prefiero conversar por WhatsApp →</a></div>
  <div class="dacriz-landing-form__card"><?php
   $forms = get_posts(array('post_type'=>'wpcf7_contact_form','posts_per_page'=>1,'post_status'=>'publish'));
   if ($forms) { echo do_shortcode('[contact-form-7 id="' . absint($forms[0]->ID) . '" title="' . esc_attr($forms[0]->post_title) . '"]'); }
   else { echo '<p>Escríbenos por WhatsApp para recibir una evaluación.</p>'; }
  ?><small>Usaremos tus datos únicamente para responder esta solicitud.</small></div>
 </div></section>
</main>
<script>
document.addEventListener('DOMContentLoaded', function () {
 var root = document.querySelector('.dacriz-campaign-landing');
 if (!root) return;
 var service = root.getAttribute('data-landing-service') || '';
 var formOption = root.getAttribute('data-form-option') || service;
 var select = root.querySelector('select[name="service"]');
 if (select) {
  var option = Array.from(select.options).find(function (item) { return item.text.toLowerCase() === formOption.toLowerCase(); });
  if (option) select.value = option.value;
 }
 var params = new URLSearchParams(window.location.search);
 ['utm_source','utm_medium','utm_campaign','utm_content','utm_term','fbclid'].forEach(function (key) {
  var value = params.get(key) || sessionStorage.getItem('dacriz_' + key) || '';
  if (params.get(key)) sessionStorage.setItem('dacriz_' + key, value);
  if (value) root.querySelectorAll('form').forEach(function (form) { var input=document.createElement('input');input.type='hidden';input.name=key;input.value=value;form.appendChild(input); });
 });
 root.querySelectorAll('.dacriz-track-whatsapp').forEach(function (link) { link.addEventListener('click', function () { if (typeof gtag==='function') gtag('event','generate_lead',{method:'whatsapp',service:service}); if(typeof fbq==='function') fbq('track','Contact',{content_name:service}); }); });
 document.addEventListener('wpcf7mailsent', function () { if (typeof gtag==='function') gtag('event','generate_lead',{method:'form',service:service}); if(typeof fbq==='function') fbq('track','Lead',{content_name:service}); });
});
</script>
<?php get_footer();
