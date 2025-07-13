<?php
/**
 * Block Name: Квитки
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: tickets-alt
 * Keywords: welcome, intro, section
 * Supports: {"align":true,"mode":false,"multiple":true}
 */

$title = get_field('title');
$list = get_field('list');
$price = get_field('price');
$old_price = get_field('old_price');
$donate = get_field('donate');
$next_price = get_field('next_price');
$tickets = get_field('tickets');
$link = get_field('link');

if ($title || $list || $price || $old_price || $donate|| $next_price || $tickets || $link) : ?>
    <section class="ticket bg-blue pt-250 pb-160"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/img/bg-ticket.svg')">
        <div class="ticket__container">
            <div id="ticket" class="ticket__wrapper px-20">
                <?php if ($title || $list || $price || $old_price) : ?>
                    <div class="ticket__top mw-435 mx-auto radius-10 p-40@ls py-40 px-20 d-flex fd-c ai-c"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/img/bg-ticket-top.svg')">
                        <?= $title ? '<h3 class="b-title fw-700 b-lh-2 color-blue mt-0 mb-20 text-center">'.$title.'</h3>' : '';?>
                        <ul class="ticket__list fs-20 mb-10">
                            <?php foreach ($list as $item) :
                                echo !empty($item['item']) ? '<li class="ticket__item fw-700 ml-20 mb-12 mt-0">'.$item['item'].'</li>' : '';
                            endforeach; ?>
                        </ul>
                        <?= $price ? '<p class="fs-40@ls fs-26 fw-700 b-lh-3 mb-20">'.$price.'</p>' : ''; ?>
                        <?= $old_price ? '<p class="ticket__old-price color-red fs-36@ls fs-26 fw-700 px-15 m-0">'.$old_price.'</p>' : ''; ?>
                    </div>
                <?php endif; ?>


                <?php if ($donate|| $next_price || $tickets || $link) : ?>
                    <div class="ticket__bot mw-435 mx-auto radius-10 p-40@ls py-40 px-20 d-flex fd-c ai-c text-center"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/img/bg-ticket-bot.svg')">
                        <div class="ticket__wrap">
                            <?= $donate ? '<p class="color-white mb-20">'.$donate.'</p>' : ''; ?>
                            <?= $next_price ? '<p class="color-white mb-20">'.$next_price.'</p>' : ''; ?>
                            <?= $tickets ? '<p class="color-white mb-20 color-red fw-700 mb-30">'.$tickets.'</p>' : ''; ?>
                            <?php if ($link['url']) : ?>
                                <a class="ticket__btn b-btn mx-auto fw-700" href="<?= $link['url'] ?>" title="<?= $link['title'] ?>" target="<?= $link['target'] ?>">
                                    <?= $link['title'] ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
