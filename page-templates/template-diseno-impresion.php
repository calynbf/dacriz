<?php
/**
 * Template Name: Servicio - Diseño e Impresión
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

    <section class="service-hero" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Diseño e Impresión</span>
                <h1 id="impresion-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Impresión de alta calidad para tu negocio</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Servicio completo de diseño e impresión: tarjetas, flyers, brochures, banners y más con acabados profesionales.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=diseno-impresion" class="btn-primary" style="background: #fff; color: #4facfe;">Solicitar cotización gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver catálogo</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Diseño incluido</span>
                    <span>✓ Entrega rápida</span>
                    <span>✓ Alta calidad</span>
                </div>
            </div>
        </div>
    </section>

    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué elegirnos?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Calidad, rapidez y servicio completo</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col"><div class="benefit-card"><div class="benefit-number">2en1</div><h4>Servicio integral</h4><p>Diseño + impresión en un solo lugar.</p></div></div>
                <div class="col"><div class="benefit-card"><div class="benefit-number">AAA</div><h4>Alta calidad</h4><p>Papeles premium y acabados profesionales.</p></div></div>
                <div class="col"><div class="benefit-card"><div class="benefit-number">24h</div><h4>Entrega rápida</h4><p>Producción express disponible.</p></div></div>
            </div>
        </div>
    </section>

    <section class="dacriz-section dacriz-section-light" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Catálogo de productos</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Material impreso con diseño incluido</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect></svg></div>
                    <h3>Tarjetas de Presentación</h3>
                    <p>Couché 300gr, barniz UV, laminado mate/brillante. Desde 100 unidades.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg></div>
                    <h3>Flyers y Volantes</h3>
                    <p>Couché 150gr, full color, A5/A6. Desde 500 unidades.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></div>
                    <h3>Brochures y Catálogos</h3>
                    <p>Couché 150-200gr, grapa o anillado, hasta 48 páginas.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg></div>
                    <h3>Afiches y Posters</h3>
                    <p>Couché 150gr, A3/A2/A1, laminado opcional.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path></svg></div>
                    <h3>Papelería Corporativa</h3>
                    <p>Hojas membretadas, sobres, carpetas, facturas.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle></svg></div>
                    <h3>Etiquetas y Stickers</h3>
                    <p>Adhesivo permanente/removible, troquelado, laminado UV.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect></svg></div>
                    <h3>Banners y Gigantografías</h3>
                    <p>Lona front, vinilo adhesivo, roll-up. Desde 1 unidad.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg></div>
                    <h3>Material POP</h3>
                    <p>Displays, wobbler, cenefas, material punto de venta.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Cómo trabajamos</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Proceso simple y rápido</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step"><div class="step-num">1</div><h4>Cotización</h4><p>Defines producto, cantidad, papel y acabados.</p></div>
                <div class="process-simple-step"><div class="step-num">2</div><h4>Diseño</h4><p>Creamos el diseño o trabajamos con tu archivo.</p></div>
                <div class="process-simple-step"><div class="step-num">3</div><h4>Aprobación</h4><p>Revisas y apruebas el arte final.</p></div>
                <div class="process-simple-step"><div class="step-num">4</div><h4>Producción</h4><p>Imprimimos con control de calidad.</p></div>
                <div class="process-simple-step"><div class="step-num">5</div><h4>Entrega</h4><p>Envío a domicilio o recojo en tienda.</p></div>
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
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuál es el pedido mínimo?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Tarjetas desde 100 unidades, flyers desde 500, brochures desde 50, banners desde 1 unidad.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Incluye el diseño?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, en pedidos mayores a S/. 300 el diseño es gratis. En pedidos menores tiene costo adicional.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto demora?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Tarjetas 3-5 días, flyers 3-5 días, brochures 5-7 días, banners 2-3 días. Servicio express disponible.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué tipos de papel usan?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Couché 150gr, 200gr, 300gr, bond, opalina, adhesivo, lona front, vinilo según el producto.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué acabados ofrecen?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Barniz UV, laminado mate/brillante, troquelado, perforado, anillado, grapa, doblado.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Hacen envíos a provincias?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, enviamos a todo el Perú. El costo de envío se cotiza según destino y peso.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Necesitas material impreso de calidad?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita cotización gratuita con tiempos de entrega y opciones de acabado.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Diseño incluido</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Entrega rápida</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Alta calidad</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=diseno-impresion" class="btn-primary btn-white">Solicitar cotización gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, necesito cotización de impresión'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
