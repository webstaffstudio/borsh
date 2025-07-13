<?php
/**
 * Block Name: Розпорядок
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: calendar
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */


$title = get_field('title');
$list = get_field('list');

if ($title || $list) : ?>
    <section class="agenda py-50">
        <div class="agenda__container container">
            <div class="agenda__wrapper">
                <?= $title ? '<h3 class="b-title color-blue mb-50 mt-0">'.$title.'</h3>' : ''; ?>

                <div class="agenda__list">
                    <?php foreach ($list as $item) :
                        $color = 'style="background-color:'.$item['color_label'].'"';
                        $agent = $item['agent'];
                        $speakers = $item['speakers'];
                        $words = explode(" ", $speakers);
                        if (!empty($words)) {
                            $words[0] = '<span class="first-word">' . $words[0] . '</span>';
                            $speakers = implode(" ", $words);
                        }

                        $time_start = $item['time_start'];
                        $time_end = $item['time_end'];
                        if (!empty($agent || $speakers)) : ?>
                            <div class="agenda__item px-25@sm px-0 py-25 d-flex ai-c gap-65">
                                <div class="agenda__color radius-10" <?= $color; ?>></div>

                                <div class="agenda__agent">
                                    <span class="fw-700 color-blue"><?= $agent; ?></span>
                                </div>

                                <div class="agenda__speakers color-blue"><?= $speakers ?></div>

                                <div class="agenda__time text-center color-blue radius-12 bg-grey mw-160 w-100 fw-700 fs-20 px-15 py-12">
                                    <?= $time_start.' &ndash; '.$time_end; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
