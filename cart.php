<?php
/*
Template Name: cart
*/

?>

<?php get_header(); ?>
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Ваш кошик</h3>
                    <ul>
                        <li><a href="<?php echo get_option('home'); ?>">Головна</a></li>
                        <li>Ваш кошик</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- cart main wrapper start -->
<div class="cart-main-wrapper mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">

                <div class="cart-table table-responsive">

                    <?php do_action('woocommerce_before_cart'); ?>

                    <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                        <?php do_action('woocommerce_before_cart_table'); ?>

                        <table class="shop_table table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Зображення</th>
                                    <th class="pro-title">Товар</th>
                                    <th class="pro-price">Ціна</th>
                                    <th class="pro-quantity">К-сть</th>
                                    <th class="pro-subtotal">Сумма</th>
                                    <th class="pro-remove">Видалити</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php do_action('woocommerce_before_cart_contents'); ?>

                                <?php
                                foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                    $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                ?>
                                        <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                            <td class="pro-thumbnail">
                                                <?php
                                                $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                                if (!$product_permalink) {
                                                    echo $thumbnail; // PHPCS: XSS ok.
                                                } else {
                                                    printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                                                }
                                                ?>
                                            </td>
                                            <td class="pro-title" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                                                <a href="#">
                                                    <?php
                                                    if (!$product_permalink) {
                                                        echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                                    } else {
                                                        echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                                    }

                                                    do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                                    // Meta data.
                                                    echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                                    // Backorder notification.
                                                    if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                                        echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                                    }
                                                    ?>
                                                </a>
                                            </td>
                                            <td class="pro-price" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                                                <span>
                                                    <?php
                                                    echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="pro-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                                                <?php
                                                if ($_product->is_sold_individually()) {
                                                    $min_quantity = 1;
                                                    $max_quantity = 1;
                                                } else {
                                                    $min_quantity = 0;
                                                    $max_quantity = $_product->get_max_purchase_quantity();
                                                }

                                                $product_quantity = woocommerce_quantity_input(
                                                    array(
                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                        'input_value'  => $cart_item['quantity'],
                                                        'max_value'    => $max_quantity,
                                                        'min_value'    => $min_quantity,
                                                        'product_name' => $_product->get_name(),
                                                    ),
                                                    $_product,
                                                    false
                                                );

                                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                                ?>
                                            </td>
                                            <td class="pro-subtotal" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>"><span>
                                                    <?php
                                                    echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="pro-remove">
                                                <?php
                                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                    'woocommerce_cart_item_remove_link',
                                                    sprintf(
                                                        '<a href="%s" class="lnr lnr-trash" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                        esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                        esc_html__('Remove this item', 'woocommerce'),
                                                        esc_attr($product_id),
                                                        esc_attr($_product->get_sku())
                                                    ),
                                                    $cart_item_key
                                                );
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                                <?php do_action('woocommerce_cart_contents'); ?>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                                            <?php if (wc_coupons_enabled()) { ?>
                                                <div class="apply-coupon-wrapper">
                                                    <form action="#" method="post" class=" d-block d-md-flex">
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Введіть купон" />
                                                        <button type="submit" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> btn flosun-button primary-btn rounded-0 black-btn" name="apply_coupon" value="<?php esc_attr_e('Застосувати', 'woocommerce'); ?>"><?php esc_attr_e('Застосувати', 'woocommerce'); ?>
                                                        </button>
                                                        <?php do_action('woocommerce_cart_coupon'); ?>
                                                    </form>
                                                </div>
                                            <?php } ?>
                                            <div class="cart-update mt-sm-16">
                                                <button type="submit" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> btn flosun-button primary-btn rounded-0 black-btn" name="update_cart" value="<?php esc_attr_e('Оновити кошик', 'woocommerce'); ?>"><?php esc_html_e('Оновити кошик', 'woocommerce'); ?></button>
                                                <?php do_action('woocommerce_cart_actions'); ?>

                                                <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php do_action('woocommerce_after_cart_contents'); ?>
                            </tbody>
                        </table>
                        <?php do_action('woocommerce_after_cart_table'); ?>
                    </form>

                    <?php do_action('woocommerce_before_cart_collaterals'); ?>

                    <div class="cart-collaterals">
                        <?php
                        /**
                         * Cart collaterals hook.
                         *
                         * @hooked woocommerce_cross_sell_display
                         * @hooked woocommerce_cart_totals - 10
                         */
                        do_action('woocommerce_cart_collaterals');
                        ?>
                    </div>

                    <?php do_action('woocommerce_after_cart'); ?>
                </div>
                <!-- Cart Update Option -->
            </div>
        </div>
    </div>
</div>
<!-- cart main wrapper end -->
<?php get_footer(); ?>