<?php
/**
 * Block Name: Про Організаторів
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: businessperson
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$title = get_field('title');
$logo_left = get_field('logo_left');
$logo_right = get_field('logo_right');
$text_left = get_field('text_left');
$text_right = get_field('text_right');

if ($title || $logo_left || $logo_right || $text_left || $text_right) : ?>
    <section class="organizers bg-blue pt-95@ls pb-60 pt-35">
        <div class="organizers__container container">
            <div class="organizers__wrapper">
                <?= $title ? '<h3 class="organizers__title fs-51@ls fs-32 b-title mb-50 mt-0 color-red">'.$title.'</h3>' : ''; ?>

                <?php if ($logo_left || $logo_right || $text_left || $text_right) : ?>
                    <div class="organizers__content d-flex gap-20 jc-sb">
                        <?php if ($logo_left || $text_left) : ?>
                            <div class="organizers__content--left">
                                <?php if ($logo_left['url']) : ?>
                                    <div class="organizers__wrap mw-250 w-100 mb-50">
                                        <img src="<?= $logo_left['sizes']['large']; ?>" alt="<?= $logo_left['alt']; ?>" loading="lazy">
                                    </div>
                                <?php endif; ?>

                                <?php if ($text_left) : ?>
                                    <div class="organizers__text">
                                        <?= $text_left; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($logo_right || $text_right) : ?>
                            <div class="organizers__content--right">
                                <?php if ($logo_right['url']) : ?>
                                    <div class="organizers__wrap mw-250 w-100 mb-50">
                                        <img src="<?= $logo_right['sizes']['large']; ?>" alt="<?= $logo_right['alt']; ?>" loading="lazy">
                                    </div>
                                <?php endif; ?>

                                <?php if ($text_right) : ?>
                                    <div class="organizers__text">
                                        <?= $text_right; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
