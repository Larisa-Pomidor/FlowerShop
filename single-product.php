<?php get_header(); ?>
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Товар</h3>
                    <ul>
                        <li><a href="<?php echo get_option('home'); ?>">Головна</a></li>
                        <li>Деталі товару</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Single Product Main Area Start -->
<div class="single-product-main-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                <div class="product-details-img">
                    <div class="single-product-img swiper-container gallery-top popup-gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="w-100" href="<?php echo get_the_post_thumbnail_url(); ?>">
                                    <img class="w-100" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Product">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-custom">
                <div class="product-summery position-relative">
                    <div class="product-head mb-3">
                        <h2 class="product-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="price-box mb-2">
                        <span class="regular-price"><?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?> грн.</span>
                        <span class="old-price"><del><?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?> грн.</del></span>
                    </div>
                    <div class="product-rating mb-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p class="desc-content mb-5">
                        <?php the_content(); ?>
                        <br>
                    </p>
                    <div class="quantity-with_btn mb-5">
                        <div class="quantity">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="1" type="text">
                                <div class="dec qtybutton"></div>
                                <div class="inc qtybutton"></div>
                            </div>
                        </div>
                        <div class="add-to_cart">
                            <a class="btn product-cart button-icon flosun-button dark-btn add-product" href="http://wp/flowerwish.com/?add-to-cart=<?php echo get_the_ID(); ?>&quantity=1" class="btn product-cart">
                                В кошик
                            </a>
                            <a class="btn flosun-button secondary-btn secondary-border rounded-0" href="wishlist.html">Додати в улюблені</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-no-text">
            <div class="col-lg-12 col-custom">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Опис</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Відгуки</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="product_tab_content  border p-3">
                            <div class="review_address_inner">
                                <?php echo comments_template(); ?>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product Main Area End -->
<div class="product-area mt-text-2">
    <div class="container custom-area-2 overflow-hidden">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">Чудовий подарунок</span>
                    <h3 class="section-title-3">Рекомендації від магазину</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row product-row">
            <div class="col-12 col-custom">
                <div class="product-slider swiper-container anime-element-multi">
                    <div class="swiper-wrapper">
                        <!--Single Product Start-->
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 6
                        );

                        $featured_query = new WP_Query($args);

                        if ($featured_query->have_posts()) :

                            while ($featured_query->have_posts()) :

                                $featured_query->the_post();

                                $product = get_product($featured_query->post->ID);  ?>

                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="<?php echo get_permalink(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="product-image-1 w-100">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <span class="onsale">Хіт!</span>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="<?php echo get_permalink(); ?>" title="Переглянути">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Переглянути"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><?php echo get_post_meta(get_the_ID(), '_sale_price', true); ?> грн.</span>
                                            <span class="old-price"><del><?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?> грн.</del></span>
                                        </div>
                                        <a href="http://wp/flowerwish.com/?add-to-cart=<?php echo get_the_ID(); ?>&quantity=1" class="btn product-cart">В кошик</a>
                                    </div>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php wp_reset_query(); // Remember to reset
                        ?>
                    </div>
                    <!-- Slider pagination -->
                    <div class="swiper-pagination default-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>