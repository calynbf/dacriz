<?php
/**
 * Template Name: Servicio - Paneles Publicitarios
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

    <section class="service-hero" style="background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Publicidad Exterior</span>
                <h1 id="paneles-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Paneles publicitarios de alto impacto</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Diseño, fabricación e instalación de vallas, paneles luminosos, letras corpóreas y señalética para máxima visibilidad.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=paneles-publicitarios" class="btn-primary" style="background: #fff; color: #ff5858;">Solicitar asesoría gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver opciones</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Diseño incluido</span>
                    <span>✓ Instalación profesional</span>
                    <span>✓ Garantía 12 meses</span>
                </div>
            </div>
        </div>
    </section>

    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué publicidad exterior?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Impacto masivo y permanente</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col"><div class="benefit-card"><div class="benefit-number">24/7</div><h4>Visibilidad constante</h4><p>Tu marca visible las 24 horas del día.</p></div></div>
                <div class="col"><div class="benefit-card"><div class="benefit-number">1000s</div><h4>Alcance masivo</h4><p>Miles de impresiones diarias en ubicaciones estratégicas.</p></div></div>
                <div class="col"><div class="benefit-card"><div class="benefit-number">+70%</div><h4>Recordación</h4><p>Mayor recordación de marca vs. medios digitales.</p></div></div>
            </div>
        </div>
    </section>

    <section class="dacriz-section dacriz-section-light" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Tipos de paneles publicitarios</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Soluciones para cada necesidad</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></div>
                    <h3>Vallas Publicitarias</h3>
                    <p>Paneles de gran formato en carreteras y avenidas. Estructura metálica con lona front.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><path d="M9 3v18"></path><circle cx="15.5" cy="12" r="2.5"></circle></svg></div>
                    <h3>Paneles Luminosos</h3>
                    <p>Cajas de luz con impresión backlight e iluminación LED para fachadas.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="2" width="6" height="20" rx="2" ry="2"></rect></svg></div>
                    <h3>Tótems Publicitarios</h3>
                    <p>Estructuras verticales de gran altura para identificación de marca.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7V4h16v3"></path><path d="M9 20h6"></path><path d="M12 4v16"></path></svg></div>
                    <h3>Letras Corpóreas</h3>
                    <p>Letras 3D en acero, acrílico o PVC con iluminación LED.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg></div>
                    <h3>Banderolas y Pendones</h3>
                    <p>Publicidad colgante para postes, fachadas y eventos.</p>
                </article>
                <article class="home-service-card">
                    <div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg></div>
                    <h3>Señalética</h3>
                    <p>Señalización interna y externa: direccionales, informativas, seguridad.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Cómo trabajamos</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Servicio integral llave en mano</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step"><div class="step-num">1</div><h4>Asesoría y Cotización</h4><p>Evaluamos ubicación, permisos y tipo de panel óptimo.</p></div>
                <div class="process-simple-step"><div class="step-num">2</div><h4>Diseño</h4><p>Creamos arte optimizado para máxima visibilidad a distancia.</p></div>
                <div class="process-simple-step"><div class="step-num">3</div><h4>Fabricación</h4><p>Estructura metálica e impresión en materiales durables.</p></div>
                <div class="process-simple-step"><div class="step-num">4</div><h4>Instalación</h4><p>Montaje profesional con equipo especializado.</p></div>
                <div class="process-simple-step"><div class="step-num">5</div><h4>Mantenimiento</h4><p>Servicio opcional de limpieza y revisión.</p></div>
            </div>
        </div>
    </section>

    <section class="dacriz-section dacriz-section-light" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Qué incluye el servicio</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Todo lo necesario para tu panel</p>
            </div>
            <div class="row" style="gap: 20px;">
                <div class="col" style="flex: 0 0 calc(33.333% - 14px);"><div class="use-case-card"><h4>✓ Diseño gráfico</h4><p>Arte optimizado para visibilidad.</p></div></div>
                <div class="col" style="flex: 0 0 calc(33.333% - 14px);"><div class="use-case-card"><h4>✓ Estructura metálica</h4><p>Acero galvanizado resistente.</p></div></div>
                <div class="col" style="flex: 0 0 calc(33.333% - 14px);"><div class="use-case-card"><h4>✓ Impresión UV</h4><p>Lona front alta durabilidad.</p></div></div>
                <div class="col" style="flex: 0 0 calc(33.333% - 14px);"><div class="use-case-card"><h4>✓ Instalación profesional</h4><p>Montaje con equipo especializado.</p></div></div>
                <div class="col" style="flex: 0 0 calc(33.333% - 14px);"><div class="use-case-card"><h4>✓ Iluminación LED</h4><p>Bajo consumo (paneles luminosos).</p></div></div>
                <div class="col" style="flex: 0 0 calc(33.333% - 14px);"><div class="use-case-card"><h4>✓ Garantía 12 meses</h4><p>Estructura y fabricación.</p></div></div>
            </div>
        </div>
    </section>

    <section class="dacriz-section" id="faq" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Preguntas frecuentes</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resolvemos tus dudas</p>
            </div>
            <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Necesito permisos municipales?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, para instalación en vía pública. Te asesoramos en el trámite según ubicación.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto dura la impresión?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Lona front 2-3 años en exteriores. Vinilo 3-5 años con mantenimiento básico.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto cuesta un panel publicitario?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Desde $500 USD paneles pequeños hasta $5,000+ USD vallas grandes. Depende de tamaño, tipo e iluminación.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Ofrecen alquiler de espacios?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Sí, contamos con ubicaciones estratégicas disponibles para alquiler mensual.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto demora la instalación?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Paneles pequeños 1-2 días, vallas grandes 3-5 días, letras corpóreas 2-4 días.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Incluye mantenimiento?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0;">Garantía 12 meses incluida. Mantenimiento preventivo disponible con costo adicional.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para aumentar la visibilidad de tu marca?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita asesoría gratuita y cotización personalizada según ubicación y tipo de panel.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Asesoría gratuita</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Diseño incluido</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Garantía 12 meses</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=paneles-publicitarios" class="btn-primary btn-white">Solicitar asesoría gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, necesito información sobre paneles publicitarios'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
