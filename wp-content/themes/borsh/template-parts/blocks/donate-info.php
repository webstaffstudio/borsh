<?php
/**
 * Block Name: Збір інфо
 * Description: Блок для збору інформації та донатів.
 * Icon: money-alt
 * Keywords: donate, payment, support
 * Supports: {"align":true,"mode":false,"multiple":true}
 */
$donate_image = get_field('donate_info_image');
$donate_img_text = get_field('donate_info_img_text');
$donate_logos = get_field('donate_info_logo');
$donate_description = get_field('donate_info_description');

if ($donate_image || $donate_img_text || $donate_logos || $donate_description):
    ?>
    <section class="donate-info">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <?php if ($donate_image || $donate_img_text): ?>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="donate-info__image">
                            <?= ($donate_image) ? '<img src="' . esc_url($donate_image) . '" alt="">' : ''; ?>
                            <?= ($donate_img_text) ? '<div class="donate-info__image-text">' . $donate_img_text . '</div>' : ''; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($donate_logos || $donate_description): ?>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="donate-info__description">
                            <?php if ($donate_logos): ?>
                                <div class="donate-info__description-logos">
                                    <?php foreach ($donate_logos as $logo): ?>
                                        <?php
                                        $logo_url = isset($logo['sizes']['large']) ? $logo['sizes']['large'] : $logo['url'];
                                        $logo_alt = isset($logo['alt']) ? $logo['alt'] : '';
                                        ?>
                                        <img src="<?= esc_url($logo_url); ?>" alt="<?= esc_attr($logo_alt); ?>">
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?= ($donate_description) ? '<div class="donate-info__description-text">' . $donate_description . '</div>' : ''; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
