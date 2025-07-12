<?php
/**
 * Block Name: Про подію
 * Description:
 * Icon: admin-users
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */
?>
<?php
$title = get_field('about_title');
$subtitle = get_field('about_subtitle');
$description = get_field('about_description');
?>

<?php if ($title || $subtitle || $description): ?>
    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <?php if ($description): ?>
                    <div class="about__left">
                        <?php echo $description; ?>
                    </div>
                <?php endif; ?>
                <?php if ($title || $subtitle): ?>
                    <div class="about__right">
                        <?php echo ($title) ? '<div class="about__right-title text-large">' . $title . '</div>' : ''; ?>
                        <?php echo ($subtitle) ? '<div class="about__right-subtitle text-medium">' . $subtitle . '</div>' : ''; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
