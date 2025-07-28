<?php
/**
 * Block Name: Для кого
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: groups
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$title = get_field('title');
$title_list_left = get_field('title_list_left');
$title_list_right = get_field('title_list_right');
$list_left = get_field('list_left');
$list_right = get_field('list_right');
$text_bottom = get_field('text_bottom');

if ($title || $title_list_left || $title_list_right || $list_left || $list_right || $text_bottom) : ?>
    <section class="for-whom bg-blue pt-50 pb-70">
        <div class="for-whom__container container">
            <div class="for-whom__wrapper">
                <?= $title ? '<h3 class="for-whom__title fs-51@ls fs-32 b-title mb-50 mt-0 color-red">'.$title.'</h3>' : ''; ?>

                <?php if ($title_list_left || $title_list_right || $list_left || $list_right) : ?>
                    <div class="for-whom__content mb-30 d-flex jc-sb gap-50">
                        <?php if ($title_list_left || $list_left) : ?>
                            <div class="for-whom__left">
                                <?= $title_list_left ? '<h4 class="color-chamois text-medium  mt-0 mb-70@lg mb-20">'.$title_list_left.'</h4>' : ''; ?>

                                <ul class="for-whom__list color-white">
                                    <?php foreach ($list_left as $item) :
                                        echo !empty($item['item']) ? '<li class="ml-28 mb-20 mt-0 fs-20 fw-700">'.$item['item'].'</li>' : '';
                                    endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if ($title_list_right || $list_right) : ?>
                            <div class="for-whom__right">
                                <?= $title_list_right ? '<h4 class="color-chamois text-medium mt-0 mb-70@lg mb-20">'.$title_list_right.'</h4>' : ''; ?>

                                <ul class="for-whom__list color-white">
                                    <?php foreach ($list_right as $item) :
                                        echo !empty($item['item']) ? '<li class="ml-28 mb-20 mt-0 fs-20 fw-700">'.$item['item'].'</li>' : '';
                                    endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?= $text_bottom ? '<p class="color-chamois mw-650 m-0 30@ls fs-26 b-lh-1">'.$text_bottom.'</p>' : ''; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
