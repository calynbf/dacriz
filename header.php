<?php
/**
 * Cabecera principal DACRIZ, adaptada del sistema visual Conbiz.
 *
 * @package DACRIZ
 */
if (!defined('ABSPATH')) { exit; }
$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Saltar al contenido', 'dacriz'); ?></a>
    <header id="masthead" class="conbiz-header" role="banner">
        <div class="conbiz-header__brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Dacriz - Inicio">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/branding/dacriz-logo-header-v2.png'); ?>" alt="Dacriz" width="640" height="240">
            </a>
        </div>
        <div class="conbiz-header__main">
            <nav class="conbiz-nav" aria-label="<?php esc_attr_e('Menú principal', 'dacriz'); ?>">
                <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'conbiz-menu','fallback_cb'=>'wp_page_menu','depth'=>3)); ?>
            </nav>
            <button class="conbiz-menu-toggle" type="button" aria-expanded="false" aria-controls="conbiz-mobile-menu" aria-label="<?php esc_attr_e('Abrir menú', 'dacriz'); ?>">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="conbiz-header__contact">
            <span class="conbiz-contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.12.9.33 1.78.62 2.63a2 2 0 01-.45 2.11L8 9.73a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0122 16.92z"/></svg>
            </span>
            <span><small>Conversemos</small><?php if ($whatsapp) : ?><a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener">+<?php echo esc_html($whatsapp); ?></a><?php else : ?><a href="<?php echo esc_url(home_url('/contacto/')); ?>">Solicitar asesoría</a><?php endif; ?></span>
        </div>
        <div id="conbiz-mobile-menu" class="conbiz-mobile-panel" aria-hidden="true">
            <button class="conbiz-menu-close" type="button" aria-label="<?php esc_attr_e('Cerrar menú', 'dacriz'); ?>">×</button>
            <a class="conbiz-mobile-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/branding/dacriz-logo-light-v2.png'); ?>" alt="Dacriz" width="640" height="240"></a>
            <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'conbiz-mobile-nav','fallback_cb'=>'wp_page_menu','depth'=>3)); ?>
            <a class="conbiz-mobile-cta" href="<?php echo esc_url(home_url('/contacto/')); ?>">Solicitar diagnóstico <span>→</span></a>
        </div>
        <div class="conbiz-mobile-overlay" aria-hidden="true"></div>
    </header>
