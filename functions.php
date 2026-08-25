<?php
/**
 * DACRIZ Theme Functions
 * Tema hijo de Kadence para DACRIZ - Multiservicios y Soluciones Digitales
 *
 * @package DACRIZ
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Encolar estilos del tema padre y tema hijo
 */
function dacriz_enqueue_styles() {
    // Estilos del tema padre Kadence
    wp_enqueue_style(
        'kadence-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('kadence')->get('Version')
    );
    
    // Estilos del tema hijo DACRIZ
    wp_enqueue_style(
        'dacriz-style',
        get_stylesheet_uri(),
        array('kadence-style'),
        wp_get_theme()->get('Version')
    );
    
    // Google Fonts - Inter
    wp_enqueue_style(
        'dacriz-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Scripts personalizados
    wp_enqueue_script(
        'dacriz-scripts',
        get_stylesheet_directory_uri() . '/assets/js/scripts.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'dacriz_enqueue_styles');

/**
 * Configuración del tema
 */
function dacriz_theme_setup() {
    // Soporte para logo personalizado
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    
    // Tamaños de imagen personalizados
    add_image_size('dacriz-service', 600, 400, true);
    add_image_size('dacriz-portfolio', 800, 600, true);
    add_image_size('dacriz-testimonial', 100, 100, true);
    
    // Registrar menús de navegación
    register_nav_menus(array(
        'primary'   => __('Menú Principal', 'dacriz'),
        'footer'    => __('Menú Footer', 'dacriz'),
        'services'  => __('Menú Servicios', 'dacriz'),
    ));
}
add_action('after_setup_theme', 'dacriz_theme_setup');

/**
 * Registrar widgets
 */
function dacriz_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Columna 1', 'dacriz'),
        'id'            => 'footer-1',
        'description'   => __('Widgets para la primera columna del footer', 'dacriz'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Columna 2', 'dacriz'),
        'id'            => 'footer-2',
        'description'   => __('Widgets para la segunda columna del footer', 'dacriz'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Columna 3', 'dacriz'),
        'id'            => 'footer-3',
        'description'   => __('Widgets para la tercera columna del footer', 'dacriz'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Columna 4', 'dacriz'),
        'id'            => 'footer-4',
        'description'   => __('Widgets para la cuarta columna del footer', 'dacriz'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'dacriz_widgets_init');

/**
 * Personalizar opciones del tema
 */
function dacriz_customize_register($wp_customize) {
    // Sección de WhatsApp
    $wp_customize->add_section('dacriz_whatsapp', array(
        'title'    => __('WhatsApp Flotante', 'dacriz'),
        'priority' => 30,
    ));
    
    // Número de WhatsApp
    $wp_customize->add_setting('dacriz_whatsapp_number', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('dacriz_whatsapp_number', array(
        'label'       => __('Número de WhatsApp', 'dacriz'),
        'description' => __('Ingresa el número con código de país (ej: 51999999999)', 'dacriz'),
        'section'     => 'dacriz_whatsapp',
        'type'        => 'text',
    ));
    
    // Mensaje predeterminado de WhatsApp
    $wp_customize->add_setting('dacriz_whatsapp_message', array(
        'default'           => 'Hola, me interesa información sobre sus servicios',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('dacriz_whatsapp_message', array(
        'label'   => __('Mensaje Predeterminado', 'dacriz'),
        'section' => 'dacriz_whatsapp',
        'type'    => 'text',
    ));
    
    // Mostrar/Ocultar WhatsApp
    $wp_customize->add_setting('dacriz_whatsapp_show', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('dacriz_whatsapp_show', array(
        'label'   => __('Mostrar botón de WhatsApp', 'dacriz'),
        'section' => 'dacriz_whatsapp',
        'type'    => 'checkbox',
    ));
    
    // Sección de Redes Sociales
    $wp_customize->add_section('dacriz_social', array(
        'title'    => __('Redes Sociales', 'dacriz'),
        'priority' => 35,
    ));
    
    // Facebook
    $wp_customize->add_setting('dacriz_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('dacriz_facebook', array(
        'label'   => __('URL de Facebook', 'dacriz'),
        'section' => 'dacriz_social',
        'type'    => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('dacriz_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('dacriz_instagram', array(
        'label'   => __('URL de Instagram', 'dacriz'),
        'section' => 'dacriz_social',
        'type'    => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('dacriz_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('dacriz_linkedin', array(
        'label'   => __('URL de LinkedIn', 'dacriz'),
        'section' => 'dacriz_social',
        'type'    => 'url',
    ));
    
    // TikTok
    $wp_customize->add_setting('dacriz_tiktok', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('dacriz_tiktok', array(
        'label'   => __('URL de TikTok', 'dacriz'),
        'section' => 'dacriz_social',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'dacriz_customize_register');

/**
 * Mostrar botón flotante de WhatsApp
 */
function dacriz_whatsapp_button() {
    $show = get_theme_mod('dacriz_whatsapp_show', true);
    $number = get_theme_mod('dacriz_whatsapp_number', '');
    $message = get_theme_mod('dacriz_whatsapp_message', 'Hola, me interesa información sobre sus servicios');
    
    if ($show && !empty($number)) {
        $url = 'https://wa.me/' . $number . '?text=' . urlencode($message);
        ?>
        <a href="<?php echo esc_url($url); ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
            </svg>
        </a>
        <?php
    }
}
add_action('wp_footer', 'dacriz_whatsapp_button');

/**
 * Shortcode para mostrar servicios
 */
function dacriz_services_shortcode($atts) {
    $atts = shortcode_atts(array(
        'columns' => 3,
        'limit'   => 3,
    ), $atts);
    
    ob_start();
    ?>
    <div class="dacriz-services-grid" style="display: grid; grid-template-columns: repeat(<?php echo esc_attr($atts['columns']); ?>, 1fr); gap: 30px;">
        
        <div class="service-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
            </div>
            <h3>Diseño Web Profesional</h3>
            <p>Creamos páginas web modernas, rápidas y optimizadas para convertir visitantes en clientes.</p>
            <a href="/servicios/diseno-web/">Conocer más →</a>
        </div>
        
        <div class="service-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
            </div>
            <h3>Desarrollo y Programación</h3>
            <p>Desarrollamos sistemas web y aplicaciones a medida para automatizar los procesos de tu empresa.</p>
            <a href="/servicios/desarrollo-web/">Conocer más →</a>
        </div>
        
        <div class="service-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="20" x2="12" y2="10"></line>
                    <line x1="18" y1="20" x2="18" y2="4"></line>
                    <line x1="6" y1="20" x2="6" y2="16"></line>
                </svg>
            </div>
            <h3>Marketing Digital</h3>
            <p>Estrategias de Facebook Ads, Google Ads y SEO para atraer clientes y aumentar tus ventas.</p>
            <a href="/servicios/marketing-digital/">Conocer más →</a>
        </div>
        
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('dacriz_services', 'dacriz_services_shortcode');

/**
 * Shortcode para CTA
 */
function dacriz_cta_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title'       => '¿Listo para Llevar tu Negocio al Siguiente Nivel?',
        'subtitle'    => 'Agenda una consulta gratuita y descubre cómo podemos ayudarte',
        'button_text' => 'Contactar Ahora',
        'button_url'  => '/contacto/',
        'whatsapp'    => '',
    ), $atts);
    
    ob_start();
    ?>
    <section class="dacriz-cta">
        <div class="container">
            <h2><?php echo esc_html($atts['title']); ?></h2>
            <p><?php echo esc_html($atts['subtitle']); ?></p>
            <div class="btn-group">
                <a href="<?php echo esc_url($atts['button_url']); ?>" class="btn-primary btn-white"><?php echo esc_html($atts['button_text']); ?></a>
                <?php if (!empty($atts['whatsapp'])) : ?>
                <a href="https://wa.me/<?php echo esc_attr($atts['whatsapp']); ?>" class="btn-primary" target="_blank">WhatsApp Directo</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('dacriz_cta', 'dacriz_cta_shortcode');

/**
 * Shortcode para proceso de trabajo
 */
function dacriz_process_shortcode($atts) {
    ob_start();
    ?>
    <div class="process-steps">
        <div class="process-step">
            <div class="number">1</div>
            <h4>Consulta Gratuita</h4>
            <p>Analizamos tu negocio, objetivos y competencia para crear una estrategia personalizada.</p>
        </div>
        <div class="process-step">
            <div class="number">2</div>
            <h4>Propuesta y Planificación</h4>
            <p>Te presentamos un plan detallado con tiempos, costos y entregables claros.</p>
        </div>
        <div class="process-step">
            <div class="number">3</div>
            <h4>Diseño y Desarrollo</h4>
            <p>Creamos tu solución digital con revisiones constantes para asegurar tu satisfacción.</p>
        </div>
        <div class="process-step">
            <div class="number">4</div>
            <h4>Lanzamiento</h4>
            <p>Publicamos tu proyecto y lo optimizamos continuamente para mejores resultados.</p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('dacriz_process', 'dacriz_process_shortcode');

/**
 * Shortcode para características/beneficios
 */
function dacriz_features_shortcode($atts) {
    $atts = shortcode_atts(array(
        'items' => 'Resultados Medibles|Atención Personalizada|Precios Competitivos|Soporte Continuo|Experiencia Comprobada',
    ), $atts);
    
    $items = explode('|', $atts['items']);
    
    ob_start();
    ?>
    <div class="dacriz-features">
        <?php foreach ($items as $item) : ?>
        <div class="feature-item">
            <div class="check">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <div>
                <h4><?php echo esc_html(trim($item)); ?></h4>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('dacriz_features', 'dacriz_features_shortcode');

/**
 * Agregar clases al body
 */
function dacriz_body_classes($classes) {
    $classes[] = 'dacriz-theme';
    
    if (is_front_page()) {
        $classes[] = 'dacriz-home';
    }

    $page_template = get_page_template_slug();
    if ($page_template && 0 === strpos($page_template, 'page-templates/template-')) {
        $template_name = basename($page_template, '.php');
        $classes[] = 'dacriz-inner-premium';
        $classes[] = sanitize_html_class('dacriz-' . str_replace('template-', '', $template_name));
    }
    
    return $classes;
}
add_filter('body_class', 'dacriz_body_classes');

/**
 * Modificar el excerpt
 */
function dacriz_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'dacriz_excerpt_length');

function dacriz_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'dacriz_excerpt_more');

/**
 * Eliminar template de Herramientas del selector de páginas
 */
function dacriz_remove_tools_page_template($templates) {
    if (isset($templates['page-templates/template-herramientas.php'])) {
        unset($templates['page-templates/template-herramientas.php']);
    }

    return $templates;
}
add_filter('theme_page_templates', 'dacriz_remove_tools_page_template');

/**
 * Redirigir URLs de herramientas al inicio
 */
function dacriz_disable_tools_routes() {
    if (is_admin()) {
        return;
    }

    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';

    if (!empty($request_uri) && strpos($request_uri, '/herramientas') !== false) {
        wp_safe_redirect(home_url('/'), 301);
        exit;
    }
}
add_action('template_redirect', 'dacriz_disable_tools_routes', 1);

/**
 * Redirigir rutas antiguas de servicios a la nueva estructura de 4 páginas
 */
function dacriz_redirect_legacy_service_routes() {
    if (is_admin()) {
        return;
    }

    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    if (empty($request_uri)) {
        return;
    }

    $path = wp_parse_url(home_url($request_uri), PHP_URL_PATH);
    if (empty($path)) {
        return;
    }

    $legacy_map = array(
        '/servicios/marketing-digital/' => '/servicios/ads/',
        '/servicios/diseno-web/'        => '/servicios/web-tech/',
        '/servicios/desarrollo-web/'    => '/servicios/web-tech/',
    );

    if (isset($legacy_map[$path])) {
        wp_safe_redirect(home_url($legacy_map[$path]), 301);
        exit;
    }
}
add_action('template_redirect', 'dacriz_redirect_legacy_service_routes', 2);

/**
 * Datos estructurados SEO para la Home
 */
function dacriz_home_structured_data() {
    if (!is_front_page()) {
        return;
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@graph'   => array(
            array(
                '@type' => 'Organization',
                'name'  => get_bloginfo('name'),
                'url'   => home_url('/'),
                'logo'  => get_theme_mod('custom_logo') ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') : '',
                'sameAs' => array_filter(array(
                    get_theme_mod('dacriz_facebook', ''),
                    get_theme_mod('dacriz_linkedin', ''),
                    get_theme_mod('dacriz_instagram', ''),
                    get_theme_mod('dacriz_tiktok', ''),
                )),
            ),
            array(
                '@type' => 'FAQPage',
                'mainEntity' => array(
                    array(
                        '@type' => 'Question',
                        'name' => '¿Cuánto tiempo toma ver resultados en campañas digitales?',
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text' => 'En paid media se ven señales entre 2 y 6 semanas; en SEO, entre 3 y 6 meses para resultados consistentes.',
                        ),
                    ),
                    array(
                        '@type' => 'Question',
                        'name' => '¿Qué conviene más: SEO o Google Ads?',
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text' => 'Ambos. Google Ads genera demanda inmediata y SEO consolida crecimiento sostenible de largo plazo.',
                        ),
                    ),
                    array(
                        '@type' => 'Question',
                        'name' => '¿Trabajan con empresas de Lima y provincias?',
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text' => 'Sí. Trabajamos con negocios de todo Perú mediante reuniones virtuales y reportes semanales.',
                        ),
                    ),
                ),
            ),
        ),
    );
    ?>
    <script type="application/ld+json"><?php echo wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php
}
add_action('wp_head', 'dacriz_home_structured_data', 30);

/**
 * Deshabilitar emojis de WordPress para mejor rendimiento
 */
function dacriz_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'dacriz_disable_emojis');

/**
 * Agregar defer a scripts para mejor rendimiento
 */
function dacriz_defer_scripts($tag, $handle, $src) {
    $defer_scripts = array('dacriz-scripts');
    
    if (in_array($handle, $defer_scripts)) {
        return '<script src="' . $src . '" defer></script>' . "\n";
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'dacriz_defer_scripts', 10, 3);
