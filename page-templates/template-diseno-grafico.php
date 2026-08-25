<?php
/**
 * Template Name: Servicio - Diseño Gráfico
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

    <section class="service-hero" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Diseño Gráfico</span>
                <h1 id="diseno-grafico-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Diseño gráfico profesional para tu marca</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Creamos identidad visual, logos, material publicitario y contenido para redes sociales que fortalecen tu marca.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=diseno-grafico" class="btn-primary" style="background: #fff; color: #fa709a;">Solicitar cotización gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver servicios</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Diseños originales</span>
                    <span>✓ Revisiones incluidas</span>
                    <span>✓ Archivos editables</span>
                </div>
            </div>
        </div>
    </section>

    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué invertir en diseño gráfico?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Tu imagen es tu carta de presentación</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col"><div class="benefit-card"><div class="benefit-number">1º</div><h4>Primera impresión</h4><p>El diseño es lo primero que ven tus clientes.</p></div></div>
                <div class="col"><div class="benefit-card"><div class="benefit-number">+80%</div><h4>Más credibilidad</h4><p>Un diseño profesional genera confianza instantánea.</p></div></div>
                <div class="col"><div class="benefit-card"><div class="benefit-number">✓</div><h4>Diferenciación</h4><p>Destaca frente a tu competencia con identidad única.</p></div></div>
            </div>
        </div>
    </section>

    <section class="dacriz-section dacriz-section-light" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Servicios de diseño gráfico</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Soluciones visuales completas para tu marca</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></div>
                    <h3>Logos e Identidad</h3>
                    <p>Diseño de logotipos, manual de marca, paleta de colores y tipografías.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path></svg></div>
                    <h3>Diseño para Redes</h3>
                    <p>Posts, stories, banners y plantillas para Instagram, Facebook y LinkedIn.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg></div>
                    <h3>Material Publicitario</h3>
                    <p>Flyers, brochures, catálogos, afiches y material promocional.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg></div>
                    <h3>Papelería Corporativa</h3>
                    <p>Tarjetas, hojas membretadas, sobres y documentos oficiales.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg></div>
                    <h3>Packaging y Etiquetas</h3>
                    <p>Diseño de empaques y etiquetas que destacan tu producto.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg></div>
                    <h3>Infografías</h3>
                    <p>Visualización de datos y contenido educativo atractivo.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Cómo trabajamos</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Proceso claro y colaborativo</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step"><div class="step-num">1</div><h4>Brief y Requerimientos</h4><p>Entendemos tu marca, objetivos y audiencia objetivo.</p></div>
                <div class="process-simple-step"><div class="step-num">2</div><h4>Propuestas Creativas</h4><p>Desarrollamos 2-3 conceptos visuales para tu elección.</p></div>
                <div class="process-simple-step"><div class="step-num">3</div><h4>Diseño Final</h4><p>Refinamos el concepto elegido con atención al detalle.</p></div>
                <div class="process-simple-step"><div class="step-num">4</div><h4>Revisiones</h4><p>Hasta 3 rondas de ajustes incluidas sin costo adicional.</p></div>
                <div class="process-simple-step"><div class="step-num">5</div><h4>Entrega</h4><p>Archivos finales en todos los formatos necesarios.</p></div>
            </div>
        </div>
    </section>

    <section class="dacriz-section dacriz-section-light" id="faq" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Preguntas frecuentes</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resolvemos tus dudas</p>
            </div>
            <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto cuesta un logo?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Desde $200 USD para logos básicos hasta $800+ USD para identidad completa con manual de marca. Solicita cotización personalizada.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué formatos entregan?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Vectoriales (AI, EPS, PDF, SVG) para impresión y escalado, y rasterizados (PNG, JPG) para web y redes sociales.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Incluye revisiones?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, hasta 3 rondas de ajustes incluidas. Revisiones adicionales tienen costo extra.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto demora?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Logo 5-7 días, material publicitario 3-5 días, branding completo 2-3 semanas.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Puedo usar el diseño en cualquier medio?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, todos los derechos de uso comercial se transfieren al cliente una vez completado el pago.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Hacen rediseño de logos existentes?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, modernizamos logos manteniendo elementos reconocibles de tu marca actual.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para fortalecer tu imagen de marca?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita una cotización gratuita y recibe propuesta personalizada con tiempos y costos.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Cotización gratuita</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> 3 revisiones incluidas</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Archivos editables</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=diseno-grafico" class="btn-primary btn-white">Solicitar cotización gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, necesito servicios de diseño gráfico'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
