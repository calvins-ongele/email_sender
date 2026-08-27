/* ============================================================
    [Master Scripts]

    Theme Name:     
    Theme URL:      
    Description:    - Real Estate Property HTML Template
    Author:         PhotoClerks           
    Version:        1.0.0

============================================================== */
/*
========================================
*********** TABLE OF CONTENTS **********
 
  1. Navbar sticky Js
  2. Navbar Links Active  Js
  3. Background image Js
  4. Team slide Js
  5. Client slide Js
  6. blog slide Js
  7. blog slide Js
  8. Properties Details Slide Js
  9. Counter Js
  10. Select Js
  11. Scroll Reveal Js
  12. Search placeholder type  Js
  13. Password Show and Hide Js
  14. Contact Form ajax Js
  15. Preloader Js 
 
========================================*/
'use strict';
(function ($) {
    /* ============== Navbar sticky Js =================== */
    const mainHeader = document.querySelector('.main-header');
    if (mainHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                mainHeader.classList.add('sticky');
            } else {
                mainHeader.classList.remove('sticky');
            }
        });
    }

    /* ============== Navbar Links Active  Js =================== */
    if ($('.navbar-nav').length > 0) {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .dropdown-menu .dropdown-item');

        const removeActiveClass = () => {
            navLinks.forEach((link) => link.classList.remove('active'));
        };

        const setActiveLink = () => {
            const currentPath = window.location.pathname;
            removeActiveClass();

            navLinks.forEach((link) => {
                const linkPath = link.getAttribute('href');
                if (linkPath && currentPath.endsWith(linkPath)) {
                    link.classList.add('active');

                    const parentDropdown = link.closest('.dropdown-menu')?.previousElementSibling;
                    if (parentDropdown) {
                        parentDropdown.classList.add('active');
                    }
                }
            });
        };
        setActiveLink();
    }

    /* ============== Background image Js =================== */
    $('.bg-img').css('background-image', function () {
        var bg = 'url(' + $(this).data('background-image') + ')';
        return bg;
    });

    /* ============== Team slide Js =================== */
    if ($('.team-slide').length > 0) {
        const teamSwiper = new Swiper('.team-slide', {
            slidesPerView: 2,
            spaceBetween: 24,
            speed: 700,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            },
        });
    }

    /* ============== Client slide Js =================== */
    if ($('.clients-say-slider').length > 0) {
        const clientSwiper = new Swiper('.clients-say-slider', {
            slidesPerView: 2,
            spaceBetween: 24,
            speed: 700,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            autoplay: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                1024: { slidesPerView: 2 },
                1200: { slidesPerView: 2 },
            },
        });
    }

    /* ============== blog slide Js =================== */
    if ($('.blog-slide').length > 0) {
        const blogSwiper = new Swiper('.blog-slide', {
            slidesPerView: 2,
            spaceBetween: 24,
            speed: 700,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                // el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 1 },
                1024: { slidesPerView: 2 },
                1200: { slidesPerView: 2 },
            },
        });
    }

    /* ============== blog slide Js =================== */
    if ($('.blog-slide-two').length > 0) {
        const blogTwoSwiper = new Swiper('.blog-slide-two', {
            slidesPerView: 2,
            spaceBetween: 24,
            speed: 700,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                // el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 2 },
                1200: { slidesPerView: 3 },
            },
        });
    }

    /* ============== Properties Details Slide Js =================== */
    if ($('.properties-details-slide').length > 0) {
        const propertiesSwiper = new Swiper('.properties-details-slide', {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 700,
            // autoplay: {
            //     delay: 4500,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }

    /* ============== Counter Js =================== */
    // data-odometer-final
    if ($('.odometer').length > 0) {
        $(window).on('scroll', function () {
            $('.odometer').each(function () {
                if ($(this).isInViewport()) {
                    if (!$(this).data('odometer-started')) {
                        $(this).data('odometer-started', true);
                        this.innerHTML = $(this).data('odometer-final');
                    }
                }
            });
        });
    }
    // isInViewport helper function
    $.fn.isInViewport = function () {
        let elementTop = $(this).offset().top;
        let elementBottom = elementTop + $(this).outerHeight();
        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    /* ============== Select Js =================== */
    $('.select-search').select2();

    /* ============== Scroll Reveal Js =================== */
    const scrollReveal = ScrollReveal({
        origin: 'top', distance: '60px', duration: 1300, delay: 100, mobile: false,
    })
    scrollReveal.reveal('.top-reveal', {
        delay: 60, distance: '60px', origin: 'top', interval: 100, mobile: false,
    })
    scrollReveal.reveal('.left-reveal', {
        delay: 60, origin: 'left', interval: 100, mobile: false,
    })
    scrollReveal.reveal('.right-reveal', {
        delay: 60, origin: 'right', interval: 100, mobile: false,
    })
    scrollReveal.reveal('.bottom-reveal', {
        delay: 60, origin: 'bottom', interval: 100, mobile: false,
    })
    scrollReveal.reveal('.scaleUp', {
        scale: 0.85, mobile: false,
    })

    /* ============== Search placeholder type  Js =================== */
    if ($('.search-form').length > 0) {
        const searchForms = document.querySelectorAll('.search-form');
        if (searchForms.length > 0) {
            const placeholderTexts = [
                "Search your dream home...",
                "Find the best apartment...",
                "Explore new properties...",
                "Start your home journey..."
            ];

            searchForms.forEach((searchInput) => {
                let index = 0;
                let timeoutId;

                const typePlaceholder = (text, i = 0) => {
                    if (i < text.length) {
                        searchInput.placeholder = text.substring(0, i + 1);
                        timeoutId = setTimeout(() => typePlaceholder(text, i + 1), 100);
                    } else {
                        timeoutId = setTimeout(() => erasePlaceholder(text), 2000);
                    }
                };

                const erasePlaceholder = (text, i = text.length) => {
                    if (i > 0) {
                        searchInput.placeholder = text.substring(0, i - 1);
                        timeoutId = setTimeout(() => erasePlaceholder(text, i - 1), 50);
                    } else {
                        index = (index + 1) % placeholderTexts.length;
                        timeoutId = setTimeout(() => typePlaceholder(placeholderTexts[index]), 500);
                    }
                };

                searchInput.addEventListener('focus', () => {
                    clearTimeout(timeoutId);
                    if (!searchInput.value) {
                        searchInput.placeholder = placeholderTexts[index];
                    }
                });

                searchInput.addEventListener('blur', () => {
                    if (!searchInput.value) {
                        typePlaceholder(placeholderTexts[index]);
                    }
                });

                typePlaceholder(placeholderTexts[index]);
            });
        }
    }

    /* ============== Password Show and Hide Js =================== */
    if ($('.password-show-toggle').length) {
        var showBtn = $('.password-show-toggle');
        showBtn.each(function () {
            $(this).on('click', function () {
                let inputField = $(this).closest('.password-content').find('input');
                let openEye = $(this).find('.fa-eye');
                let closeEye = $(this).find('.fa-eye-slash');

                if (inputField.attr('type') === "password") {
                    inputField.attr('type', 'text');
                    openEye.show();
                    closeEye.hide();
                } else {
                    inputField.attr('type', 'password');
                    openEye.hide();
                    closeEye.show();
                }
            });
        });
    }

    /* ============== Contact Form ajax Js =================== */
    if ($('#contact-form').length > 0) {
        $("#contact-form").submit(function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                success: function (response) {
                    
                    $('.feeb').html(data['msg']);
                    $('.feeb').removeClass('alert alert-sm alert-danger alert-success');
                    
                    if (data['error'] == 'true') {
                        $('.feeb').addClass('alert alert-sm alert-danger');
                    } else  {
                        $('.feeb').addClass('alert alert-sm alert-success');
                        
                    }

                    $("#contact-form")[0].reset();
                },
                error: function () {
                    alert("Oops! Something went wrong. Please try again.");
                },
            });
        });
    }
    /* ============== Preloader Js =================== */
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        preloader.style.transition = 'height 0.5s, opacity 1s';
        preloader.style.opacity = '0';
        preloader.style.height = '0';
        preloader.style.borderBottomLeftRadius = '100%';
        preloader.style.borderBottomRightRadius = '100%';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    });


})(jQuery);