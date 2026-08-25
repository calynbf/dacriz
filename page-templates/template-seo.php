<?php
/**
 * Template Name: Servicio - SEO
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
    <section class="service-hero" style="background: linear-gradient(135deg, #2a9fb8 0%, #32bad2 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Posicionamiento SEO</span>
                <h1 id="seo-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Aumenta tu tráfico orgánico y genera más ventas con SEO</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Posicionamos tu negocio en Google para que tus clientes te encuentren cuando buscan tus productos o servicios.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=seo" class="btn-primary" style="background: #fff; color: #32bad2;">Solicitar auditoría gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver qué incluye</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Resultados en 3-6 meses</span>
                    <span>✓ Reportes mensuales</span>
                    <span>✓ Sin permanencia</span>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué invertir en SEO?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Beneficios reales que impactan en tus resultados de negocio</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">+300%</div>
                        <h4>Más tráfico orgánico</h4>
                        <p>Aumenta visitas calificadas sin pagar por cada clic.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">24/7</div>
                        <h4>Visibilidad constante</h4>
                        <p>Tu negocio visible las 24 horas en Google.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">ROI</div>
                        <h4>Inversión a largo plazo</h4>
                        <p>Resultados que se mantienen y crecen con el tiempo.</p>
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
                <p style="font-size: 1.05rem; color: #6d7175;">Identificamos y solucionamos los bloqueos que impiden tu crecimiento</p>
            </div>
            <div class="row" style="gap: 20px;">
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ No apareces en Google</h4>
                        <p>Tu competencia ocupa las primeras posiciones mientras tú quedas invisible en búsquedas importantes.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Tráfico que no convierte</h4>
                        <p>Recibes visitas pero no se transforman en contactos, leads o ventas reales.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Problemas técnicos</h4>
                        <p>Errores de indexación, velocidad lenta, contenido duplicado que afectan tu posicionamiento.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Dependencia de publicidad</h4>
                        <p>Gastas mucho en Google Ads sin construir presencia orgánica sostenible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUÉ INCLUYE -->
    <section class="dacriz-section" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Qué incluye nuestro servicio SEO</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Estrategia completa para posicionar tu negocio en Google</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                    </div>
                    <h3>Auditoría SEO Completa</h3>
                    <p>Análisis técnico, de contenido y competencia para identificar oportunidades de mejora y quick wins.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    </div>
                    <h3>SEO Básico</h3>
                    <p>Optimización técnica, palabras clave, contenido on-page y reportes mensuales.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    </div>
                    <h3>SEO Profesional</h3>
                    <p>Todo lo del plan básico + creación de contenido, link building y optimización avanzada.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    </div>
                    <h3>SEO Enterprise</h3>
                    <p>Estrategia completa para e-commerce y sitios grandes. Incluye todo + consultoría dedicada.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3>Creación de Contenido SEO</h3>
                    <p>Artículos de blog optimizados para SEO, investigados y escritos por expertos.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3>Link Building</h3>
                    <p>Construcción de autoridad con enlaces de calidad desde sitios relevantes de tu industria.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    </div>
                    <h3>SEO Local</h3>
                    <p>Optimización de Google My Business y estrategias para aparecer en búsquedas locales.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                    </div>
                    <h3>Consultoría SEO</h3>
                    <p>Asesoría personalizada, estrategia y guía para que tu equipo implemente SEO.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESO -->
    <section class="dacriz-section dacriz-section-light" id="metodologia" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Nuestro proceso de trabajo</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Metodología probada para resultados consistentes</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step">
                    <div class="step-num">1</div>
                    <h4>Auditoría y Análisis</h4>
                    <p>Revisamos tu sitio, competencia y oportunidades. Entregamos un plan de acción priorizado.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">2</div>
                    <h4>Optimización Técnica</h4>
                    <p>Corregimos errores técnicos, mejoramos velocidad y aseguramos correcta indexación.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">3</div>
                    <h4>Optimización de Contenido</h4>
                    <p>Mejoramos páginas existentes y creamos contenido nuevo optimizado para conversión.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">4</div>
                    <h4>Link Building</h4>
                    <p>Construimos autoridad con enlaces de calidad y menciones relevantes.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">5</div>
                    <h4>Monitoreo y Ajustes</h4>
                    <p>Seguimiento continuo, reportes mensuales y optimizaciones basadas en datos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="dacriz-section" id="faq" aria-labelledby="faq-seo-title" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 id="faq-seo-title" style="font-size: 2rem;">Preguntas frecuentes sobre SEO</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resolvemos tus dudas más comunes</p>
            </div>
            <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto tiempo tarda en verse resultados con SEO?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Los primeros resultados se ven entre 2-3 meses con mejoras técnicas y optimizaciones rápidas. Resultados más significativos en tráfico y conversiones se observan entre 4-6 meses. SEO es una inversión a mediano y largo plazo.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿El SEO reemplaza a Google Ads?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No, son complementarios. Google Ads genera resultados inmediatos mientras construyes tu posicionamiento orgánico con SEO. La combinación ideal es usar Ads para resultados rápidos y SEO para sostenibilidad a largo plazo.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Hacen SEO local y nacional?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, trabajamos ambos. Para negocios locales optimizamos Google My Business y búsquedas geográficas. Para negocios nacionales o e-commerce, trabajamos posicionamiento a nivel país con estrategias de contenido y autoridad.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué incluyen los reportes mensuales?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Cada mes recibes un informe con: posiciones de palabras clave, evolución de tráfico orgánico, páginas más visitadas, conversiones generadas, mejoras implementadas y plan de acción para el siguiente mes.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Necesito un contrato de permanencia?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No exigimos permanencia, pero recomendamos mínimo 6 meses para ver resultados sólidos. El SEO requiere tiempo para que Google reconozca las mejoras y posicione tu sitio.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Garantizan la primera posición en Google?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No garantizamos posiciones específicas porque Google cambia constantemente su algoritmo. Garantizamos trabajo profesional, mejoras medibles y aumento de tráfico orgánico calificado siguiendo las mejores prácticas de SEO.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Trabajan con WordPress, Shopify u otras plataformas?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, trabajamos con todas las plataformas: WordPress, Shopify, WooCommerce, desarrollos a medida, etc. Adaptamos la estrategia SEO a las capacidades técnicas de cada plataforma.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué pasa si dejo de pagar el servicio SEO?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Las mejoras ya implementadas (optimizaciones técnicas, contenido, enlaces) se mantienen. Sin embargo, el posicionamiento puede bajar gradualmente si la competencia sigue optimizando y tú no. El SEO requiere trabajo continuo para mantener y mejorar posiciones.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para aparecer en Google y generar más ventas?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita una auditoría SEO gratuita y descubre cómo posicionar tu negocio en las primeras posiciones.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Auditoría gratuita</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Plan de acción claro</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sin compromiso</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=seo" class="btn-primary btn-white">Solicitar auditoría SEO gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, quiero una auditoría SEO gratuita para mi negocio'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
