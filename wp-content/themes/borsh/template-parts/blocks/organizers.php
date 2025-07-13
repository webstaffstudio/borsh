<?php
/**
 * Block Name: Про Організаторів
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: admin-users
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$title = get_field('title');
$logo_left = get_field('logo_left');
$logo_right = get_field('logo_right');
$text_left = get_field('text_left');
$text_right = get_field('text_right');

if ($title || $logo_left || $logo_right || $text_left || $text_right) : ?>
    <section class="organizers bg-blue pt-95 pb-60">
        <h3 class="mb-50">test</h3>
    </section>
<?php endif; ?>
