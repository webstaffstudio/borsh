<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="page-nav">
                <div class="container">
                    <div class="page-nav__arrow">
                        <a href="<?php echo home_url(); ?>">
                            <?php echo inline_svg('arrow-left.svg'); ?>
                        </a>
                    </div>
                    <div class="page-nav__btn">
                        <a href="<?php echo home_url(); ?>" class="b-btn">
                            <?php echo __('На головну', THEME_TD); ?>
                        </a>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="page-content">
                    <h1 class="head-title"><?php the_title(); ?></h1>
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
