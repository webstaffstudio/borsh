<?php
/**
 * Block Name: Квитки
 * Description: A customizable block for displaying welcome slider section with a background, title, description, and optional button.
 * Icon: admin-users
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
    <section id="ticket" class="ticket bg-blue pt-250 pb-160"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/img/bg-ticket.svg')">
        <div class="ticket__container">
            <div class="ticket__wrapper">
                <?php if ($title || $list || $price || $old_price) : ?>
                    <div class="ticket__top mw-435 mx-auto radius-10 p-40 d-flex fd-c ai-c"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/src/img/bg-ticket-top.svg')">
                        <?= $title ? '<h3 class="b-title fw-700 b-lh-2 color-blue mt-0 mb-20">'.$title.'</h3>' : '';?>
                        <ul class="ticket__list fs-20 mb-20">
                            <?php foreach ($list as $item) :
                                echo !empty($item['item']) ? '<li class="ticket__item ml-20 mt-0">'.$item['item'].'</li>' : '';
                            endforeach; ?>
                        </ul>
                        <?= $price ? '<p class="fs-40 fw-700 b-lh-3 mb-20">'.$price.'</p>' : ''; ?>
                        <?= $old_price ? '<p class="ticket__old-price color-red fs-36 fw-700 px-15">'.$old_price.'</p>' : ''; ?>
                    </div>
                <?php endif; ?>


                <div class="ticket_bot">

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
