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
$sticky_header_text = get_field('sticky_header_text');
?>
<div id="page" class="site-page">
    <header id="masthead" class="site-header header bg-body-tertiary">
        <div class="container overflow-hidden">
            <a class="header-link" href="<?php echo $sticky_header_text['url']; ?>"></a>
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
