<?php
/**
 * Block Name: Генератор Картинок
 * Description: Кастомний блок для відображення генерації картинки.
 * Icon: admin-generic
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":false}
 */

$title = get_field('title');
$title_result = get_field('title_result');
$title_btn = get_field('title_btn') ?? 'Завантажити фото';
$text = get_field('text');

if ($title || $title_result || $title_btn || $text) : ?>
    <div id="img_converter" class="generate-img py-60">
        <div class="generate-img__container">
            <?php if ($title) : ?>
                <h3 class="generate-img__title fs-51@ls fs-36 fw-700 mt-0 mb-70@md mb-10 color-blue text-center">
                    <?= $title; ?>
                </h3>
            <?php endif; ?>

            <div class="generate-img__slider options mb-100@md mb-20">
                <div class="generate-img__slider-wrapper swiper-wrapper d-flex jc-se">
                    <div class="option d-flex jc-c">
                        <div class="option-wrap">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/src/img/mask-generate/mask-1.png' ?>" alt="beetroot">
                        </div>
                    </div>
                    <div class="option d-flex jc-c">
                        <div class="option-wrap">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/src/img/mask-generate/mask-2.png' ?>" alt="cabbage">
                        </div>
                    </div>
                    <div class="option d-flex jc-c">
                        <div class="option-wrap">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/src/img/mask-generate/mask-3.png' ?>" alt="carrot">
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev color-blue"></div>
                <div class="swiper-button-next color-blue"></div>
            </div>

            <?php if ($title_result) : ?>
                <h3 class="generate-img__title-result fs-51@ls fs-36 fw-700 mb-40 color-blue text-center">
                    <?= $title_result; ?>
                </h3>
            <?php endif; ?>

            <div class="generate-img__btn-group mb-40 d-flex jc-c fw-wrap">
                <input id="upload" accept="image/*" type="file" class="generate-img__file" disabled style="display:none;">
                <label for="upload" class="generate-img__btn color-white bg-purple b-btn w-fc m-10"><?= $title_btn; ?></label>

                <button id="downloadBtn" class="b-btn w-fc m-10" style="display:none;">Скачати фото</button>
            </div>

            <?php if ($text) : ?>
                <p class="generate-img__text fs-20 fw-700 color-blue text-center"><?= $text; ?></p>
            <?php endif; ?>

            <canvas id="canvas" style="display:none;"></canvas>
        </div>
    </div>
<?php endif; ?>

<script>
    const options = document.querySelectorAll('.option');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const upload = document.getElementById('upload');
    const downloadBtn = document.getElementById('downloadBtn');
    let baseImage = null;
    let overlayImg = new Image();
    let swiperInstance;
    overlayImg.crossOrigin = "anonymous";
    upload.disabled = true;



    function initSlider() {
        const slider = document.querySelector('.generate-img__slider.options');

        if (window.innerWidth <= 768) {
            if (!slider.classList.contains('swiper')) {
                slider.classList.add('swiper');
                slider.querySelectorAll('.option').forEach(option => option.classList.add('swiper-slide'));

                swiperInstance = new Swiper(slider, {
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    spaceBetween: 0,
                    loop: false,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
        } else {
            if (slider.classList.contains('swiper')) {
                swiperInstance.destroy(true, true);
                slider.classList.remove('swiper');
                slider.querySelectorAll('.option').forEach(option => option.classList.remove('swiper-slide'));
            }
        }
    }

    // redraw when loading mask
    overlayImg.onload = () => {
        redraw();
    };

    // choosing a mask
    options.forEach(opt => {
        opt.addEventListener('click', () => {
            options.forEach(o => o.classList.remove('active'));
            opt.classList.add('active');
            overlayImg.src = opt.querySelector('img').src;
            upload.disabled = false;
            if (baseImage) redraw();
        });
    });

    // photo upload with 3MB limit
    upload.addEventListener('change', e => {
        const file = e.target.files[0];
        if (!file) return;

        const maxSize = 3 * 1024 * 1024; // 3 MB
        if (file.size > maxSize) {
            alert('Файл занадто великий! Максимальний розмір - 3 МБ.');
            upload.value = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = function(ev) {
            const img = new Image();
            img.onload = function() {

                const ratio = img.width / img.height;
                const targetRatio = 1 / 1.7;  //0.58
                if (Math.abs(ratio - targetRatio) > 0.05) {
                    alert(`Неправильне співвідношення сторін! Має бути приблизно 1:1.7 та більше.`);
                    upload.value = '';
                    return;
                }

                baseImage = img;
                redraw();
                downloadBtn.style.display = 'inline-block';
            };
            img.src = ev.target.result;
        };
        reader.readAsDataURL(file);
    });

    // render function
    function redraw() {
        if (!baseImage) return;
        canvas.width = baseImage.width;
        canvas.height = baseImage.height;
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // draw photo
        ctx.drawImage(baseImage, 0, 0);

        // apply the mask if it is loaded
        if (overlayImg && overlayImg.complete && overlayImg.naturalWidth) {
            ctx.drawImage(overlayImg, 0, 0, canvas.width, canvas.height);
        }
    }

    // download button
    downloadBtn.addEventListener('click', () => {
        const link = document.createElement('a');
        link.download = "photo_with_mask.png";
        link.href = canvas.toDataURL();
        link.click();
    });

    window.addEventListener('load', initSlider);
    window.addEventListener('resize', initSlider);
</script>
