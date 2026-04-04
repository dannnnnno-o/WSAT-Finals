/**
 * Cat Breeds Site Scripts
 */

// Swiper initialization (only if wrapper exists)
document.addEventListener('DOMContentLoaded', () => {
    const wrapperElement = document.querySelector('.wrapper');
    if (wrapperElement) {
        const swiper = new Swiper('.wrapper', {
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 4000,
                disableOnInteract: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                576: { slidesPerView: 2 },
                850: { slidesPerView: 3 },
                1200: { slidesPerView: 4 }
            }
        });
    }

    // sticky header
    const header = document.querySelector('header');
    if (header) {
        let lastScrollTop = 0;
        const threshold = 100;

        window.addEventListener('scroll', () => {
            let currentScrollTop = window.pageYOffset || document.documentElement.scrollTop; // updates lastScrollTop
            console.log("lastScrollTop = " + lastScrollTop)

            // in case that the scroll position is negative
            if (currentScrollTop < 0) currentScrollTop = 0;

            if (currentScrollTop > lastScrollTop && currentScrollTop > threshold) {
                // currentScrollTop > lastScrollTop checks if the user scrolled 
                //currentScrollTop > threshold checks if the user scrolled past the threshold

                header.classList.add('header-hidden');
            }
            else if (currentScrollTop < lastScrollTop) {
                // Scrolling up - show header
                header.classList.remove('header-hidden');
            }

            // Always show if at the very top
            if (currentScrollTop <= 10) {
                header.classList.remove('header-hidden');
            }

            lastScrollTop = currentScrollTop;
        }, { passive: true });
    }
});