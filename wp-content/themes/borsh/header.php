<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$sticky_header_text = get_field('sticky_header_text', 'option');
?>
<div id="page" class="site-page">
    <header id="masthead" class="site-header header bg-body-tertiary">
        <div class="container overflow-hidden">
            <?php
            if (!empty($sticky_header_text['url'])) {
                $raw    = trim($sticky_header_text['url']);
                $href   = '#';
                $target = !empty($sticky_header_text['target']) ? $sticky_header_text['target'] : '';

                if (strpos($raw, '#') === 0) {
                    $href = is_front_page() ? $raw : home_url($raw);
                } else {
                    $is_absolute = (bool) wp_parse_url($raw, PHP_URL_SCHEME);
                    $href = $is_absolute ? $raw : home_url($raw);
                }
                ?>
                <a class="header-link"
                   href="<?php echo esc_url($href); ?>"
                   <?php if ($target): ?>target="<?php echo esc_attr($target); ?>"<?php endif; ?>
                   <?php if ($target === '_blank'): ?>rel="noopener"<?php endif; ?>
                ></a>
                <?php
            }
            ?>
            <div class="run-labels-wrapper">
                <div class="run-labels-track">
                    <?php for ($i = 0; $i < 20; $i++): ?>
                        <span class="run-label"><?php echo $sticky_header_text['title']; ?></span>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">
