<?php
/**
 * Block Name: Стартовий блок
 * Description: Кастомний блок для відображення заголовка і картинки.
 * Icon: cover-image
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$image = get_field('image');

if ($image) : ?>
    <div class="hero-img">
        <img class="hero-img__img" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">
    </div>
<?php endif; ?>
