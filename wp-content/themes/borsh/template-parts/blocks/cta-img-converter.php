<?php
/**
 * Block Name: Баннер (конвектор фото)
 * Description: A customizable block for displaying cta for image converter.
 * Icon: embed-photo
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$img_left = get_field('image');
$img_title = get_field('image_title');
$title = get_field('title');
$link = get_field('link');

if ($img_left || $img_title || $title || $link) : ?>
    <div class="cta-img-converter">
        <div class="container">
            <div class="cta-img-converter__wrapper d-flex jc-sb">
                <?php if ($img_left['url']) : ?>
                    <div class="cta-img-converter__left-img">
                        <img src="<?= $img_left['url']; ?>" alt="<?= $img_left['alt']; ?>" loading="lazy">
                    </div>
                <?php endif; ?>

                <?php if ($img_title || $title || $link) : ?>
                    <div class="cta-img-converter__content d-flex py-40 px-35">
                        <?php if ($img_title) : ?>
                            <div class="cta-img-converter__img-title">
                                <img src="<?= $img_title['url']; ?>" alt="<?= $img_title['alt']; ?>" loading="lazy">
                            </div>
                        <?php endif; ?>
                     
                        <?php if ($title || $link) : ?>
                            <div class="cta-img-converter__text mw-590 d-flex fd-c jc-fe ai-end">
                                <?php if ($title) : ?>
                                    <h3 class="cta-img-converter__title color-chamois fs-30 mb-50 mt-0 fw-400"><?= $title; ?></h3>
                                <?php endif; ?>
                        
                                <?php if ($link) : ?>
                                    <a class="cta-img-converter__link color-white bg-purple b-btn w-fc mr-20" href="<?= $link['url']; ?>"
                                       target="<?= $link['target'] ?: '_self'; ?>" title="<?= $link['title']; ?>">
                                        <?= $link['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>