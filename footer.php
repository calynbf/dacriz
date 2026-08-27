<?php
/** Footer DACRIZ inspirado en Conbiz. @package DACRIZ */
if (!defined('ABSPATH')) { exit; }
$whatsapp = get_theme_mod('dacriz_whatsapp_number', '');
$facebook = get_theme_mod('dacriz_facebook', '');
$instagram = get_theme_mod('dacriz_instagram', '');
$linkedin = get_theme_mod('dacriz_linkedin', '');
?>
<section class="conbiz-footer-bridge" aria-label="Próximo paso">
 <div class="container">
  <a href="<?php echo esc_url(home_url('/contacto/')); ?>"><span class="bridge-icon">✦</span><span><small>¿Tienes un proyecto?</small><strong>Convirtamos tu idea en una solución digital</strong></span><b>→</b></a>
  <a href="<?php echo esc_url(home_url('/portafolio/')); ?>"><span class="bridge-icon">◎</span><span><small>Experiencia comprobada</small><strong>Conoce algunos de nuestros proyectos</strong></span><b>→</b></a>
 </div>
</section>
<footer id="colophon" class="conbiz-footer">
 <div class="conbiz-footer__texture" aria-hidden="true"></div>
 <div class="container">
  <div class="conbiz-footer__grid">
   <div class="conbiz-footer__intro">
    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/branding/dacriz-logo-light.png'); ?>" alt="Dacriz" width="640" height="240">
    <p>Desarrollo web, comercio electrónico y automatización para convertir ideas en negocios digitales sólidos.</p>
    <div class="conbiz-footer__social">
     <?php if ($facebook) : ?><a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener" aria-label="Facebook">f</a><?php endif; ?>
     <?php if ($instagram) : ?><a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener" aria-label="Instagram">ig</a><?php endif; ?>
     <?php if ($linkedin) : ?><a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">in</a><?php endif; ?>
    </div>
   </div>
   <div><h3>Servicios</h3><ul><li><a href="<?php echo esc_url(home_url('/servicios/web-tech/')); ?>">Desarrollo web</a></li><li><a href="<?php echo esc_url(home_url('/servicios/growth-ia/')); ?>">Automatización e IA</a></li><li><a href="<?php echo esc_url(home_url('/servicios/seo/')); ?>">Posicionamiento SEO</a></li><li><a href="<?php echo esc_url(home_url('/servicios/ads/')); ?>">Publicidad digital</a></li></ul></div>
   <div><h3>Empresa</h3><ul><li><a href="<?php echo esc_url(home_url('/nosotros/')); ?>">Nosotros</a></li><li><a href="<?php echo esc_url(home_url('/portafolio/')); ?>">Portafolio</a></li><li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li><li><a href="<?php echo esc_url(home_url('/contacto/')); ?>">Contacto</a></li></ul></div>
   <div class="conbiz-footer__contact"><h3>Contacto</h3><ul><li><span>⌖</span><span>Lima, Perú<br>Atención nacional e internacional</span></li><li><span>✉</span><a href="mailto:contacto@dacriz.com">contacto@dacriz.com</a></li><?php if ($whatsapp) : ?><li><span>☎</span><a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener">+<?php echo esc_html($whatsapp); ?></a></li><?php endif; ?></ul></div>
  </div>
  <div class="conbiz-footer__bottom"><p>© <?php echo esc_html(date('Y')); ?> DACRIZ. Todos los derechos reservados.</p><nav><a href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>">Privacidad</a><a href="<?php echo esc_url(home_url('/terminos-y-condiciones/')); ?>">Términos</a><a href="<?php echo esc_url(home_url('/libro-de-reclamaciones/')); ?>">Libro de Reclamaciones</a></nav></div>
 </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
