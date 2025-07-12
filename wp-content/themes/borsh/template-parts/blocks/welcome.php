<?php
/**
 * Block Name: Стартова Секція
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: admin-users
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */
?>
<?php
$date = get_field('welcome_date');
$logos = get_field('welcome_logo');
$address = get_field('welcome_address');
$title = get_field('welcome_title');
$button = get_field('welcome_btn');
$logo_bottom = get_field('welcome_logo_bottom');
?>

<?php if ($date || $logos || $address || $title || $button || $logo_bottom): ?>
    <section class="welcome">
        <div class="container">
            <div class="welcome__wrapper">
                <div class="welcome__left-col">
                    <?php if ($date): ?>
                        <div class="welcome__date">
                            <?php echo $date; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($address): ?>
                        <div class="welcome__address">
                            <?php echo $address; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="welcome__right-col">
                    <?php if ($logos): ?>
                        <div class="welcome__logos">
                            <?php foreach ($logos as $logo): ?>
                                <?php
                                $img = $logo['logo'];
                                $img_url = $img['sizes']['large'] ?? '';
                                $img_alt = $img['alt'] ?? $img['title'] ?? '';
                                ?>
                                <?php if ($img_url): ?>
                                    <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" loading="lazy">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="bottom-info">
                        <?php if ($title || $button): ?>
                            <div class="welcome__title-col">
                                <?php if ($title): ?>
                                    <h1 class="welcome__title">
                                        <?php echo $title; ?>
                                    </h1>
                                <?php endif; ?>
                                <?php if ($button): ?>
                                    <a class="b-btn" href="<?php echo $button['url']; ?>"
                                       target="<?php echo $button['target'] ?: '_self'; ?>">
                                        <?php echo $button['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($logo_bottom): ?>
                            <?php
                            $bottom_img_url = $logo_bottom['sizes']['large'] ?? '';
                            $bottom_img_alt = $logo_bottom['alt'] ?? $logo_bottom['title'] ?? '';
                            ?>
                            <?php if ($bottom_img_url): ?>
                                <div class="welcome__logo-bottom">
                                    <img src="<?php echo $bottom_img_url; ?>" alt="<?php echo $bottom_img_alt; ?>"
                                         loading="lazy">
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="vega-anim">
                <div class="vega-anim__desktop">
                    <?php echo inline_svg('vega-desktop/fragment-1.svg', 'frag frag-1'); ?>
                    <?php echo inline_svg('vega-desktop/fragment-2.svg', 'frag frag-2'); ?>
                    <?php echo inline_svg('vega-desktop/fragment-3.svg', 'frag frag-3'); ?>
                    <?php echo inline_svg('vega-desktop/б.svg', 'letter-1'); ?>
                    <?php echo inline_svg('vega-desktop/о.svg', 'letter-2'); ?>
                    <?php echo inline_svg('vega-desktop/р.svg', 'letter-3'); ?>
                    <?php echo inline_svg('vega-desktop/ш.svg', 'letter-4'); ?>
                </div>
                <div class="vega-anim__mobile">
                    <?php echo inline_svg('vega-desktop/vega-mobile.svg'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
