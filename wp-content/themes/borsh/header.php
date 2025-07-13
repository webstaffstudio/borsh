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
    <header id="masthead" class="site-header bg-body-tertiary">
        <div class="container">
            <?php if ($sticky_header_text): ?>
                <p class="m-0"><a href="<?php echo $sticky_header_text['url']; ?>"><?php echo $sticky_header_text['title']; ?></a>
                </p>
            <?php endif; ?>
        </div>
    </header>

    <div id="content" class="site-content">
