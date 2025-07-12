<?php
$logo = get_field('footer_logo');
$title = get_field('footer_text');
$date = get_field('footer_date_time');
$address = get_field('footer_address');
$logos = get_field('footer_logos');
?>
	</div><!-- #content -->

	<footer id="footer" class="footer">
        <div class="footer__wrapper">
            <div class="footer__top py-50 bg-blue">
                <div class="container d-flex jc-sb fw-wrap gap-50">
                    <?php if ($logo['url'] || $title) : ?>
                        <div class="footer__logo d-flex fw-wrap gap-50">
                            <?php if ($logo['url']) : ?>
                                <div class="footer__wrap w-100 mw-369">
                                    <img src="<?= $logo['sizes']['large']; ?>" alt="<?= $logo['alt']; ?>" loading="lazy">
                                </div>
                            <?php endif; ?>

                            <?= $title ? '<p class="footer__title mw-300 w-100 fw-700 fs-36 b-lh-2 color-chamois d-inlineb">'.$title.'</p>' : ''; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($date || $address) : ?>
                        <div class="footer__info w-100 mw-320">
                            <?= $date ? '<p class="footer__date mb-20 color-white">'.$date.'</p>' : ''; ?>
                            <?= $address ? '<p class="footer__address color-white">'.$address.'</p>' : ''; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ( !empty($logos) && is_array($logos) && count(array_filter($logos, function($logo) { return isset($logo['image']) && is_array($logo['image']) && !empty($logo['image']); })) > 0 ) : ?>
                <div class="footer__bot bg-white py-20">
                    <div class="container d-flex jc-se gap-20 fw-wrap">
                        <?php foreach ($logos as $item):
                            $img = $item['image'];
                            $img_url = $img['sizes']['large'] ?? '';
                            $img_alt = $img['alt'] ?? $img['title'] ?? '';
                            if ($img_url): ?>
                                <img class="w-100 h-auto mw-128" src="<?= $img_url; ?>" alt="<?= $img_alt; ?>" loading="lazy">
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
