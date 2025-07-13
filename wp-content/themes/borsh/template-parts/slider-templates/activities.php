<?php
/**
 * Template for the Activities slider
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="swiper-slide slider__slide">
    <div class="slide-text bg-white">
        <?php if (!empty($slide['title'])) : ?>
            <p class="slider__slide-title fw-bold color-blue"><?php echo $slide['title']; ?></p>
        <?php endif; ?>

        <?php if (!empty($slide['description'])) : ?>
            <div class="slider__slide-description color-blue"><?php echo $slide['description']; ?></div>
        <?php endif; ?>
    </div>
    <?php if (!empty($slide['photo'])) : ?>
        <div class="slider__image">
            <?php
            echo wp_get_attachment_image(
                $slide['photo'],
                'slider_image',
                false,
                [
                    'alt' => $slide['photo']['alt'] ?: $slide['photo']['title'],
                    'loading' => 'lazy',
                ]
            );
            ?>
        </div>
    <?php endif; ?>

</div>
