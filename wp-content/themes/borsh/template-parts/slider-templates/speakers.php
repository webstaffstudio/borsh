<?php
/**
 * Template for the Speakers slider
 */

if (!defined('ABSPATH')) {
    exit;
}

$color_classes = [
    'slider__slide--purple',
    'slider__slide--blue',
    'slider__slide--green',
    'slider__slide--red',
];

// Очікується, що в шаблон передано $index (індекс ітерації)
$current_class = $color_classes[$index % count($color_classes)];
?>

<div class="swiper-slide slider__slide <?php echo $current_class; ?>">
    <?php if (!empty($slide['photo'])) : ?>
        <div class="slider__image">
            <?php
            echo wp_get_attachment_image(
                $slide['photo'],
                'slider_image',
                false,
                [
                    'alt' => $slide['photo']['alt'] ?? $slide['photo']['title'],
                    'loading' => 'lazy',
                ]
            );
            ?>
        </div>
    <?php endif; ?>
    <div class="slide-text">
        <?php if (!empty($slide['title'])) : ?>
            <h3 class="slider__slide-title"><?php echo $slide['title']; ?></h3>
        <?php endif; ?>

        <?php if (!empty($slide['description'])) : ?>
            <div class="slider__slide-description"><?php echo $slide['description']; ?></div>
        <?php endif; ?>
    </div>
</div>
