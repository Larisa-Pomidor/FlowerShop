<?php
/*
Template Name: shop
*/

?>
<?php get_header(); ?>

<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Магазин квіточок</h3>
                    <ul>
                        <li><a href="<?php echo get_option('home'); ?>">Головна</a></li>
                        <li>Магазин</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Shop Main Area Start Here -->
<div class="shop-main-area">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-12 col-custom widget-mt">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper mb-30">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_4" type="button" class="active btn-grid-4" title="Grid-4"><i class="fa fa-th"></i></button>
                        <button data-role="grid_3" type="button" class="btn-grid-3" title="Grid-3"> <i class="fa fa-th-large"></i></button>
                        <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_4">
                    <!--Single Product Start-->
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 17
                    );

                    $featured_query = new WP_Query($args);

                    if ($featured_query->have_posts()) :

                        while ($featured_query->have_posts()) :

                            $featured_query->the_post();

                            $product = get_product($featured_query->post->ID);  ?>

                            <div class="col-lg-3 col-md-6 col-sm-6  col-custom product-area">
                                <div class="product-item">
                                    <div class="single-product position-relative mr-0 ml-0">
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
                                                <h4 class="title-2"> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                                            <a href="http://wp/flowerwish.com/?add-to-cart=<?php echo get_the_ID(); ?>&quantity=1" class="btn product-cart" class="btn product-cart">В кошик</a>
                                        </div>
                                        <div class="product-content-listview">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                                            <div class="button-listview">
                                                <a href="http://wp/flowerwish.com/?add-to-cart=<?php echo get_the_ID(); ?>&quantity=1" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"> <span>В кошик</span> </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                    <?php wp_reset_query(); // Remember to reset
                    ?>
                </div>
                <!-- Shop Wrapper End -->
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>