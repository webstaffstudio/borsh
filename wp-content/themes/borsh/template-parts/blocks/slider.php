<?php
/**
 * Block Name: Слайдер
 * Description: A customizable slider block with navigation arrows.
 * Icon: slides
 * Keywords: slider, carousel, swiper
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$title = get_field('slider_title');
$template = get_field('slider_template');
$slides = get_field($template . '_slides');

// Default to speakers template if none selected
if (empty($template)) {
    $template = 'speakers';
}

if ($title || $slides) : ?>
    <section class="slider slider--<?php echo esc_attr($template); ?>">
        <div class="container">
            <?php if ($slides) : ?>
                <div class="slider__container">
                    <div class="slider__header">
                        <?php if ($title) : ?>
                            <h2 class="slider__title b-title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <div class="slider__navigation">
                            <div class="slider__button slider__button--prev"></div>
                            <div class="slider__button slider__button--next"></div>
                        </div>
                    </div>

                    <div class="swiper slider__swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($slides as $index => $slide) :
                                // Include the appropriate template for each slide
                                include(locate_template('template-parts/slider-templates/' . $template . '.php'));
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
