<?php
/**
 * Template Name: Servicio - Ads
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
    <section class="service-hero" style="background: linear-gradient(135deg, #ee5a52 0%, #ff6b6b 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Google Ads & Meta Ads</span>
                <h1 id="ads-title" style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Genera leads y ventas con publicidad digital rentable</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Campañas optimizadas en Google Ads, Facebook e Instagram que convierten tu inversión en resultados medibles.</p>
                <div class="btn-group" style="gap: 12px; justify-content: center; margin-bottom: 24px;">
                    <a href="/contacto/?servicio=ads" class="btn-primary" style="background: #fff; color: #ff6b6b;">Solicitar auditoría gratis</a>
                    <a href="#servicios" class="btn-outline" style="background: transparent; color: #fff; border-color: rgba(255,255,255,0.5);">Ver qué incluye</a>
                </div>
                <div class="hero-features" style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <span>✓ Resultados en 2-4 semanas</span>
                    <span>✓ Optimización diaria</span>
                    <span>✓ ROI transparente</span>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">¿Por qué invertir en publicidad digital?</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resultados inmediatos y escalables para tu negocio</p>
            </div>
            <div class="row" style="gap: 24px;">
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">24h</div>
                        <h4>Resultados rápidos</h4>
                        <p>Empieza a generar leads en las primeras 24-48 horas.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">100%</div>
                        <h4>Control total</h4>
                        <p>Controla presupuesto, audiencia y resultados en tiempo real.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="benefit-card">
                        <div class="benefit-number">ROI</div>
                        <h4>Medición exacta</h4>
                        <p>Sabes exactamente cuánto inviertes y cuánto generas.</p>
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
                <p style="font-size: 1.05rem; color: #6d7175;">Optimizamos tus campañas para máxima rentabilidad</p>
            </div>
            <div class="row" style="gap: 20px;">
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Costo por lead muy alto</h4>
                        <p>Gastas mucho en publicidad pero cada cliente te sale muy caro y no es rentable.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Clics que no convierten</h4>
                        <p>Recibes tráfico pero no se transforma en contactos, ventas o leads calificados.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ No sabes qué funciona</h4>
                        <p>Inviertes sin tener claro qué campañas, anuncios o audiencias generan resultados.</p>
                    </div>
                </div>
                <div class="col" style="flex: 0 0 calc(50% - 10px);">
                    <div class="use-case-card">
                        <h4>❌ Campañas desactualizadas</h4>
                        <p>Nadie optimiza tus anuncios y el rendimiento baja mes a mes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUÉ INCLUYE -->
    <section class="dacriz-section" id="servicios" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Paquetes de Gestión de Campañas</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Planes diseñados para maximizar tu retorno de inversión</p>
            </div>
            <div class="home-services-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </div>
                    <h3>Paquete Básico FB/IG</h3>
                    <p><strong>3 Campañas en 45 días:</strong> 2 de ventas (WhatsApp/Web) + 1 de alcance. Incluye 5 creativos, guiones de video, segmentación quirúrgica y reportes detallados.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Gestión mensual</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$300 USD/mes</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Presupuesto publicitario aparte</span>
                    </div>
                    <button class="toggle-details-btn" onclick="toggleDetails(this)" style="margin-top: 16px; padding: 10px 20px; background: transparent; border: 2px solid #ff4f22; color: #ff4f22; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; transition: all 0.3s; width: 100%;">
                        <span class="btn-text">Ver todo lo que incluye</span>
                        <svg class="btn-icon" style="display: inline-block; width: 16px; height: 16px; margin-left: 8px; transition: transform 0.3s;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="package-details" style="display: none; margin-top: 16px; padding: 16px; background: #f9fafb; border-radius: 8px; font-size: 0.9rem;">
                        <ul style="margin: 0; padding-left: 20px; line-height: 1.8;">
                            <li>Diagnóstico y análisis de perfiles y cuenta publicitaria</li>
                            <li>3 Campañas: 2 de ventas + 1 de alcance y reconocimiento</li>
                            <li>Creación de diferentes ángulos de ventas</li>
                            <li>Segmentación por ciudad, intereses y gustos</li>
                            <li>Definición de objetivos para ventas y posicionamiento</li>
                            <li>Monitoreo constante y optimización</li>
                            <li>Informe y analítica de cada campaña</li>
                            <li>Medición y optimización de KPIs relevantes</li>
                            <li>Creación de 5 creativos en imágenes</li>
                            <li>Creación de guiones para videos de ventas</li>
                            <li>Gestión transparente con acceso total a cuenta</li>
                            <li>Presupuesto sugerido: $15-$17 USD/día (ventas) + $5-$8 USD/día (alcance)</li>
                        </ul>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </div>
                    <h3>Paquete Avanzado FB/IG</h3>
                    <p><strong>4 Campañas en 45 días:</strong> 2 de ventas + 1 de alcance + 1 de videos. Incluye 10 creativos, guiones, optimización activa y análisis de KPIs.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Gestión mensual</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$400 USD/mes</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Presupuesto publicitario aparte</span>
                    </div>
                    <button class="toggle-details-btn" onclick="toggleDetails(this)" style="margin-top: 16px; padding: 10px 20px; background: transparent; border: 2px solid #ff4f22; color: #ff4f22; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; transition: all 0.3s; width: 100%;">
                        <span class="btn-text">Ver todo lo que incluye</span>
                        <svg class="btn-icon" style="display: inline-block; width: 16px; height: 16px; margin-left: 8px; transition: transform 0.3s;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="package-details" style="display: none; margin-top: 16px; padding: 16px; background: #f9fafb; border-radius: 8px; font-size: 0.9rem;">
                        <ul style="margin: 0; padding-left: 20px; line-height: 1.8;">
                            <li>Diagnóstico y análisis de perfiles y cuenta publicitaria</li>
                            <li>4 Campañas: 2 de ventas + 1 de alcance + 1 de reproducciones de videos</li>
                            <li>Creación de diferentes ángulos de ventas</li>
                            <li>Segmentación por ciudad, intereses y gustos</li>
                            <li>Definición de objetivos para ventas y posicionamiento</li>
                            <li>Monitoreo constante y optimización</li>
                            <li>Informe y analítica de cada campaña</li>
                            <li>Medición y optimización de KPIs relevantes</li>
                            <li>Creación de 10 creativos en imágenes</li>
                            <li>Creación de guiones para videos de ventas</li>
                            <li>Gestión transparente con acceso total a cuenta</li>
                            <li>Presupuesto sugerido: $15-$17 USD/día (ventas) + $10-$16 USD/día (alcance/videos)</li>
                        </ul>
                    </div>
                </article>
                <article class="home-service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path></svg>
                    </div>
                    <h3>Google Ads Completo</h3>
                    <p><strong>2 Campañas:</strong> Búsqueda + Display. Incluye keywords estratégicas, 10 creativos, estructura SEO, análisis de competencia y optimización PPC.</p>
                    <div class="service-price" style="margin-top: 12px; padding-top: 12px; border-top: 1px solid #e5e7eb;">
                        <span style="font-size: 0.85rem; color: #6b7280;">Gestión mensual</span>
                        <span style="display: block; font-size: 1.5rem; font-weight: 700; color: #ff4f22; margin-top: 4px;">$300 USD/mes</span>
                        <span style="font-size: 0.8rem; color: #9ca3af;">Presupuesto sugerido: $900-$1,000 USD/mes</span>
                    </div>
                    <button class="toggle-details-btn" onclick="toggleDetails(this)" style="margin-top: 16px; padding: 10px 20px; background: transparent; border: 2px solid #ff4f22; color: #ff4f22; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 0.9rem; transition: all 0.3s; width: 100%;">
                        <span class="btn-text">Ver todo lo que incluye</span>
                        <svg class="btn-icon" style="display: inline-block; width: 16px; height: 16px; margin-left: 8px; transition: transform 0.3s;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="package-details" style="display: none; margin-top: 16px; padding: 16px; background: #f9fafb; border-radius: 8px; font-size: 0.9rem;">
                        <ul style="margin: 0; padding-left: 20px; line-height: 1.8;">
                            <li>2 Campañas: Búsqueda (Search) + Display opcional</li>
                            <li>Objetivo: Leads por WhatsApp o llamadas</li>
                            <li>Análisis e implementación de keywords estratégicas</li>
                            <li>Desarrollo de estructura SEO con palabras clave</li>
                            <li>Análisis de la competencia</li>
                            <li>Optimización continua de campañas</li>
                            <li>Pago por clic (solo pagas cuando hacen clic)</li>
                            <li>Creación de 10 creativos en imágenes</li>
                            <li>Creación de guiones para videos de ventas</li>
                            <li>Informe, evaluación y análisis de resultados</li>
                            <li>Medición de KPIs relevantes</li>
                            <li>Gestión transparente con acceso total a tu cuenta</li>
                            <li>Se recomienda tener sitio web propio</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- QUÉ LOGRAMOS Y CÓMO LO HACEMOS -->
    <section class="dacriz-section dacriz-section-light" style="padding: 60px 0; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="section-title" style="margin-bottom: 50px; text-align: center;">
                <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Qué logramos? ¿Cómo lo hacemos?</h2>
                <p style="font-size: 1.1rem; color: #6d7175; max-width: 800px; margin: 0 auto;">Nuestra metodología probada para maximizar tu inversión publicitaria</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; max-width: 1200px; margin: 0 auto;">
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🎯 Diagnóstico de Cuentas</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">No disparamos a ciegas. Realizamos una auditoría profunda para detectar errores de configuración y capitalizar tus fortalezas actuales.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🚀 Trilogía de Campañas (45 días)</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Implementamos un ecosistema completo. Motores de Ventas para lograr datos atractivos y conversiones rápidas y campañas de Alcance para que tu marca sea la primera opción.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🧠 Ángulos de Venta Ganadores</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">No usamos un solo mensaje. Creamos diferentes enfoques psicológicos para atacar distintos problemas o deseos de tu cliente ideal.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🎯 Segmentación Quirúrgica</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Localizamos a tu audiencia exacta por ubicación e intereses específicos, asegurando que cada dólar llegue a quien realmente tiene el perfil de comprador.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">💰 Retorno de Inversión</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Definimos metas claras. No solo buscamos "likes", buscamos conversiones, visibilidad real y retorno de inversión entre un 500% a 600% en adelante (ROI).</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">⚡ Optimización Activa</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Tu inversión no se queda estática. Monitoreamos y ajustamos las piezas en tiempo real para maximizar el rendimiento del presupuesto.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">📊 Data & Analytics</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Recibes reportes claros sobre el rendimiento. Traducimos los números complejos en decisiones estratégicas para tu negocio.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">📈 Dominio de KPIs</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Medimos lo que importa (Costo por adquisición, clics, conversiones) para garantizar que la estrategia sea saludable y escalable.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🎨 Diseño de Creativos</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Creamos tus piezas gráficas diseñadas específicamente para detener el "scroll" y generar el clic de compra.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🎬 Guiones de Video con Punch</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Te entregamos la estructura exacta de lo que debes decir en video para conectar y vender. Tú grabas la esencia de tu marca, nosotros ponemos la psicología de ventas.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">🔓 Transparencia Total</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">El control es tuyo. Tienes acceso 24/7 a tu cuenta publicitaria y a la facturación directa de Meta, sin letras chiquitas ni intermediarios.</p>
                </div>
                <div class="benefit-card" style="background: #fff; padding: 28px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); border-left: 4px solid #ff4f22;">
                    <h3 style="color: #ff4f22; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">💵 Presupuesto Sugerido</h3>
                    <p style="color: #4b5563; line-height: 1.7; margin: 0;">Para ver resultados sólidos, recomendamos una inversión inicial de $15-$17 USD/día en ventas y $5-$8 USD/día en posicionamiento. Es el combustible necesario para que el algoritmo trabaje a tu favor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESO -->
    <section class="dacriz-section" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 style="font-size: 2rem;">Cómo trabajamos tus campañas</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Proceso optimizado para máxima rentabilidad</p>
            </div>
            <div class="process-simple">
                <div class="process-simple-step">
                    <div class="step-num">1</div>
                    <h4>Auditoría de Cuenta</h4>
                    <p>Analizamos tus campañas actuales, histórico y oportunidades de mejora inmediata.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">2</div>
                    <h4>Estrategia y Configuración</h4>
                    <p>Diseñamos estructura de campañas, audiencias, palabras clave y creatividades.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">3</div>
                    <h4>Lanzamiento y Testing</h4>
                    <p>Activamos campañas y probamos diferentes variaciones para encontrar ganadores.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">4</div>
                    <h4>Optimización Diaria</h4>
                    <p>Ajustamos pujas, pausamos lo que no funciona y escalamos lo que sí genera resultados.</p>
                </div>
                <div class="process-simple-step">
                    <div class="step-num">5</div>
                    <h4>Reportes y Escalado</h4>
                    <p>Informes semanales con métricas clave y plan de escalamiento rentable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="dacriz-section" id="faq" aria-labelledby="faq-ads-title" style="padding: 50px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2 id="faq-ads-title" style="font-size: 2rem;">Preguntas frecuentes sobre Google Ads y Meta Ads</h2>
                <p style="font-size: 1.05rem; color: #6d7175;">Resolvemos tus dudas más comunes</p>
            </div>
            <div class="faq-grid" style="display: grid; gap: 20px; max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿En cuánto tiempo veo resultados con publicidad digital?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Los primeros resultados se ven en 24-48 horas una vez activadas las campañas. En 2-4 semanas ya tenemos datos suficientes para optimizar y mejorar el rendimiento significativamente.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿El servicio incluye la inversión publicitaria?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No. Nuestro servicio es la gestión y optimización de campañas. La inversión publicitaria (presupuesto de medios) se paga directamente a Google o Meta y es independiente de nuestra tarifa de gestión.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Cuánto presupuesto necesito para empezar?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Recomendamos mínimo $500-$1000 USD mensuales para tener datos suficientes y optimizar. Con presupuestos menores es difícil generar volumen de conversiones para tomar decisiones.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Mantengo acceso a mis cuentas de Google Ads y Facebook?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, siempre. Trabajamos con total transparencia. Tú mantienes propiedad y acceso completo a tus cuentas publicitarias. Nosotros trabajamos como administradores.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Qué métricas reportan?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Reportamos semanalmente: inversión, impresiones, clics, CTR, CPC, conversiones, costo por conversión, ROAS y recomendaciones de optimización. Todo en un dashboard claro y fácil de entender.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Garantizan resultados específicos?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">No garantizamos números específicos porque depende de muchos factores (industria, competencia, presupuesto, producto). Garantizamos trabajo profesional, optimización continua y mejora constante del rendimiento.</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Trabajan con todas las industrias?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Trabajamos con la mayoría de industrias: e-commerce, servicios profesionales, educación, salud, tecnología, etc. No trabajamos con industrias prohibidas por Google/Meta (apuestas, criptomonedas sin licencia, etc.).</p>
                </div>
                <div class="faq-item" style="background: #fff; border: 1px solid var(--dacriz-border); border-radius: 12px; padding: 24px; box-shadow: var(--dacriz-shadow);">
                    <h3 style="color: var(--dacriz-text-primary); font-size: 1.15rem; margin-bottom: 12px;">¿Puedo cancelar el servicio cuando quiera?</h3>
                    <p style="color: var(--dacriz-text-secondary); margin: 0; line-height: 1.6;">Sí, no hay permanencia obligatoria. Recomendamos mínimo 3 meses para ver resultados sólidos, pero puedes cancelar cuando lo necesites con aviso previo de 30 días.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para generar más leads y ventas con publicidad digital?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Solicita una auditoría gratuita de tus campañas y descubre cómo reducir costos y aumentar conversiones.</p>
            <div class="cta-benefits" style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px; flex-wrap: wrap; color: rgba(255,255,255,0.95);">
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Auditoría gratuita</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Plan de optimización</span>
                <span style="display: flex; align-items: center; gap: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sin compromiso</span>
            </div>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/?servicio=ads" class="btn-primary btn-white">Solicitar auditoría de Ads gratis</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, quiero una auditoría gratuita de mis campañas de publicidad'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<script>
function toggleDetails(button) {
    const card = button.closest('.home-service-card');
    const details = card.querySelector('.package-details');
    const btnText = button.querySelector('.btn-text');
    const btnIcon = button.querySelector('.btn-icon');
    
    if (details.style.display === 'none' || details.style.display === '') {
        details.style.display = 'block';
        btnText.textContent = 'Ocultar detalles';
        btnIcon.style.transform = 'rotate(180deg)';
        button.style.background = '#ff4f22';
        button.style.color = '#fff';
    } else {
        details.style.display = 'none';
        btnText.textContent = 'Ver todo lo que incluye';
        btnIcon.style.transform = 'rotate(0deg)';
        button.style.background = 'transparent';
        button.style.color = '#ff4f22';
    }
}

// Agregar efecto hover a los botones
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.toggle-details-btn');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            if (this.style.background === 'transparent' || this.style.background === '') {
                this.style.background = 'rgba(255,79,34, 0.1)';
            }
        });
        button.addEventListener('mouseleave', function() {
            const details = this.closest('.home-service-card').querySelector('.package-details');
            if (details.style.display === 'none' || details.style.display === '') {
                this.style.background = 'transparent';
            }
        });
    });
});
</script>

<?php get_footer();
