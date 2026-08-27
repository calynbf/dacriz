<?php
/**
 * Template Name: Libro de Reclamaciones
 * 
 * @package DACRIZ
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero -->
    <section class="service-hero" style="background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%); padding: 60px 0;">
        <div class="container">
            <div class="hero-content" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <span class="service-badge" style="display: inline-block; background: rgba(255,255,255,0.2); color: #fff; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">Atención al Cliente</span>
                <h1 style="color: #fff; font-size: 2.5rem; margin-bottom: 20px; line-height: 1.2;">Libro de Reclamaciones</h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.15rem; margin-bottom: 32px; line-height: 1.6;">Conforme a lo establecido en el Código de Protección y Defensa del Consumidor</p>
            </div>
        </div>
    </section>

    <?php if (isset($_GET['libro_enviado']) && $_GET['libro_enviado'] === 'true') : ?>
    <!-- Mensaje de Confirmación -->
    <section class="dacriz-section" style="padding: 60px 0;">
        <div class="container">
            <div class="confirmacion-box" style="max-width: 700px; margin: 0 auto; background: #dcfce7; border: 2px solid #16a34a; border-radius: 12px; padding: 40px; text-align: center;">
                <div style="font-size: 4rem; margin-bottom: 20px;">✅</div>
                <h2 style="color: #166534; margin-bottom: 16px;">Reclamo Registrado Exitosamente</h2>
                <p style="color: #15803d; font-size: 1.1rem; margin-bottom: 24px;">Su reclamo ha sido registrado en nuestro Libro de Reclamaciones.</p>
                <div style="background: white; padding: 20px; border-radius: 8px; margin-bottom: 24px;">
                    <p style="margin: 0; color: #166534;"><strong>Número de Hoja:</strong></p>
                    <p style="font-size: 1.5rem; font-weight: 700; color: #16a34a; margin: 8px 0;"><?php echo esc_html($_GET['numero_hoja']); ?></p>
                </div>
                <p style="color: #15803d; margin-bottom: 24px;">Hemos enviado una copia de su reclamo al correo electrónico proporcionado. Recibirá una respuesta en un plazo máximo de <strong>30 días calendario</strong>.</p>
                <a href="<?php echo home_url('/'); ?>" class="btn-primary" style="background: #16a34a;">Volver al inicio</a>
            </div>
        </div>
    </section>
    <?php else : ?>

    <!-- Información Importante -->
    <section class="dacriz-section dacriz-section-light" style="padding: 50px 0;">
        <div class="container">
            <div class="info-importante" style="max-width: 900px; margin: 0 auto;">
                <h2 style="font-size: 1.75rem; margin-bottom: 24px; text-align: center;">Información Importante</h2>
                <div class="row" style="gap: 20px;">
                    <div class="col" style="flex: 0 0 calc(33.333% - 14px);">
                        <div class="info-card" style="background: #fff; padding: 24px; border-radius: 12px; box-shadow: var(--dacriz-shadow); text-align: center;">
                            <div style="font-size: 2.5rem; margin-bottom: 12px;">📋</div>
                            <h4 style="color: var(--dacriz-text-primary); margin-bottom: 8px;">Registro Oficial</h4>
                            <p style="color: var(--dacriz-text-secondary); margin: 0; font-size: 0.95rem;">Conforme al Código de Protección al Consumidor</p>
                        </div>
                    </div>
                    <div class="col" style="flex: 0 0 calc(33.333% - 14px);">
                        <div class="info-card" style="background: #fff; padding: 24px; border-radius: 12px; box-shadow: var(--dacriz-shadow); text-align: center;">
                            <div style="font-size: 2.5rem; margin-bottom: 12px;">⏰</div>
                            <h4 style="color: var(--dacriz-text-primary); margin-bottom: 8px;">30 Días</h4>
                            <p style="color: var(--dacriz-text-secondary); margin: 0; font-size: 0.95rem;">Plazo máximo de respuesta</p>
                        </div>
                    </div>
                    <div class="col" style="flex: 0 0 calc(33.333% - 14px);">
                        <div class="info-card" style="background: #fff; padding: 24px; border-radius: 12px; box-shadow: var(--dacriz-shadow); text-align: center;">
                            <div style="font-size: 2.5rem; margin-bottom: 12px;">📧</div>
                            <h4 style="color: var(--dacriz-text-primary); margin-bottom: 8px;">Confirmación</h4>
                            <p style="color: var(--dacriz-text-secondary); margin: 0; font-size: 0.95rem;">Recibirá copia por email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Reclamación -->
    <section class="dacriz-section" style="padding: 50px 0; background: #fff;">
        <div class="container">
            <div class="formulario-libro" style="max-width: 800px; margin: 0 auto;">
                <h2 style="font-size: 1.75rem; margin-bottom: 32px; text-align: center;">Formulario de Reclamación</h2>
                
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="libro-form">
                    <input type="hidden" name="action" value="dacriz_libro_reclamaciones">
                    <?php wp_nonce_field('dacriz_libro_reclamaciones', 'dacriz_libro_nonce'); ?>

                    <!-- Datos del Consumidor -->
                    <div class="form-section" style="background: #f9fafb; padding: 24px; border-radius: 12px; margin-bottom: 24px;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 20px; color: #111827;">1. Datos del Consumidor</h3>
                        
                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 2fr; gap: 16px; margin-bottom: 16px;">
                            <div class="form-group">
                                <label for="tipo_documento" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Tipo de Documento *</label>
                                <select name="tipo_documento" id="tipo_documento" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                                    <option value="">Seleccionar</option>
                                    <option value="DNI">DNI</option>
                                    <option value="CE">Carnet de Extranjería</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="RUC">RUC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numero_documento" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Número de Documento *</label>
                                <input type="text" name="numero_documento" id="numero_documento" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                        </div>

                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div class="form-group">
                                <label for="nombres" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Nombres *</label>
                                <input type="text" name="nombres" id="nombres" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            <div class="form-group">
                                <label for="apellidos" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Apellidos *</label>
                                <input type="text" name="apellidos" id="apellidos" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                        </div>

                        <div class="form-row" style="display: grid; grid-template-columns: 2fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div class="form-group">
                                <label for="email" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Email *</label>
                                <input type="email" name="email" id="email" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            <div class="form-group">
                                <label for="telefono" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Teléfono</label>
                                <input type="tel" name="telefono" id="telefono" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 16px;">
                            <label for="direccion" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Dirección</label>
                            <input type="text" name="direccion" id="direccion" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                        </div>

                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px;">
                            <div class="form-group">
                                <label for="departamento" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Departamento</label>
                                <input type="text" name="departamento" id="departamento" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            <div class="form-group">
                                <label for="provincia" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Provincia</label>
                                <input type="text" name="provincia" id="provincia" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                            <div class="form-group">
                                <label for="distrito" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Distrito</label>
                                <input type="text" name="distrito" id="distrito" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                        </div>
                    </div>

                    <!-- Identificación del Bien o Servicio -->
                    <div class="form-section" style="background: #f9fafb; padding: 24px; border-radius: 12px; margin-bottom: 24px;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 20px; color: #111827;">2. Identificación del Bien o Servicio</h3>
                        
                        <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div class="form-group">
                                <label for="tipo_bien" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Tipo *</label>
                                <select name="tipo_bien" id="tipo_bien" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                                    <option value="">Seleccionar</option>
                                    <option value="producto">Producto</option>
                                    <option value="servicio">Servicio</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="monto_reclamado" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Monto Reclamado (S/) *</label>
                                <input type="number" name="monto_reclamado" id="monto_reclamado" step="0.01" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descripcion_bien" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Descripción del Bien o Servicio *</label>
                            <textarea name="descripcion_bien" id="descripcion_bien" rows="3" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; resize: vertical;"></textarea>
                        </div>
                    </div>

                    <!-- Detalle de la Reclamación -->
                    <div class="form-section" style="background: #f9fafb; padding: 24px; border-radius: 12px; margin-bottom: 24px;">
                        <h3 style="font-size: 1.25rem; margin-bottom: 20px; color: #111827;">3. Detalle de la Reclamación</h3>
                        
                        <div class="form-group" style="margin-bottom: 16px;">
                            <label style="display: block; margin-bottom: 12px; font-weight: 600; color: #374151;">Tipo de Reclamo *</label>
                            <div style="display: flex; gap: 24px;">
                                <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                                    <input type="radio" name="tipo_reclamo" value="reclamo" required>
                                    <span><strong>Reclamo:</strong> Disconformidad relacionada a los productos o servicios</span>
                                </label>
                                <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                                    <input type="radio" name="tipo_reclamo" value="queja" required>
                                    <span><strong>Queja:</strong> Disconformidad no relacionada a los productos o servicios</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 16px;">
                            <label for="detalle_reclamo" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Detalle del Reclamo o Queja *</label>
                            <textarea name="detalle_reclamo" id="detalle_reclamo" rows="4" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; resize: vertical;" placeholder="Describa detalladamente su reclamo o queja"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="pedido_consumidor" style="display: block; margin-bottom: 6px; font-weight: 600; color: #374151;">Pedido del Consumidor *</label>
                            <textarea name="pedido_consumidor" id="pedido_consumidor" rows="3" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; resize: vertical;" placeholder="¿Qué solicita como solución?"></textarea>
                        </div>
                    </div>

                    <!-- Aviso Legal -->
                    <div class="aviso-legal" style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 16px; border-radius: 8px; margin-bottom: 24px;">
                        <p style="margin: 0; font-size: 0.9rem; color: #92400e;"><strong>Importante:</strong> La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI. El proveedor deberá dar respuesta al reclamo en un plazo no mayor a treinta (30) días calendario.</p>
                    </div>

                    <!-- Botón de Envío -->
                    <div style="text-align: center;">
                        <button type="submit" class="btn-primary" style="padding: 14px 40px; font-size: 1.1rem; background: #dc2626;">Enviar Reclamo</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php endif; ?>

</main>

<style>
    .libro-form input:focus,
    .libro-form select:focus,
    .libro-form textarea:focus {
        outline: none;
        border-color: #ff4f22;
        box-shadow: 0 0 0 3px rgba(255,79,34, 0.1);
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr !important;
        }
        
        .info-card {
            margin-bottom: 16px;
        }
    }
</style>

<?php get_footer(); ?>
