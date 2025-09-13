window.addEventListener('DOMContentLoaded', function () {
    function smoothScrollTo(to, duration = 500) {
        const start = window.pageYOffset;
        const difference = to - start;
        const startTime = performance.now();

        function step(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const ease = 0.5 * (1 - Math.cos(Math.PI * progress));
            window.scrollTo(0, start + difference * ease);
            if (elapsed < duration) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;
            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;
            e.preventDefault();
            e.stopPropagation();
            const yOffset = -50;
            const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
            smoothScrollTo(y, 200);
        });
    });

    function initSliders() {
        if (typeof Swiper === 'undefined') {
            console.warn('Swiper is not loaded');
            return;
        }

        var sliders = document.querySelectorAll('.slider__swiper');

        if (sliders.length) {
            sliders.forEach(function (slider) {
                var prevButton = slider.closest('.slider__container').querySelector('.slider__button--prev');
                var nextButton = slider.closest('.slider__container').querySelector('.slider__button--next');

                new Swiper(slider, {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        prevEl: prevButton,
                        nextEl: nextButton,
                    },
                    breakpoints: {
                        550: {
                            slidesPerView: 2,
                        },
                        992: {
                            slidesPerView: 3,
                        },
                        1200: {
                            slidesPerView: 4,
                        }
                    }
                });
            });
        }
    }


    initSliders();



    function random(min, max) {
        return Math.random() * (max - min) + min;
    }

    function animateFrag(svg, isHover = false) {
        const paths = Array.from(svg.querySelectorAll('path'));
        const usePaths = paths.length > 0;

        const elements = isHover ? paths : [svg];

        const maxOffset = isHover ? 2 : 400;
        const minOffset = isHover ? -2 : -400;

        elements.forEach((el, index) => {
            const dx = random(minOffset, maxOffset);
            const dy = random(minOffset, maxOffset);
            const duration = random(300, 1000);

            el.style.transition = `transform ${duration}ms`;
            if (!isHover) {
                el.style.transform = `translate(${dx}px, ${dy}px) rotate(360deg)`;
            } else {
                el.style.transform = `translate(${dx}px, ${dy}px) rotate(0deg)`;
            }

            setTimeout(() => {
                el.style.transform = `translate(0px, 0px) rotate(0deg)`;
            }, duration + 50);
        });
    }

    document.querySelector('.vega-anim__desktop')?.addEventListener('click', () => {
        const svgs = document.querySelectorAll('svg');
        svgs.forEach(svg => animateFrag(svg));
    });

    document.querySelector('.vega-anim__mobile')?.addEventListener('click', () => {
        const svgs = document.querySelectorAll('svg');
        svgs.forEach(svg => animateFrag(svg));
    });

    document.querySelectorAll('.vega-anim__desktop svg').forEach(svg => {
        svg.addEventListener('mouseenter', () => animateFrag(svg, true));
    });
});
