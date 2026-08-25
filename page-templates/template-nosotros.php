<?php
/**
 * Template Name: Página Nosotros
 * 
 * @package DACRIZ
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <!-- HERO -->
    <section class="dacriz-hero" style="padding: 80px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 0;">
                <h1 style="color: #fff;">Sobre DACRIZ</h1>
                <p style="color: rgba(255,255,255,0.9); max-width: 700px; margin: 0 auto; font-size: 1.2rem;">Tu aliado estratégico en soluciones digitales para hacer crecer tu negocio en Perú</p>
            </div>
        </div>
    </section>

    <!-- HISTORIA -->
    <section class="dacriz-section">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col" style="flex: 0 0 50%;">
                    <h2>Nuestra Historia</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                        <strong>MULTISERVICIOS Y SOLUCIONES DIGITALES DACRIS E.I.R.L.</strong> nació con una misión clara: ayudar a las empresas peruanas a aprovechar el poder del internet para crecer y competir en el mercado digital.
                    </p>
                    <p style="line-height: 1.8; margin-bottom: 20px;">
                        Entendemos los desafíos que enfrentan los emprendedores y pequeñas empresas en Perú. Por eso, ofrecemos soluciones digitales de alta calidad a precios accesibles, con un enfoque personalizado que las grandes agencias no pueden ofrecer.
                    </p>
                    <p style="line-height: 1.8;">
                        Creemos que toda empresa, sin importar su tamaño, merece tener una presencia digital profesional que le permita competir y crecer. Ese es nuestro compromiso contigo.
                    </p>
                </div>
                <div class="col" style="flex: 0 0 50%;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team.jpg" alt="Equipo DACRIZ" style="max-width: 100%; border-radius: 16px; box-shadow: var(--dacriz-shadow-xl);">
                </div>
            </div>
        </div>
    </section>

    <!-- MISIÓN, VISIÓN, VALORES -->
    <section class="dacriz-section dacriz-section-light">
        <div class="container">
            <div class="row">
                <div class="col" style="flex: 0 0 33.333%;">
                    <div class="service-card" style="height: 100%; text-align: center;">
                        <div class="icon" style="background: linear-gradient(135deg, var(--dacriz-primary) 0%, var(--dacriz-primary-light) 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                        <h3>Nuestra Misión</h3>
                        <p>Democratizar el acceso a soluciones digitales de calidad para empresas de todos los tamaños en Perú, ayudándolas a crecer y prosperar en la era digital.</p>
                    </div>
                </div>
                
                <div class="col" style="flex: 0 0 33.333%;">
                    <div class="service-card" style="height: 100%; text-align: center;">
                        <div class="icon" style="background: linear-gradient(135deg, var(--dacriz-accent) 0%, #34D399 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <h3>Nuestra Visión</h3>
                        <p>Ser la agencia digital de referencia para PYMEs en Perú, reconocida por generar resultados reales y relaciones duraderas con nuestros clientes.</p>
                    </div>
                </div>
                
                <div class="col" style="flex: 0 0 33.333%;">
                    <div class="service-card" style="height: 100%; text-align: center;">
                        <div class="icon" style="background: linear-gradient(135deg, var(--dacriz-cta) 0%, #FBBF24 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <h3>Nuestros Valores</h3>
                        <p>Compromiso, transparencia, innovación, calidad y enfoque en resultados. Tu éxito es nuestro éxito.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VALORES DETALLADOS -->
    <section class="dacriz-section">
        <div class="container">
            <div class="section-title">
                <h2>Lo que Nos Define</h2>
                <p>Principios que guían cada proyecto que realizamos</p>
            </div>
            
            <div class="row">
                <div class="col" style="flex: 0 0 50%;">
                    <div class="feature-item" style="margin-bottom: 30px;">
                        <div class="check" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4>Compromiso Total</h4>
                            <p>Tu éxito es nuestro éxito. Nos involucramos en cada proyecto como si fuera nuestro propio negocio.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item" style="margin-bottom: 30px;">
                        <div class="check" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4>Transparencia Absoluta</h4>
                            <p>Comunicación clara y honesta siempre. Sin letra pequeña, sin sorpresas. Sabes exactamente qué estás pagando.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="check" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                        </div>
                        <div>
                            <h4>Innovación Constante</h4>
                            <p>Nos mantenemos actualizados con las últimas tendencias y tecnologías para ofrecerte siempre lo mejor.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col" style="flex: 0 0 50%;">
                    <div class="feature-item" style="margin-bottom: 30px;">
                        <div class="check" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4>Calidad sin Excusas</h4>
                            <p>No entregamos nada que no nos enorgullezca. Cada proyecto pasa por rigurosos controles de calidad.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item" style="margin-bottom: 30px;">
                        <div class="check" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="20" x2="12" y2="10"></line>
                                <line x1="18" y1="20" x2="18" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="16"></line>
                            </svg>
                        </div>
                        <div>
                            <h4>Enfoque en Resultados</h4>
                            <p>No nos conformamos con entregar un proyecto bonito. Nos enfocamos en métricas que realmente importan para tu negocio.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="check" style="width: 50px; height: 50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div>
                            <h4>Relaciones Duraderas</h4>
                            <p>No buscamos clientes de un solo proyecto. Queremos ser tu socio digital a largo plazo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POR QUÉ ELEGIRNOS -->
    <section class="dacriz-section dacriz-section-dark">
        <div class="container">
            <div class="section-title">
                <h2>¿Por qué Trabajar con DACRIZ?</h2>
                <p style="color: rgba(255,255,255,0.8);">Ventajas que nos diferencian de otras agencias</p>
            </div>
            
            <div class="row">
                <div class="col" style="flex: 0 0 25%;">
                    <div style="text-align: center; padding: 30px 20px;">
                        <div style="font-size: 3rem; font-weight: 700; color: var(--dacriz-primary-light); margin-bottom: 10px;">100%</div>
                        <h4 style="color: #fff; margin-bottom: 10px;">Enfocados en PYMEs</h4>
                        <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem;">Entendemos tus necesidades y presupuesto</p>
                    </div>
                </div>
                
                <div class="col" style="flex: 0 0 25%;">
                    <div style="text-align: center; padding: 30px 20px;">
                        <div style="font-size: 3rem; font-weight: 700; color: var(--dacriz-accent); margin-bottom: 10px;">24h</div>
                        <h4 style="color: #fff; margin-bottom: 10px;">Respuesta Rápida</h4>
                        <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem;">Respondemos todas las consultas en menos de 24 horas</p>
                    </div>
                </div>
                
                <div class="col" style="flex: 0 0 25%;">
                    <div style="text-align: center; padding: 30px 20px;">
                        <div style="font-size: 3rem; font-weight: 700; color: var(--dacriz-cta); margin-bottom: 10px;">1:1</div>
                        <h4 style="color: #fff; margin-bottom: 10px;">Atención Personalizada</h4>
                        <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem;">Un equipo dedicado exclusivamente a tu proyecto</p>
                    </div>
                </div>
                
                <div class="col" style="flex: 0 0 25%;">
                    <div style="text-align: center; padding: 30px 20px;">
                        <div style="font-size: 3rem; font-weight: 700; color: #A78BFA; margin-bottom: 10px;">∞</div>
                        <h4 style="color: #fff; margin-bottom: 10px;">Soporte Continuo</h4>
                        <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem;">Te acompañamos después del lanzamiento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="dacriz-cta">
        <div class="container">
            <h2>¿Listo para Trabajar Juntos?</h2>
            <p>Cuéntanos sobre tu proyecto y descubre cómo podemos ayudarte a crecer</p>
            <div class="btn-group">
                <a href="/contacto/" class="btn-primary btn-white">Contactar Ahora</a>
                <?php 
                $whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
                if (!empty($whatsapp)) : 
                ?>
                <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" class="btn-primary" target="_blank">WhatsApp Directo</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
