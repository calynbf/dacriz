<?php
/**
 * Template Name: Portfolio
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

    <!-- HERO -->
    <section class="dacriz-hero" style="padding: 60px 0;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 0;">
                <h1 style="color: #fff;">Nuestro Portfolio</h1>
                <p style="color: rgba(255,255,255,0.9); max-width: 700px; margin: 0 auto;">Proyectos reales que han transformado negocios. Desde sitios web hasta campañas publicitarias, cada proyecto cuenta una historia de éxito.</p>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO CON TABS -->
    <section class="dacriz-section" style="padding: 60px 0;">
        <div class="container">
            
            <?php
            // Obtener todas las categorías de portfolio
            $categories = get_terms(array(
                'taxonomy' => 'portfolio_category',
                'hide_empty' => true,
            ));
            
            if (!empty($categories) && !is_wp_error($categories)) :
            ?>
            
            <!-- Tabs de Categorías -->
            <div class="portfolio-tabs" role="tablist">
                <button class="portfolio-tab active" data-category="all" role="tab" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    Todos los Proyectos
                </button>
                <?php foreach ($categories as $category) : ?>
                <button class="portfolio-tab" data-category="<?php echo esc_attr($category->slug); ?>" role="tab" aria-selected="false">
                    <?php
                    // Iconos por categoría
                    $icons = array(
                        'web-tech' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
                        'seo' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path></svg>',
                        'ads' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path></svg>',
                        'diseno-grafico' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M12 1v6m0 6v6m5.2-13.2-4.2 4.2m0 6 4.2 4.2M23 12h-6m-6 0H1m18.2 5.2-4.2-4.2m0-6 4.2-4.2"></path></svg>',
                        'diseno-e-impresion' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>',
                        'growth-ia' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>',
                        'paneles-publicitarios' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
                    );
                    echo isset($icons[$category->slug]) ? $icons[$category->slug] : '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle></svg>';
                    ?>
                    <?php echo esc_html($category->name); ?>
                </button>
                <?php endforeach; ?>
            </div>
            
            <?php endif; ?>
            
            <!-- Grid de Proyectos -->
            <div class="portfolio-grid" id="portfolio-grid">
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                
                $portfolio_query = new WP_Query($args);
                
                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                        
                        // Obtener categorías del proyecto
                        $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                        $categories_slugs = array();
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                $categories_slugs[] = $term->slug;
                            }
                        }
                        $categories_attr = implode(' ', $categories_slugs);
                        
                        // Obtener meta data
                        $cliente = get_post_meta(get_the_ID(), '_portfolio_cliente', true);
                        $fecha = get_post_meta(get_the_ID(), '_portfolio_fecha', true);
                        $url = get_post_meta(get_the_ID(), '_portfolio_url', true);
                        $tecnologias = get_post_meta(get_the_ID(), '_portfolio_tecnologias', true);
                        $galeria = get_post_meta(get_the_ID(), '_portfolio_galeria', true);
                        
                        ?>
                        <article class="portfolio-item" data-categories="<?php echo esc_attr($categories_attr); ?>">
                            <div class="portfolio-card">
                                <?php if (has_post_thumbnail()) : ?>
                                <div class="portfolio-image">
                                    <?php the_post_thumbnail('large'); ?>
                                    <div class="portfolio-overlay">
                                        <button class="portfolio-view-btn" data-project-id="<?php echo get_the_ID(); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            Ver Proyecto
                                        </button>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <div class="portfolio-content">
                                    <?php if ($terms && !is_wp_error($terms)) : ?>
                                    <div class="portfolio-categories">
                                        <?php foreach ($terms as $term) : ?>
                                        <span class="portfolio-category-badge"><?php echo esc_html($term->name); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <h3><?php the_title(); ?></h3>
                                    
                                    <?php if ($cliente) : ?>
                                    <p class="portfolio-client">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <?php echo esc_html($cliente); ?>
                                    </p>
                                    <?php endif; ?>
                                    
                                    <?php if ($fecha) : ?>
                                    <p class="portfolio-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <?php echo esc_html($fecha); ?>
                                    </p>
                                    <?php endif; ?>
                                    
                                    <div class="portfolio-excerpt">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </div>
                                    
                                    <!-- Data oculta para el modal -->
                                    <div class="portfolio-hidden-data" style="display: none;">
                                        <div class="portfolio-full-description"><?php the_content(); ?></div>
                                        <?php if ($tecnologias) : ?>
                                        <div class="portfolio-tech"><?php echo esc_html($tecnologias); ?></div>
                                        <?php endif; ?>
                                        <?php if ($url) : ?>
                                        <div class="portfolio-url"><?php echo esc_url($url); ?></div>
                                        <?php endif; ?>
                                        <?php if ($galeria) : ?>
                                        <div class="portfolio-gallery-ids"><?php echo esc_attr($galeria); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="portfolio-empty" style="text-align: center; padding: 60px 20px; grid-column: 1 / -1;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" style="margin: 0 auto 20px;"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        <h3 style="color: #666; margin-bottom: 10px;">Aún no hay proyectos</h3>
                        <p style="color: #999;">Pronto agregaremos nuestros trabajos más destacados.</p>
                    </div>
                    <?php
                endif;
                ?>
            </div>
            
        </div>
    </section>
    
    <!-- CTA -->
    <section class="dacriz-cta" style="padding: 60px 0;">
        <div class="container">
            <h2 style="font-size: 2.2rem; margin-bottom: 16px;">¿Listo para ser nuestro próximo caso de éxito?</h2>
            <p style="font-size: 1.15rem; margin-bottom: 32px;">Trabajemos juntos para llevar tu negocio al siguiente nivel</p>
            <div class="btn-group" style="gap: 16px;">
                <a href="/contacto/" class="btn-primary btn-white">Solicitar Cotización</a>
                <?php if (!empty($whatsapp)) : ?>
                    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo urlencode('Hola, vi su portfolio y me gustaría trabajar con ustedes'); ?>" class="btn-primary" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);" target="_blank" rel="noopener">Escribir por WhatsApp</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<!-- Modal de Proyecto -->
<div id="portfolio-modal" class="portfolio-modal" style="display: none;">
    <div class="portfolio-modal-overlay"></div>
    <div class="portfolio-modal-content">
        <button class="portfolio-modal-close">&times;</button>
        <div class="portfolio-modal-body">
            <!-- Contenido dinámico del proyecto -->
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sistema de Tabs
    const tabs = document.querySelectorAll('.portfolio-tab');
    const items = document.querySelectorAll('.portfolio-item');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Actualizar tabs activos
            tabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            
            // Filtrar proyectos
            items.forEach(item => {
                if (category === 'all') {
                    item.style.display = 'block';
                    setTimeout(() => item.classList.add('visible'), 10);
                } else {
                    const categories = item.getAttribute('data-categories');
                    if (categories && categories.includes(category)) {
                        item.style.display = 'block';
                        setTimeout(() => item.classList.add('visible'), 10);
                    } else {
                        item.classList.remove('visible');
                        setTimeout(() => item.style.display = 'none', 300);
                    }
                }
            });
        });
    });
    
    // Mostrar todos inicialmente
    setTimeout(() => {
        items.forEach(item => item.classList.add('visible'));
    }, 100);
    
    // Modal de Proyecto
    const modal = document.getElementById('portfolio-modal');
    const modalBody = modal.querySelector('.portfolio-modal-body');
    const closeBtn = modal.querySelector('.portfolio-modal-close');
    const overlay = modal.querySelector('.portfolio-modal-overlay');
    
    // Abrir modal
    document.querySelectorAll('.portfolio-view-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const card = this.closest('.portfolio-card');
            const title = card.querySelector('h3').textContent;
            const image = card.querySelector('.portfolio-image img')?.src || '';
            const categories = Array.from(card.querySelectorAll('.portfolio-category-badge')).map(b => b.textContent);
            const client = card.querySelector('.portfolio-client')?.textContent.trim() || '';
            const date = card.querySelector('.portfolio-date')?.textContent.trim() || '';
            const excerpt = card.querySelector('.portfolio-excerpt')?.textContent || '';
            
            // Datos ocultos
            const hiddenData = card.querySelector('.portfolio-hidden-data');
            const fullDesc = hiddenData?.querySelector('.portfolio-full-description')?.innerHTML || excerpt;
            const tech = hiddenData?.querySelector('.portfolio-tech')?.textContent || '';
            const url = hiddenData?.querySelector('.portfolio-url')?.textContent || '';
            const galleryIds = hiddenData?.querySelector('.portfolio-gallery-ids')?.textContent || '';
            
            // Construir contenido del modal
            let modalContent = `
                <div class="modal-header">
                    <div class="modal-categories">
                        ${categories.map(cat => `<span class="portfolio-category-badge">${cat}</span>`).join('')}
                    </div>
                    <h2>${title}</h2>
                    <div class="modal-meta">
                        ${client ? `<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> ${client}</span>` : ''}
                        ${date ? `<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> ${date}</span>` : ''}
                    </div>
                </div>
                ${image ? `<div class="modal-image"><img src="${image}" alt="${title}" /></div>` : ''}
                <div class="modal-description">${fullDesc}</div>
                ${tech ? `<div class="modal-tech"><h4>Tecnologías / Servicios:</h4><p>${tech}</p></div>` : ''}
                ${url ? `<div class="modal-link"><a href="${url}" target="_blank" rel="noopener" class="btn-primary">Ver Proyecto en Vivo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg></a></div>` : ''}
            `;
            
            modalBody.innerHTML = modalContent;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Cerrar modal
    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }
    
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'flex') {
            closeModal();
        }
    });
});
</script>

<?php
get_footer();
