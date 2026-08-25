<?php
/**
 * Template Name: Servicio - Growth / IA
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
    <section class="service-hero" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Growth Marketing & IA</span>
                <h1 id="growth-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Automatiza y escala tu marketing con IA</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Estrategias de crecimiento potenciadas con inteligencia artificial para optimizar cada etapa de tu embudo de ventas.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=growth-ia" class="btn-primary" style="background: #fff; color: #f5576c;">Solicitar consultoría gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver qué incluye</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Automatización con IA</span>
                    <span>✓ Optimización continua</span>
                    <span>✓ ROI medible</span>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué usar Growth Marketing e IA?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Crece más rápido con menos recursos</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">3x</div>
                        <h4>Más eficiencia</h4>
                        <p>Automatiza tareas repetitivas y enfoca tu equipo en lo estratégico.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">24/7</div>
                        <h4>Siempre activo</h4>
                        <p>Sistemas que trabajan por ti las 24 horas del día.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">+50%</div>
                        <h4>Más conversiones</h4>
                        <p>Optimización continua basada en datos y aprendizaje automático.</p>
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
                <p style="font-size: 1.05rem; color: #6d7175;">Eliminamos fricciones en tu proceso comercial</p>
            </div>
            <div class="row" style="gap: 20px;">
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Leads sin seguimiento</h4>
                        <p>Recibes contactos pero se pierden porque nadie hace seguimiento rápido y efectivo.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Procesos manuales lentos</h4>
                        <p>Tu equipo pierde tiempo en tareas repetitivas que podrían automatizarse.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Sin datos para decidir</h4>
                        <p>No tienes claridad sobre qué funciona y qué no en tu embudo de ventas.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Crecimiento estancado</h4>
                        <p>Has llegado a un techo y no sabes cómo escalar sin aumentar costos proporcionalmente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUÉ INCLUYE -->
    <section class="dacriz-section" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Qué incluye nuestro servicio de Growth & IA</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Estrategias y herramientas para acelerar tu crecimiento</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                    <h3>Estrategia de Crecimiento</h3>
                    <p>Análisis de embudo, identificación de cuellos de botella y plan de optimización.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <h3>Automatización con IA</h3>
                    <p>Chatbots, respuestas automáticas, clasificación de leads y seguimiento inteligente.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3>Buyer Persona & Segmentación</h3>
                    <p>Definición de perfiles ideales y segmentación avanzada para mensajes personalizados.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <h3>Email Marketing Automatizado</h3>
                    <p>Secuencias de nutrición, bienvenida, abandono de carrito y reactivación.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    </div>
                    <h3>Copywriting Persuasivo</h3>
                    <p>Mensajes optimizados para anuncios, landing pages y secuencias de email.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3>Optimización de Funnel</h3>
                    <p>Diseño y mejora de embudos de conversión con métricas claras por etapa.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                    </div>
                    <h3>Gestión de Redes Sociales</h3>
                    <p>Contenido estratégico, programación y community management orientado a ventas.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                    </div>
                    <h3>Growth Marketing Completo</h3>
                    <p>Estrategia integral: funnel, automatización, email, redes y optimización continua.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESO -->
    <section class="dacriz-section dacriz-section-light" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Cómo implementamos Growth & IA</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Metodología probada para crecimiento sostenible</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step">
                    <div class="step-num">1</div>
                    <h4>Diagnóstico Completo</h4>
                    <p>Analizamos tu embudo actual, identificamos cuellos de botella y oportunidades de mejora.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">2</div>
                    <h4>Estrategia de Crecimiento</h4>
                    <p>Diseñamos plan de acción con KPIs claros, automatizaciones y experimentos a ejecutar.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">3</div>
                    <h4>Implementación</h4>
                    <p>Configuramos herramientas, automatizaciones con IA y flujos de trabajo optimizados.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">4</div>
                    <h4>Testing y Optimización</h4>
                    <p>Probamos variaciones, analizamos resultados y optimizamos continuamente.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">5</div>
                    <h4>Escalamiento</h4>
                    <p>Duplicamos lo que funciona y eliminamos lo que no genera resultados.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="dacriz-section" id="faq" aria-labelledby="faq-growth-title" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 id="faq-growth-title" style="font-size: 2rem;">Preguntas frecuentes sobre Growth Marketing e IA</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resolvemos tus dudas más comunes</p>
            </div>
            <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué es Growth Marketing?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Es una metodología de marketing enfocada en experimentación rápida, optimización basada en datos y crecimiento sostenible. A diferencia del marketing tradicional, Growth se enfoca en todo el embudo: adquisición, activación, retención, ingresos y referidos.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cómo ayuda la IA en marketing y ventas?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">La IA automatiza tareas repetitivas (respuestas, clasificación de leads, seguimientos), personaliza mensajes a escala, predice comportamientos y optimiza campañas en tiempo real. Esto libera tiempo de tu equipo para enfocarse en estrategia y cierres.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Necesito un CRM para empezar?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No es obligatorio. Podemos empezar con las herramientas que ya usas (Google Sheets, WhatsApp, email). Sin embargo, para escalar recomendamos implementar un CRM como HubSpot, Pipedrive o Zoho.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿La IA reemplazará a mi equipo de ventas?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No. La IA potencia a tu equipo, no lo reemplaza. Automatiza tareas mecánicas (calificación, seguimiento, recordatorios) para que tu equipo se enfoque en conversaciones de alto valor y cierres.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿En cuánto tiempo veo resultados?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Las primeras mejoras se ven en 4-6 semanas con quick wins (automatizaciones básicas, optimizaciones rápidas). Resultados significativos en crecimiento se observan entre 2-3 meses de trabajo continuo.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué herramientas de IA usan?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Usamos ChatGPT, Claude, Make.com, Zapier, chatbots personalizados, herramientas de email marketing con IA (Mailchimp, ActiveCampaign), CRMs con IA y plataformas de automatización según tus necesidades.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Trabajan con negocios B2B y B2C?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, trabajamos con ambos. La estrategia de Growth se adapta según el modelo de negocio, ciclo de venta y tipo de cliente. B2B requiere más nutrición y seguimiento; B2C más volumen y optimización de conversión.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto cuesta implementar Growth con IA?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Depende del alcance. Proyectos desde $800 USD/mes para automatizaciones básicas, hasta $3,000+ USD/mes para estrategia completa con IA avanzada. Solicita una consultoría para cotización personalizada.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para escalar tu negocio con Growth e IA?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita una consultoría gratuita y descubre cómo automatizar y optimizar tu embudo de ventas.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Consultoría gratuita</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Plan personalizado</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sin compromiso</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=growth-ia" class="btn-primary btn-white">Solicitar consultoría gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, quiero una consultoría sobre Growth Marketing e IA para mi negocio'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
