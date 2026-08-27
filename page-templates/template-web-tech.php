<?php
/**
 * Template Name: Servicio - Web & Tech
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

    <!-- HERO MODERNO -->
    <section class="service-hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Desarrollo Web & E-commerce</span>
                <h1 id="web-tech-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Crea tu presencia digital profesional y vende online</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Desarrollamos sitios web, tiendas online y plataformas a medida que convierten visitantes en clientes.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=web-tech" class="btn-primary" style="background: #fff; color: #667eea;">Solicitar cotización gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver qué incluye</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Diseño responsive</span>
                    <span>✓ Optimizado para SEO</span>
                    <span>✓ Soporte incluido</span>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué necesitas un sitio web profesional?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Tu presencia digital es tu mejor vendedor 24/7</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">24/7</div>
                        <h4>Abierto siempre</h4>
                        <p>Tu negocio visible y vendiendo las 24 horas del día.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">+200%</div>
                        <h4>Más credibilidad</h4>
                        <p>Un sitio profesional genera confianza y más ventas.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">∞</div>
                        <h4>Alcance ilimitado</h4>
                        <p>Llega a clientes en cualquier lugar sin límites geográficos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEMAS QUE RESOLVEMOS -->
    <section class="dacriz-section dacriz-section-light" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Problemas que resolvemos</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Creamos soluciones web que realmente funcionan</p>
            </div>
            <div class="row" style="gap: 20px;">
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ No tienes presencia online</h4>
                        <p>Tu competencia te gana clientes porque ellos sí aparecen en Google y tú no.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Sitio web desactualizado</h4>
                        <p>Tu página se ve antigua, lenta y no funciona bien en celulares.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Quieres vender online</h4>
                        <p>Necesitas una tienda online profesional pero no sabes por dónde empezar.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Procesos manuales</h4>
                        <p>Pierdes tiempo en tareas repetitivas que podrían automatizarse.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUÉ INCLUYE -->
    <section class="dacriz-section" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Qué incluye nuestro servicio de desarrollo web</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Soluciones completas para tu presencia digital</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    </div>
                    <h3>Sitios Web WordPress</h3>
                    <p>Páginas corporativas profesionales, rápidas, fáciles de administrar y optimizadas para SEO.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$130 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Diseño + 5 páginas</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    </div>
                    <h3>Tiendas Shopify</h3>
                    <p>E-commerce completo en Shopify: catálogo, pagos, envíos y gestión de inventario.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$195 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Setup completo + tema</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    </div>
                    <h3>E-commerce WooCommerce</h3>
                    <p>Tiendas online en WordPress con WooCommerce, personalizables y escalables.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$244 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Tienda completa</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                    </div>
                    <h3>Diseño Web Personalizado</h3>
                    <p>Diseños únicos adaptados a tu marca, responsive y optimizados para conversión.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$163 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Diseño único + desarrollo</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    </div>
                    <h3>Landing Pages</h3>
                    <p>Páginas de aterrizaje optimizadas para campañas publicitarias y máxima conversión.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$65 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">1 página optimizada</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    </div>
                    <h3>Desarrollo a Medida</h3>
                    <p>Plataformas, portales y sistemas web personalizados según tus necesidades específicas.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$488 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Según requerimientos</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                    </div>
                    <h3>Integraciones API</h3>
                    <p>Conectamos tu web con CRM, ERP, pasarelas de pago, email marketing y más.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$81 USD</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Por integración</span>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <h3>Mantenimiento y Soporte</h3>
                    <p>Actualizaciones, backups, seguridad y soporte técnico continuo para tu sitio web.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Desde</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$13 USD/mes</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Plan básico</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESO -->
    <section class="dacriz-section dacriz-section-light" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Cómo trabajamos tu proyecto web</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Proceso claro desde la idea hasta el lanzamiento</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step">
                    <div class="step-num">1</div>
                    <h4>Reunión y Análisis</h4>
                    <p>Entendemos tu negocio, objetivos y requerimientos específicos del proyecto.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">2</div>
                    <h4>Propuesta y Cotización</h4>
                    <p>Te presentamos la solución técnica, tiempos y costos detallados.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">3</div>
                    <h4>Diseño y Prototipo</h4>
                    <p>Creamos el diseño visual y estructura de tu sitio para tu aprobación.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">4</div>
                    <h4>Desarrollo</h4>
                    <p>Programamos tu sitio con las mejores prácticas y estándares de calidad.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">5</div>
                    <h4>Pruebas y Lanzamiento</h4>
                    <p>Testeamos todo, capacitamos a tu equipo y lanzamos tu sitio al mundo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="dacriz-section" id="faq" aria-labelledby="faq-web-tech-title" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 id="faq-web-tech-title" style="font-size: 2rem;">Preguntas frecuentes sobre desarrollo web</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resolvemos tus dudas más comunes</p>
            </div>
            <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto tiempo tarda en hacerse un sitio web?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Depende de la complejidad. Un sitio web corporativo toma 2-4 semanas. Una tienda online 4-8 semanas. Proyectos a medida pueden tomar 2-3 meses. Te damos tiempos específicos en la propuesta.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto cuesta un sitio web?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Los precios varían según funcionalidades. Un sitio corporativo desde $800 USD. E-commerce desde $1,500 USD. Proyectos a medida desde $3,000 USD. Solicita una cotización personalizada.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Trabajan con WordPress, Shopify u otras plataformas?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, trabajamos con WordPress, Shopify, WooCommerce y desarrollo a medida. Recomendamos la mejor plataforma según tu tipo de negocio y objetivos.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿El sitio web será responsive (adaptado a celulares)?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, todos nuestros sitios son 100% responsive y se adaptan perfectamente a celulares, tablets y computadoras. Más del 70% del tráfico viene de móviles.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Podré actualizar el contenido yo mismo?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, usamos plataformas como WordPress que permiten actualizar textos, imágenes y contenido fácilmente sin conocimientos técnicos. Te capacitamos en el uso.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Incluye hosting y dominio?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">El desarrollo no incluye hosting ni dominio, pero te asesoramos en la contratación y configuración. Podemos gestionar el hosting por ti con un costo adicional mensual.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿El sitio estará optimizado para SEO?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, implementamos SEO técnico básico: velocidad, estructura, meta tags, sitemap. Para posicionamiento avanzado recomendamos nuestro servicio de SEO.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Ofrecen soporte después del lanzamiento?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, incluimos 30 días de soporte gratuito post-lanzamiento. Luego puedes contratar planes de mantenimiento mensual para actualizaciones, backups y soporte continuo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para tener tu sitio web profesional?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita una cotización gratuita y descubre cómo podemos crear la presencia digital que tu negocio necesita.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Cotización gratuita</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Propuesta personalizada</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sin compromiso</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=web-tech" class="btn-primary btn-white">Solicitar cotización gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, quiero una cotización para un sitio web profesional'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
