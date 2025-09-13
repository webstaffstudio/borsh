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
if (empty($template)) {
    $template = 'speakers';
}
$slides = get_field($template . '_slides');

$background_url = '';
if ($template === 'speakers') {
    $background_url = trailingslashit(get_stylesheet_directory_uri()) . 'assets/src/img/vega-background.png';
}
$background_attr = $background_url ? ' style="background-image:url(' . esc_url($background_url) . ');"' : '';

if ($title || $slides) : ?>
    <section class="slider slider--<?php echo esc_attr($template); ?>"<?php echo $background_attr; ?>>
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
                                include(locate_template('template-parts/slider-templates/' . $template . '.php'));
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
