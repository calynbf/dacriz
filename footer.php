<?php
/**
 * Footer Template
 * 
 * @package DACRIZ
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
$facebook = get_theme_mod('dacriz_facebook', '');
$instagram = get_theme_mod('dacriz_instagram', '');
$linkedin = get_theme_mod('dacriz_linkedin', '');
$tiktok = get_theme_mod('dacriz_tiktok', '');
?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-widgets">
                <div class="footer-row">
                    
                    <!-- Columna 1: Logo y descripción -->
                    <div class="footer-col">
                        <div class="footer-logo">
                            <?php if (has_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <h3 style="color: #fff; margin-bottom: 15px;">DACRIZ</h3>
                            <?php endif; ?>
                        </div>
                        <p style="color: #9CA3AF; margin-bottom: 20px;">
                            Desarrollo web, comercio electrónico y automatización para convertir ideas en negocios digitales sólidos.
                        </p>
                        <!-- Redes Sociales -->
                        <div class="footer-social">
                            <?php if (!empty($facebook)) : ?>
                            <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($instagram)) : ?>
                            <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($linkedin)) : ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (!empty($tiktok)) : ?>
                            <a href="<?php echo esc_url($tiktok); ?>" target="_blank" rel="noopener" aria-label="TikTok">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Columna 2: Servicios Digitales -->
                    <div class="footer-col">
                        <h4>Servicios Digitales</h4>
                        <ul>
                            <li><a href="<?php echo home_url('/servicios/seo/'); ?>">SEO</a></li>
                            <li><a href="<?php echo home_url('/servicios/ads/'); ?>">Ads</a></li>
                            <li><a href="<?php echo home_url('/servicios/web-tech/'); ?>">Web &amp; Tech</a></li>
                            <li><a href="<?php echo home_url('/servicios/growth-ia/'); ?>">Growth / IA</a></li>
                        </ul>
                    </div>
                    
                    <!-- Columna 2b: Diseño e Impresión -->
                    <div class="footer-col">
                        <h4>Diseño e Impresión</h4>
                        <ul>
                            <li><a href="<?php echo home_url('/servicios/diseno-grafico/'); ?>">Diseño Gráfico</a></li>
                            <li><a href="<?php echo home_url('/servicios/diseno-impresion/'); ?>">Diseño e Impresión</a></li>
                            <li><a href="<?php echo home_url('/servicios/paneles-publicitarios/'); ?>">Paneles Publicitarios</a></li>
                            <li><a href="<?php echo home_url('/servicios/'); ?>">Ver todos</a></li>
                        </ul>
                    </div>
                    
                    <!-- Columna 3: Enlaces -->
                    <div class="footer-col">
                        <h4>Empresa</h4>
                        <ul>
                            <li><a href="<?php echo home_url('/nosotros/'); ?>">Nosotros</a></li>
                            <li><a href="<?php echo home_url('/portafolio/'); ?>">Portafolio</a></li>
                            <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>
                            <li><a href="<?php echo home_url('/contacto/'); ?>">Contacto</a></li>
                        </ul>
                    </div>
                    
                    <!-- Columna 4: Contacto -->
                    <div class="footer-col">
                        <h4>Contacto</h4>
                        <ul class="contact-info">
                            <?php if (!empty($whatsapp)) : ?>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 448 512" fill="#25D366"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157z"/></svg>
                                <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank">+<?php echo esc_html($whatsapp); ?></a>
                            </li>
                            <?php endif; ?>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <a href="mailto:contacto@dacriz.com">contacto@dacriz.com</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Perú</span>
                            </li>
                        </ul>
                        
                        <!-- Libro de Reclamaciones -->
                        <div class="libro-reclamaciones-inline" style="margin-top: 24px;">
                            <a href="<?php echo home_url('/libro-de-reclamaciones/'); ?>" class="libro-link" aria-label="Libro de Reclamaciones">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/libro_de_reclamaciones.jpg" alt="Libro de Reclamaciones" width="100" height="100">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> DACRIZ - Multiservicios y Soluciones Digitales DACRIS E.I.R.L. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="<?php echo home_url('/politica-de-privacidad/'); ?>">Política de Privacidad</a>
                    <span>|</span>
                    <a href="<?php echo home_url('/terminos-y-condiciones/'); ?>">Términos y Condiciones</a>
                    <span>|</span>
                    <a href="<?php echo home_url('/libro-de-reclamaciones/'); ?>">Libro de Reclamaciones</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<style>
    .site-footer {
        background-color: #111827;
        color: #fff;
        padding: 60px 0 0;
    }
    
    .footer-row {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .footer-col {
        flex: 1;
        min-width: 200px;
    }
    
    .footer-col:first-child {
        flex: 1.5;
        min-width: 280px;
    }
    
    .footer-col h4 {
        color: #fff;
        font-size: 1.1rem;
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-col ul li {
        margin-bottom: 12px;
    }
    
    .footer-col ul li a,
    .footer-col ul li span {
        color: #9CA3AF;
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .footer-col ul li a:hover {
        color: #3B82F6;
    }
    
    .contact-info li {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .contact-info li svg {
        flex-shrink: 0;
    }
    
    .footer-social {
        display: flex;
        gap: 12px;
    }
    
    .footer-social a {
        width: 40px;
        height: 40px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9CA3AF;
        transition: all 0.3s;
    }
    
    .footer-social a:hover {
        background: #2563EB;
        color: #fff;
    }
    
    .footer-bottom {
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 25px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .footer-bottom p {
        color: #6B7280;
        margin: 0;
        font-size: 0.9rem;
    }
    
    .footer-links {
        display: flex;
        gap: 15px;
        font-size: 0.9rem;
    }
    
    .footer-links a {
        color: #6B7280;
        text-decoration: none;
    }
    
    .footer-links a:hover {
        color: #3B82F6;
    }
    
    .footer-links span {
        color: #4B5563;
    }
    
    .libro-reclamaciones-inline .libro-link {
        display: inline-block;
        transition: transform 0.3s, opacity 0.3s;
    }
    
    .libro-reclamaciones-inline .libro-link:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }
    
    .libro-reclamaciones-inline img {
        max-width: 100px;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
    }
    
    @media (max-width: 768px) {
        .footer-row {
            flex-direction: column;
            gap: 30px;
        }
        
        .footer-col {
            min-width: 100%;
        }
        
        .footer-bottom {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<?php wp_footer(); ?>

</body>
</html>
