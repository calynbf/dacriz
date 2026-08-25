<?php
/**
 * Template Name: Página de Contacto
 * 
 * @package DACRIZ
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
?>

<main id="primary" class="site-main">

    <!-- HERO -->
    <section class="dacriz-hero" style="padding: 60px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 0;">
                <h1 style="color: #fff;">Hablemos de tu Proyecto</h1>
                <p style="color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">Estamos listos para ayudarte a llevar tu negocio al siguiente nivel. Cuéntanos sobre tu proyecto y te responderemos en menos de 24 horas.</p>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section class="dacriz-section">
        <div class="container">
            <div class="row">
                <!-- Información de Contacto -->
                <div class="col" style="flex: 0 0 40%;">
                    <h2 style="margin-bottom: 30px;">Información de Contacto</h2>
                    
                    <!-- WhatsApp -->
                    <?php if (!empty($whatsapp)) : ?>
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px; padding: 25px; background: var(--dacriz-bg-light); border-radius: 12px;">
                        <div style="width: 50px; height: 50px; background: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512" fill="#fff">
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 5px;">WhatsApp</h4>
                            <p style="margin: 0; color: var(--dacriz-text-secondary);">Respuesta inmediata</p>
                            <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" style="color: var(--dacriz-primary); font-weight: 600; text-decoration: none;">+<?php echo esc_html($whatsapp); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Email -->
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px; padding: 25px; background: var(--dacriz-bg-light); border-radius: 12px;">
                        <div style="width: 50px; height: 50px; background: var(--dacriz-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 5px;">Email</h4>
                            <p style="margin: 0; color: var(--dacriz-text-secondary);">Respuesta en 24 horas</p>
                            <a href="mailto:dacrisdev@gmail.com" style="color: var(--dacriz-primary); font-weight: 600; text-decoration: none;">dacrisdev@gmail.com</a>
                        </div>
                    </div>
                    
                    <!-- Horario -->
                    <div style="display: flex; align-items: flex-start; gap: 20px; padding: 25px; background: var(--dacriz-bg-light); border-radius: 12px;">
                        <div style="width: 50px; height: 50px; background: var(--dacriz-cta); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 5px;">Horario de Atención</h4>
                            <p style="margin: 0; color: var(--dacriz-text-secondary);">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                            <p style="margin: 0; color: var(--dacriz-text-secondary);">Sábados: 9:00 AM - 1:00 PM</p>
                        </div>
                    </div>
                    
                    <!-- Redes Sociales -->
                    <div style="margin-top: 40px;">
                        <h4 style="margin-bottom: 20px;">Síguenos en Redes</h4>
                        <div class="footer-social">
                            <?php 
                            $facebook = get_theme_mod('dacriz_facebook', '');
                            $instagram = get_theme_mod('dacriz_instagram', '');
                            $linkedin = get_theme_mod('dacriz_linkedin', '');
                            $tiktok = get_theme_mod('dacriz_tiktok', '');
                            ?>
                            
                            <?php if (!empty($facebook)) : ?>
                            <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener" style="background: var(--dacriz-primary);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($instagram)) : ?>
                            <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($linkedin)) : ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener" style="background: #0077B5;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($tiktok)) : ?>
                            <a href="<?php echo esc_url($tiktok); ?>" target="_blank" rel="noopener" style="background: #000;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#fff">
                                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                                </svg>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Formulario -->
                <div class="col" style="flex: 0 0 55%; margin-left: 5%;">
                    <div class="contact-form">
                        <h3 style="margin-bottom: 30px;">Envíanos un Mensaje</h3>
                        
                        <?php 
                        $contact_forms = get_posts(array(
                            'post_type'      => 'wpcf7_contact_form',
                            'posts_per_page' => 1,
                            'post_status'    => 'publish',
                        ));

                        if (!empty($contact_forms)) {
                            echo do_shortcode('[contact-form-7 id="' . absint($contact_forms[0]->ID) . '" title="' . esc_attr($contact_forms[0]->post_title) . '"]');
                        } else {
                            echo '<p>El formulario se está configurando. Mientras tanto, escríbenos por WhatsApp o correo electrónico.</p>';
                        }
                        ?>
                        
                        <p style="text-align: center; margin-top: 20px; color: var(--dacriz-text-secondary); font-size: 0.9rem;">
                            O si prefieres, escríbenos directamente por 
                            <?php if (!empty($whatsapp)) : ?>
                            <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, me interesa información sobre sus servicios'); ?>" target="_blank" style="color: #25D366; font-weight: 600;">WhatsApp</a>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ RÁPIDO -->
    <section class="dacriz-section dacriz-section-light">
        <div class="container">
            <div class="section-title">
                <h2>Preguntas Frecuentes</h2>
                <p>Respuestas rápidas a las dudas más comunes</p>
            </div>
            
            <div class="row" style="justify-content: center;">
                <div class="col" style="flex: 0 0 80%;">
                    <div class="dacriz-accordion">
                        <div class="accordion-item">
                            <div class="accordion-header" style="padding: 20px; background: #fff; cursor: pointer; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                <h4 style="margin: 0; display: flex; justify-content: space-between; align-items: center;">
                                    ¿Cuánto tiempo tardan en responder?
                                    <span>+</span>
                                </h4>
                            </div>
                            <div class="accordion-content" style="padding: 0 20px 20px; background: #fff; border-radius: 0 0 8px 8px; margin-top: -10px; margin-bottom: 10px; display: none;">
                                <p>Respondemos todas las consultas en menos de 24 horas hábiles. Si nos escribes por WhatsApp, la respuesta suele ser mucho más rápida.</p>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header" style="padding: 20px; background: #fff; cursor: pointer; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                <h4 style="margin: 0; display: flex; justify-content: space-between; align-items: center;">
                                    ¿Trabajan con empresas de todo Perú?
                                    <span>+</span>
                                </h4>
                            </div>
                            <div class="accordion-content" style="padding: 0 20px 20px; background: #fff; border-radius: 0 0 8px 8px; margin-top: -10px; margin-bottom: 10px; display: none;">
                                <p>Sí, trabajamos con clientes de todo el Perú. Gracias a las herramientas digitales, podemos coordinar proyectos de forma remota sin problemas.</p>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header" style="padding: 20px; background: #fff; cursor: pointer; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                <h4 style="margin: 0; display: flex; justify-content: space-between; align-items: center;">
                                    ¿Ofrecen consultas gratuitas?
                                    <span>+</span>
                                </h4>
                            </div>
                            <div class="accordion-content" style="padding: 0 20px 20px; background: #fff; border-radius: 0 0 8px 8px; margin-top: -10px; margin-bottom: 10px; display: none;">
                                <p>Sí, la primera consulta es completamente gratuita y sin compromiso. Analizamos tu caso y te damos recomendaciones honestas sobre cómo podemos ayudarte.</p>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header" style="padding: 20px; background: #fff; cursor: pointer; border-radius: 8px; margin-bottom: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                <h4 style="margin: 0; display: flex; justify-content: space-between; align-items: center;">
                                    ¿Qué formas de pago aceptan?
                                    <span>+</span>
                                </h4>
                            </div>
                            <div class="accordion-content" style="padding: 0 20px 20px; background: #fff; border-radius: 0 0 8px 8px; margin-top: -10px; margin-bottom: 10px; display: none;">
                                <p>Aceptamos transferencias bancarias, Yape, Plin y tarjetas de crédito/débito. También ofrecemos facilidades de pago en cuotas para proyectos grandes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
