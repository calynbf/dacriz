/**
 * DACRIZ Theme Scripts
 * Scripts personalizados para el tema DACRIZ
 */

(function($) {
    'use strict';

    // Variables globales
    var $window = $(window);
    var $body = $('body');
    var $header = $('.site-header');

    /**
     * Header Sticky al hacer scroll
     */
    function handleStickyHeader() {
        if ($window.scrollTop() > 100) {
            $header.addClass('scrolled');
        } else {
            $header.removeClass('scrolled');
        }
    }

    /**
     * Smooth scroll para enlaces internos
     */
    function initSmoothScroll() {
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            if (
                location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
                location.hostname === this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            }
        });
    }

    /**
     * Animaciones al hacer scroll (Intersection Observer)
     */
    function initScrollAnimations() {
        var revealElements = document.querySelectorAll('[data-reveal]');

        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            revealElements.forEach(function(el) {
                el.classList.add('is-visible');
            });
        } else if ('IntersectionObserver' in window) {
            var revealObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });

            revealElements.forEach(function(el, index) {
                el.style.transitionDelay = Math.min(index % 4, 3) * 70 + 'ms';
                revealObserver.observe(el);
            });
        } else {
            revealElements.forEach(function(el) {
                el.classList.add('is-visible');
            });
        }

        if ('IntersectionObserver' in window) {
            var animatedElements = document.querySelectorAll('.service-card, .process-step, .testimonial-card, .pricing-card, .feature-item');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animatedElements.forEach(function(el) {
                el.style.opacity = '0';
                observer.observe(el);
            });
        }
    }

    /**
     * Contador animado para estadísticas
     */
    function initCounters() {
        var counters = document.querySelectorAll('.counter');
        
        if (counters.length && 'IntersectionObserver' in window) {
            var counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var counter = entry.target;
                        var target = parseInt(counter.getAttribute('data-target'));
                        var duration = 2000;
                        var step = target / (duration / 16);
                        var current = 0;
                        
                        var updateCounter = function() {
                            current += step;
                            if (current < target) {
                                counter.textContent = Math.floor(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = target;
                            }
                        };
                        
                        updateCounter();
                        counterObserver.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(function(counter) {
                counterObserver.observe(counter);
            });
        }
    }

    /**
     * Menú móvil
     */
    function initMobileMenu() {
        var $menuToggle = $('.menu-toggle');
        var $mobileMenu = $('.mobile-navigation');
        
        $menuToggle.on('click', function() {
            $body.toggleClass('mobile-menu-open');
            $mobileMenu.toggleClass('is-active');
        });

        // Cerrar menú al hacer clic en un enlace
        $mobileMenu.find('a').on('click', function() {
            $body.removeClass('mobile-menu-open');
            $mobileMenu.removeClass('is-active');
        });
    }

    /**
     * Navegación móvil del sistema DACRIZ adaptado.
     */
    function initDacrizMobileMenu() {
        var toggle = document.querySelector('.dacriz-brand-menu-toggle');
        var close = document.querySelector('.dacriz-brand-menu-close');
        var panel = document.querySelector('.dacriz-brand-mobile-panel');
        var overlay = document.querySelector('.dacriz-brand-mobile-overlay');

        if (!toggle || !panel || !overlay) {
            return;
        }

        function setMenu(open) {
            panel.classList.toggle('is-open', open);
            overlay.classList.toggle('is-open', open);
            panel.setAttribute('aria-hidden', open ? 'false' : 'true');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            document.body.style.overflow = open ? 'hidden' : '';
        }

        toggle.addEventListener('click', function() { setMenu(true); });
        overlay.addEventListener('click', function() { setMenu(false); });
        if (close) {
            close.addEventListener('click', function() { setMenu(false); });
        }
        panel.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() { setMenu(false); });
        });
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') { setMenu(false); }
        });
    }

    /**
     * Validación de formularios
     */
    function initFormValidation() {
        var $forms = $('.contact-form form, .wpcf7-form');
        
        $forms.each(function() {
            var $form = $(this);
            
            $form.on('submit', function(e) {
                var isValid = true;
                var $requiredFields = $form.find('[required]');
                
                $requiredFields.each(function() {
                    var $field = $(this);
                    var value = $field.val().trim();
                    
                    if (!value) {
                        isValid = false;
                        $field.addClass('error');
                    } else {
                        $field.removeClass('error');
                    }
                    
                    // Validación de email
                    if ($field.attr('type') === 'email' && value) {
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(value)) {
                            isValid = false;
                            $field.addClass('error');
                        }
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    $form.find('.error').first().focus();
                }
            });

            // Quitar clase error al escribir
            $form.find('input, textarea, select').on('input change', function() {
                $(this).removeClass('error');
            });
        });
    }

    /**
     * Lazy loading de imágenes (fallback para navegadores sin soporte nativo)
     */
    function initLazyLoad() {
        if ('loading' in HTMLImageElement.prototype) {
            // El navegador soporta lazy loading nativo
            var images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(function(img) {
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }
            });
        } else if ('IntersectionObserver' in window) {
            // Fallback con Intersection Observer
            var lazyImages = document.querySelectorAll('img[data-src]');
            
            var imageObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(function(img) {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Tabs functionality
     */
    function initTabs() {
        var $tabContainers = $('.dacriz-tabs');
        
        $tabContainers.each(function() {
            var $container = $(this);
            var $tabs = $container.find('.tab-button');
            var $panels = $container.find('.tab-panel');
            
            $tabs.on('click', function() {
                var $tab = $(this);
                var targetId = $tab.data('target');
                
                $tabs.removeClass('active');
                $tab.addClass('active');
                
                $panels.removeClass('active');
                $container.find('#' + targetId).addClass('active');
            });
        });
    }

    /**
     * Accordion functionality
     */
    function initAccordion() {
        var $accordions = $('.dacriz-accordion');
        
        $accordions.each(function() {
            var $accordion = $(this);
            var $items = $accordion.find('.accordion-item');
            
            $items.find('.accordion-header').on('click', function() {
                var $item = $(this).parent();
                var $content = $item.find('.accordion-content');
                
                if ($item.hasClass('active')) {
                    $item.removeClass('active');
                    $content.slideUp(300);
                } else {
                    $items.removeClass('active');
                    $items.find('.accordion-content').slideUp(300);
                    
                    $item.addClass('active');
                    $content.slideDown(300);
                }
            });
        });
    }

    /**
     * Testimonial Slider (simple)
     */
    function initTestimonialSlider() {
        var $sliders = $('.testimonial-slider');
        
        $sliders.each(function() {
            var $slider = $(this);
            var $slides = $slider.find('.testimonial-slide');
            var $dots = $slider.find('.slider-dot');
            var currentSlide = 0;
            var slideCount = $slides.length;
            var autoplayInterval;
            
            function showSlide(index) {
                $slides.removeClass('active').eq(index).addClass('active');
                $dots.removeClass('active').eq(index).addClass('active');
                currentSlide = index;
            }
            
            function nextSlide() {
                var next = (currentSlide + 1) % slideCount;
                showSlide(next);
            }
            
            // Click en dots
            $dots.on('click', function() {
                var index = $(this).index();
                showSlide(index);
                resetAutoplay();
            });
            
            // Autoplay
            function startAutoplay() {
                autoplayInterval = setInterval(nextSlide, 5000);
            }
            
            function resetAutoplay() {
                clearInterval(autoplayInterval);
                startAutoplay();
            }
            
            // Iniciar
            if (slideCount > 1) {
                showSlide(0);
                startAutoplay();
            }
        });
    }

    /**
     * Back to top button
     */
    function initBackToTop() {
        var $backToTop = $('<button class="back-to-top" aria-label="Volver arriba"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg></button>');
        
        $body.append($backToTop);
        
        $window.on('scroll', function() {
            if ($window.scrollTop() > 500) {
                $backToTop.addClass('visible');
            } else {
                $backToTop.removeClass('visible');
            }
        });
        
        $backToTop.on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 600);
        });
    }

    /**
     * Preloader
     */
    function hidePreloader() {
        var $preloader = $('.preloader');
        if ($preloader.length) {
            $preloader.fadeOut(500, function() {
                $(this).remove();
            });
        }
    }

    /**
     * Inicialización cuando el DOM está listo
     */
    $(document).ready(function() {
        initSmoothScroll();
        initMobileMenu();
        initDacrizMobileMenu();
        initFormValidation();
        initTabs();
        initAccordion();
        initTestimonialSlider();
        initBackToTop();
        
        // Scroll handler
        $window.on('scroll', handleStickyHeader);
        handleStickyHeader();
    });

    /**
     * Inicialización cuando la página está completamente cargada
     */
    $(window).on('load', function() {
        hidePreloader();
        initScrollAnimations();
        initCounters();
        initLazyLoad();
    });

})(jQuery);

/**
 * Estilos adicionales para elementos JS
 */
(function() {
    var style = document.createElement('style');
    style.textContent = `
        .back-to-top {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--dacriz-primary, #2563EB);
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: var(--dacriz-primary-dark, #1D4ED8);
            transform: translateY(-3px);
        }
        
        .contact-form input.error,
        .contact-form textarea.error,
        .contact-form select.error {
            border-color: #EF4444 !important;
        }
        
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 99999;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);
})();

/* Conversión: enviar al usuario a una confirmación medible tras el formulario. */
document.addEventListener('wpcf7mailsent', function () {
    window.setTimeout(function () {
        window.location.assign('/gracias/');
    }, 350);
});
