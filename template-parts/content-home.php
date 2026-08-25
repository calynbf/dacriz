<?php
/**
 * Template Part: Contenido de la Página de Inicio
 * 
 * @package DACRIZ
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- HERO MODERNO -->
<section class="service-hero" style="background: linear-gradient(135deg, #2a9fb8 0%, #32bad2 100%); padding: 80px 0;">
    <div class="container">
        <div class="hero-content" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Desarrollo web, e-commerce y automatización</span>
            <h1 style="color: #fff; font-size: 3rem; margin-bottom: 20px; line-height: 1.2; font-weight: 700;">Creamos tecnología que convierte visitas en clientes</h1>
            <p style="color: rgba(255,255,255,0.95); font-size: 1.25rem; margin-bottom: 32px; line-height: 1.6; max-width: 760px; margin-left: auto; margin-right: auto;">Diseñamos, desarrollamos y optimizamos sitios WordPress, tiendas online e integraciones con WhatsApp e inteligencia artificial para negocios que quieren crecer.</p>
            <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 32px;">
                <a href="/contacto/" class="btn-primary" style="background: #fff; color: #16849a; font-size: 1.1rem; padding: 14px 32px;">Solicitar diagnóstico gratuito</a>
                <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5); font-size: 1.1rem; padding: 14px 32px;">Ver servicios</a>
            </div>
            <div class="hero-features" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; color: rgba(255,255,255,0.95); font-size: 1rem;">
                <span style="display: flex; align-items: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Más de 10 años de experiencia
                </span>
                <span style="display: flex; align-items: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    65 proyectos completados
                </span>
                <span style="display: flex; align-items: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    Atención directa y personalizada
                </span>
            </div>
        </div>
    </div>
</section>

<!-- SERVICIOS PRINCIPALES -->
<section class="dacriz-section dacriz-section-light" id="servicios" aria-labelledby="servicios-title" style="padding: 60px 0;">
    <div class="container">
        <div class="section-title" style="margin-bottom: 40px;">
            <h2 id="servicios-title" style="font-size: 2rem;">Nuestros Servicios</h2>
            <p style="font-size: 1.1rem; color: #6d7175;">Una solución técnica clara para cada etapa de tu negocio</p>
        </div>

        <div class="home-services-grid">
            <article class="home-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                </div>
                <h3>Posicionamiento SEO</h3>
                <ul class="service-list-compact">
                    <li><a href="/servicios/seo/">Auditoría SEO</a></li>
                    <li><a href="/servicios/seo/">Estrategia SEO</a></li>
                    <li><a href="/servicios/seo/">Arquitectura SEO</a></li>
                    <li><a href="/servicios/seo/">SEO On Page</a></li>
                    <li><a href="/servicios/seo/">Consultoría SEO</a></li>
                    <li><a href="/servicios/seo/">SEO Off Page</a></li>
                </ul>
            </article>

            <article class="home-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                </div>
                <h3>Estrategia SEM</h3>
                <ul class="service-list-compact">
                    <li><a href="/servicios/ads/">Google Ads</a></li>
                    <li><a href="/servicios/ads/">Facebook Ads</a></li>
                    <li><a href="/servicios/ads/">Instagram Ads</a></li>
                    <li><a href="/servicios/ads/">YouTube Ads</a></li>
                    <li><a href="/servicios/ads/">Retargeting</a></li>
                    <li><a href="/servicios/ads/">Administrador de anuncios</a></li>
                </ul>
            </article>

            <article class="home-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                </div>
                <h3>Desarrollo Web</h3>
                <ul class="service-list-compact">
                    <li><a href="/servicios/web-tech/">WordPress</a></li>
                    <li><a href="/servicios/web-tech/">Shopify</a></li>
                    <li><a href="/servicios/web-tech/">E-commerce</a></li>
                    <li><a href="/servicios/web-tech/">Desarrollo a medida</a></li>
                    <li><a href="/servicios/web-tech/">Integraciones</a></li>
                    <li><a href="/servicios/web-tech/">Apps</a></li>
                </ul>
            </article>

            <article class="home-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3>Marketing Digital</h3>
                <ul class="service-list-compact">
                    <li><a href="/servicios/growth-ia/">Redes Sociales</a></li>
                    <li><a href="/servicios/growth-ia/">Estrategia de Contenido</a></li>
                    <li><a href="/servicios/growth-ia/">Copywriting</a></li>
                    <li><a href="/servicios/growth-ia/">Email Marketing</a></li>
                    <li><a href="/servicios/growth-ia/">Automatización</a></li>
                    <li><a href="/servicios/growth-ia/">Inteligencia Artificial</a></li>
                </ul>
            </article>

            <article class="home-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                </div>
                <h3>Diseño e Impresión</h3>
                <ul class="service-list-compact">
                    <li><a href="/servicios/diseno-grafico/">Branding e Identidad</a></li>
                    <li><a href="/servicios/diseno-impresion/">Tarjetas y Flyers</a></li>
                    <li><a href="/servicios/diseno-impresion/">Brochures y Catálogos</a></li>
                    <li><a href="/servicios/diseno-grafico/">Diseño para Redes</a></li>
                    <li><a href="/servicios/diseno-impresion/">Material POP</a></li>
                    <li><a href="/servicios/diseno-grafico/">Packaging</a></li>
                </ul>
            </article>

            <article class="home-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg>
                </div>
                <h3>Paneles Publicitarios</h3>
                <ul class="service-list-compact">
                    <li><a href="/servicios/paneles-publicitarios/">Vallas Publicitarias</a></li>
                    <li><a href="/servicios/paneles-publicitarios/">Paneles Luminosos</a></li>
                    <li><a href="/servicios/paneles-publicitarios/">Tótems Publicitarios</a></li>
                    <li><a href="/servicios/paneles-publicitarios/">Letras Corpóreas</a></li>
                    <li><a href="/servicios/paneles-publicitarios/">Banderolas</a></li>
                    <li><a href="/servicios/paneles-publicitarios/">Señalética</a></li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- RESULTADOS Y BENEFICIOS -->
<section class="dacriz-section" style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-title" style="margin-bottom: 40px;">
            <h2 style="font-size: 2rem;">Experiencia que reduce el riesgo de tu proyecto</h2>
            <p style="font-size: 1.1rem; color: #6d7175;">Trayectoria verificable desarrollando soluciones digitales</p>
        </div>
        <div class="row" style="gap: 20px;">
            <div class="col">
                <div class="benefit-card">
                    <div class="benefit-number">65</div>
                    <h4>Proyectos completados</h4>
                    <p>Experiencia real entregando sitios, tiendas e integraciones para distintos sectores.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-card">
                    <div class="benefit-number">+10</div>
                    <h4>Años desarrollando</h4>
                    <p>Dominio de WordPress, PHP, HTML, CSS, JavaScript y comercio electrónico.</p>
                </div>
            </div>
            <div class="col">
                <div class="benefit-card">
                    <div class="benefit-number">4.76/5</div>
                    <h4>Valoración profesional</h4>
                    <p>Calificación construida mediante decenas de proyectos y clientes recurrentes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CASOS DE USO -->
<section class="dacriz-section dacriz-section-light" style="padding: 60px 0;">
    <div class="container">
        <div class="section-title" style="margin-bottom: 40px;">
            <h2 style="font-size: 2rem;">¿Para quién es ideal?</h2>
            <p style="font-size: 1.1rem; color: #6d7175;">Trabajamos con diferentes tipos de negocios</p>
        </div>
        <div class="row" style="gap: 16px;">
            <div class="col" style="flex: 0 0 calc(50% - 8px);">
                <div class="use-case-card">
                    <h4>E-commerce y Tiendas Online</h4>
                    <p>Aumenta ventas con SEO, Google Shopping y campañas de retargeting que convierten.</p>
                    <a href="/contacto/?servicio=web-tech" class="link-arrow">Solicitar estrategia →</a>
                </div>
            </div>
            <div class="col" style="flex: 0 0 calc(50% - 8px);">
                <div class="use-case-card">
                    <h4>Empresas de Servicios</h4>
                    <p>Genera leads calificados con SEO local, Google Ads y landing pages optimizadas.</p>
                    <a href="/contacto/?servicio=ads" class="link-arrow">Solicitar estrategia →</a>
                </div>
            </div>
            <div class="col" style="flex: 0 0 calc(50% - 8px);">
                <div class="use-case-card">
                    <h4>Startups y Negocios Digitales</h4>
                    <p>Escala rápido con growth marketing, automatización y estrategias de IA.</p>
                    <a href="/contacto/?servicio=growth-ia" class="link-arrow">Solicitar estrategia →</a>
                </div>
            </div>
            <div class="col" style="flex: 0 0 calc(50% - 8px);">
                <div class="use-case-card">
                    <h4>Empresas Tradicionales</h4>
                    <p>Digitaliza tu negocio con presencia web profesional y estrategias de captación online.</p>
                    <a href="/contacto/?servicio=seo" class="link-arrow">Solicitar estrategia →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESO SIMPLE -->
<section class="dacriz-section" style="padding: 60px 0; background: #fff;">
    <div class="container">
        <div class="section-title" style="margin-bottom: 40px;">
            <h2 style="font-size: 2rem;">Cómo trabajamos</h2>
            <p style="font-size: 1.1rem; color: #6d7175;">Proceso simple y transparente</p>
        </div>
        <div class="process-simple">
            <div class="process-simple-step">
                <div class="step-num">1</div>
                <h4>Análisis gratuito</h4>
                <p>Revisamos tu situación actual y oportunidades de mejora.</p>
            </div>
            <div class="process-simple-step">
                <div class="step-num">2</div>
                <h4>Propuesta personalizada</h4>
                <p>Te presentamos estrategia, tiempos y costos claros.</p>
            </div>
            <div class="process-simple-step">
                <div class="step-num">3</div>
                <h4>Desarrollo y pruebas</h4>
                <p>Construimos la solución y validamos cada funcionalidad antes de publicarla.</p>
            </div>
            <div class="process-simple-step">
                <div class="step-num">4</div>
                <h4>Entrega y acompañamiento</h4>
                <p>Entregamos accesos, documentación y soporte para que puedas avanzar con seguridad.</p>
            </div>
        </div>
    </div>
</section>

<!-- PREGUNTAS FRECUENTES -->
<section class="dacriz-section dacriz-section-light" id="faq" style="padding: 60px 0;">
    <div class="container">
        <div class="section-title" style="margin-bottom: 40px;">
            <h2 style="font-size: 2rem;">Preguntas frecuentes</h2>
            <p style="font-size: 1.1rem; color: #6d7175;">Resolvemos tus dudas más comunes</p>
        </div>
        <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
            <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué servicios ofrecen?</h3>
                <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Nuestro foco es desarrollo web, WordPress, Shopify, WooCommerce, integraciones, automatización con WhatsApp e IA. También ofrecemos SEO, publicidad y diseño como servicios complementarios.</p>
            </div>
            <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto cuesta trabajar con ustedes?</h3>
                <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Cada proyecto se cotiza según alcance, integraciones y plazo. Primero realizamos un diagnóstico gratuito y luego entregamos una propuesta clara, sin costos ocultos.</p>
            </div>
            <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿En cuánto tiempo veo resultados?</h3>
                <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Una landing puede tomar pocos días y una tienda o desarrollo personalizado varias semanas. El cronograma se define antes de comenzar y se comunica el avance durante todo el proyecto.</p>
            </div>
            <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Trabajan con empresas de todo Perú?</h3>
                <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, trabajamos con empresas de todo Perú de forma remota. También atendemos clientes internacionales. Nuestros servicios digitales no tienen limitaciones geográficas.</p>
            </div>
            <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿La web quedará bajo mi control?</h3>
                <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí. Entregamos los accesos y dejamos la solución preparada para que puedas administrar contenidos, productos y solicitudes sin depender siempre de un desarrollador.</p>
            </div>
            <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué incluye la consultoría gratuita?</h3>
                <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Reunión de 30 minutos donde analizamos tu situación actual, identificamos oportunidades de mejora y te presentamos una estrategia preliminar. Sin compromiso ni costo.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="dacriz-cta" id="contacto-cta" aria-labelledby="cta-title" style="padding: 60px 0;">
    <div class="container">
        <h2 id="cta-title" style="font-size: 2.2rem; margin-bottom: 16px;">Cuéntanos qué quieres construir o mejorar</h2>
        <p style="font-size: 1.15rem; margin-bottom: 32px;">Recibe un diagnóstico inicial y una recomendación técnica clara para tu proyecto.</p>
        <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
            <span style="display: flex; align-items: center; gap: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Sin compromiso
            </span>
            <span style="display: flex; align-items: center; gap: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Análisis gratuito
            </span>
            <span style="display: flex; align-items: center; gap: 8px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Respuesta en 24h
            </span>
        </div>
        <div class="btn-group" style="gap: 16px;">
            <a href="/contacto/" class="btn-primary btn-white">Solicitar diagnóstico gratuito</a>
            <?php
            $whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
            if (!empty($whatsapp)) :
            ?>
            <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, quiero agendar una consultoría gratuita'); ?>" class="btn-primary" target="_blank" rel="noopener" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);">Escribir por WhatsApp</a>
            <?php endif; ?>
        </div>
    </div>
</section>
