<?php
/**
 * Block Name: Постер
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: format-image
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */


$img = get_field('image');
$src_img = $img['sizes']['2048x2048'];
$src_filter = get_stylesheet_directory_uri() . '/assets/src/img/bg-poster-2.svg';
$style = !$img['url'] ? 'style="height: auto"' : '';
$align = !$img['url'] ? 'style="display:flex;justify-content: center;text-align:center"' : '';
$text = get_field('text');

if ($text || $img) : ?>
    <section class="poster bg-chamois d-flex ai-end" <?= $style; ?>>
        <?php if ($img['url']) : ?>
            <div class="poster-wrapper">
                <div class="poster__img"><img class="w-100" src="<?= $src_img; ?>" alt="title"></div>

                <div class="poster__filter"><img class="w-100" src="<?= $src_filter; ?>" alt="title"></div>
            </div>
        <?php endif; ?>

        <?php if ($text) : ?>
            <div class="poster__container" <?= $align; ?>>
                <div class="container py-70">
                    <div class="poster__wrapper mw-1098 w-100">
                        <h3 class="text-medium text-upper color-chamois fs-36@ls fs-26 fw-400 m-0"><?= $text; ?></h3>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
