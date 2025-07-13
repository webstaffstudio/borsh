
window.addEventListener('DOMContentLoaded', function() {
    function addVegaAnimation() {
        document.querySelectorAll('.vega-anim__desktop').forEach(function(el) {
            el.classList.add('vega-anim__desktop--animate');
        });

        document.querySelectorAll('.vega-anim__mobile').forEach(function(el) {
            el.classList.add('vega-anim__mobile--animate');
        });
    }

    function initSliders() {
        if (typeof Swiper === 'undefined') {
            console.warn('Swiper is not loaded');
            return;
        }

        var sliders = document.querySelectorAll('.slider__swiper');

        if (sliders.length) {
            sliders.forEach(function(slider) {
                var prevButton = slider.closest('.slider__container').querySelector('.slider__button--prev');
                var nextButton = slider.closest('.slider__container').querySelector('.slider__button--next');

                new Swiper(slider, {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        prevEl: prevButton,
                        nextEl: nextButton,
                    },
                    breakpoints: {
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

    addVegaAnimation();
    initSliders();
});
