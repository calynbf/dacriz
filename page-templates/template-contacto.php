<?php
/**
 * Template Name: Página de Contacto
 * @package DACRIZ
 */
if (!defined('ABSPATH')) { exit; }
get_header();
$whatsapp = preg_replace('/\D+/', '', get_theme_mod('dacriz_whatsapp_number', ''));
$email = 'dacrisdev@gmail.com';
?>
<main id="primary" class="site-main cb-contact-page">
 <section class="dacriz-hero cb-contact-hero"><div class="container"><div class="section-title">
  <span class="cb-contact-eyebrow">Contacto</span><h1>Hablemos de tu proyecto</h1>
  <p>Cuéntanos qué necesitas. Analizaremos tu idea y te responderemos con una propuesta clara, sin compromiso.</p>
 </div></div></section>

 <section class="cb-contact-main"><div class="container">
  <div class="cb-contact-channels" aria-label="Canales de contacto">
   <?php if ($whatsapp) : ?>
   <a class="cb-contact-channel" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Hola, quiero información sobre sus servicios'); ?>" target="_blank" rel="noopener">
    <span class="cb-contact-channel__icon cb-contact-channel__icon--whatsapp" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M20.5 3.5A11.8 11.8 0 0 0 1.9 17.7L.3 23.5l5.9-1.6A11.8 11.8 0 0 0 20.5 3.5Zm-8.4 17.1c-1.8 0-3.5-.5-5-1.4l-.4-.2-3.5.9.9-3.4-.2-.4A9.7 9.7 0 1 1 12.1 20.6Zm5.3-7.3c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1l-.9 1.1c-.2.2-.4.2-.7.1a7.9 7.9 0 0 1-2.3-1.4 8.5 8.5 0 0 1-1.6-2c-.2-.3 0-.5.1-.6l.5-.6.3-.5c.1-.2 0-.4 0-.5l-.9-2.1c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.1-.3-.2-.6-.3Z"/></svg></span>
    <span><small>Respuesta rápida</small><strong>Conversemos por WhatsApp</strong></span><b aria-hidden="true">↗</b>
   </a><?php endif; ?>
   <a class="cb-contact-channel" href="mailto:<?php echo esc_attr($email); ?>">
    <span class="cb-contact-channel__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 5h18v14H3V5Zm2 2v.5l7 4.9 7-4.9V7H5Zm14 10V9.9l-7 4.9-7-4.9V17h14Z"/></svg></span>
    <span><small>Respuesta en 24 horas</small><strong><?php echo esc_html($email); ?></strong></span><b aria-hidden="true">↗</b>
   </a>
   <div class="cb-contact-channel">
    <span class="cb-contact-channel__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16Zm1-13h-2v6l5.2 3 .8-1.7-4-2.3V7Z"/></svg></span>
    <span><small>Horario de atención</small><strong>Lun–Vie, 9:00 a 18:00</strong></span>
   </div>
  </div>

  <div class="cb-contact-layout">
   <div class="cb-contact-copy"><span class="cb-kicker">Empecemos</span>
    <h2>Convierte tu idea en una solución que genere resultados.</h2>
    <p>Desarrollo sitios web, tiendas online, automatizaciones y soluciones con inteligencia artificial adaptadas a cada negocio.</p>
    <ul class="cb-contact-benefits">
     <li><span>01</span><div><strong>Primera consulta gratuita</strong><small>Revisamos tu necesidad y te orientamos.</small></div></li>
     <li><span>02</span><div><strong>Propuesta transparente</strong><small>Alcance, tiempos y costos definidos.</small></div></li>
     <li><span>03</span><div><strong>Acompañamiento real</strong><small>Comunicación directa durante todo el proyecto.</small></div></li>
    </ul>
   </div>
   <div class="cb-contact-form-card">
    <div class="cb-contact-form-card__heading"><span>Cuéntanos sobre tu proyecto</span><h2>Solicita una cotización</h2><p>Completa el formulario y nos pondremos en contacto contigo.</p></div>
    <div class="contact-form"><?php
     $contact_forms = get_posts(array('post_type'=>'wpcf7_contact_form','posts_per_page'=>1,'post_status'=>'publish'));
     if ($contact_forms) {
      echo do_shortcode('[contact-form-7 id="' . absint($contact_forms[0]->ID) . '" title="' . esc_attr($contact_forms[0]->post_title) . '"]');
     } else {
      echo '<p>El formulario se está configurando. Mientras tanto, escríbenos por WhatsApp o correo electrónico.</p>';
     }
    ?></div>
    <p class="cb-contact-privacy">Tus datos se utilizan únicamente para responder tu consulta.</p>
   </div>
  </div>
 </div></section>

 <section class="cb-contact-faq"><div class="container cb-contact-faq__layout">
  <div><span class="cb-kicker">Preguntas frecuentes</span><h2>Antes de comenzar</h2><p>Información útil para que avancemos con claridad desde el primer contacto.</p></div>
  <div class="premium-accordion">
   <details open><summary>¿Cuánto tardan en responder?<span></span></summary><p>Respondemos en menos de 24 horas hábiles. Por WhatsApp, normalmente mucho antes.</p></details>
   <details><summary>¿Trabajan con clientes fuera de Perú?<span></span></summary><p>Sí. Podemos coordinar y desarrollar proyectos de manera remota para clientes de cualquier país.</p></details>
   <details><summary>¿La primera consulta tiene costo?<span></span></summary><p>No. La primera conversación es gratuita y nos permite entender tu proyecto y recomendarte la solución adecuada.</p></details>
   <details><summary>¿Qué necesito para solicitar una cotización?<span></span></summary><p>Una descripción breve de tu negocio, el objetivo del proyecto y, si ya los tienes, ejemplos o referencias visuales.</p></details>
  </div>
 </div></section>
</main>
<?php get_footer();
