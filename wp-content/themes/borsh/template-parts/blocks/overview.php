<?php
/**
 * Block Name: Огляд Події
 * Description:
 * Icon: admin-users
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */
?>
<?php
$logo = get_field('overview_logo');
$title = get_field('overview_title');
$text = get_field('overview_text');
$image_title = get_field('overview_image_title');
$image = get_field('overview_image');
$counter_1 = get_field('counter_1_label');
$counter_2 = get_field('counter_2_label');
$counter_3 = get_field('counter_3_label');
$counter_4 = get_field('counter_4_label');
$footer_label = get_field('overview_footer_label');
$footer_title = get_field('overview_footer_text_title');
?>

<?php if ($logo || $title || $text || $image_title || $image || $counter_1 || $counter_2 || $counter_3 || $counter_4 || $footer_label || $footer_title): ?>
    <section class="overview">
        <div class="container">
            <div class="overview__about">
                <div class="col">
                    <?php if ($logo): ?>
                        <div class="overview_top_logo">
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?: $logo['title']; ?>" loading="lazy">
                        </div>
                    <?php endif; ?>
                    <?php echo ($title) ? '<div class="b-title">'.$title.'</div>' : ''; ?>
                    <?php echo ($text) ? '<div class="overview_description">'.$text.'</div>' : ''; ?>
                </div>
                <div class="col">
                    <?php echo ($image_title) ? '<h3 class="text-medium">'.$image_title.'</h3>' : ''; ?>
                    <?php if ($image): ?>
                        <div class="overview__image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?: $image['title']; ?>" loading="lazy">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="overview__counters">
                <div class="counters-row">
                    <div class="counters-row__counter">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/placeholder.svg" alt="">
                        <?php echo ($counter_1) ? '<span>'.$counter_1.'</span>' : ''; ?>
                    </div>
                    <div class="counters-row__counter">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/placeholder.svg" alt="">
                        <?php echo ($counter_2) ? '<span>'.$counter_2.'</span>' : ''; ?>
                    </div>
                </div>
                <div class="counters-row">
                    <div class="counters-row__counter">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/placeholder.svg" alt="">
                        <?php echo ($counter_3) ? '<span>'.$counter_3.'</span>' : ''; ?>
                    </div>
                    <div class="counters-row__counter">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/placeholder.svg" alt="">
                        <?php echo ($counter_4) ? '<span>'.$counter_4.'</span>' : ''; ?>
                    </div>
                </div>
            </div>

            <?php if ($footer_label || $footer_title): ?>
                <div class="overview__footer">
                    <div class="o-footer__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/placeholder.svg" alt="">
                    </div>
                    <div class="o-footer__text">
                        <?php echo ($footer_label) ? '<p>'.$footer_label.'</p>' : ''; ?>
                        <?php echo ($footer_title) ? '<div class="text-medium">'.$footer_title.'</div>' : ''; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
