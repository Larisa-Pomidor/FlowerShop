<?php
/*
Template Name: home
*/

?>
<?php get_header(); ?>
<!-- Slider/Intro Section Start -->
<div class="intro11-slider-wrap section">
    <div class="intro11-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="intro11-section swiper-slide slide-1 slide-bg-1 bg-position" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/slider/1.jpg);">
                <!-- Intro Content Start -->
                <div class="intro11-content text-left">
                    <h3 class="title-slider text-uppercase">Вибір 2023</h3>
                    <h2 class="title">Квітковий рай</h2>
                    <p class="desc-content">У нашому квітковому магазині ви знайдете величезний вибір квітів на
                        будь-який смак та гаманець </p>
                    <a href="product-details.html" class="btn flosun-button secondary-btn theme-color  rounded-0">Магазин</a>
                </div>
                <!-- Intro Content End -->
            </div>
            <div class="intro11-section swiper-slide slide-2 slide-bg-1 bg-position" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/slider/2.jpg);">
                <!-- Intro Content Start -->
                <div class="intro11-content text-left">
                    <h3 class="title-slider black-slider-title text-uppercase">Вибір 2023</h3>
                    <h2 class="title">Квіти на будь-який смак</h2>
                    <p class="desc-content">Ми пишаємося тим, що маємо один з найбільших виборів квітів у місті </p>
                    <a href="product-details.html" class="btn flosun-button secondary-btn rounded-0">Магазин</a>
                </div>
                <!-- Intro Content End -->
            </div>
            <div class="intro11-section swiper-slide slide-2 slide-bg-1 bg-position" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/slider/3.jpg);">
                <!-- Intro Content Start -->
                <div class="intro11-content text-left">
                    <h3 class="title-slider black-slider-title text-uppercase">Вибір 2023</h3>
                    <h2 class="title">Прикрасьте свій дім красою</h2>
                    <p class="desc-content"> Ми гарантуємо свіжість та тривкість квітів, тому ви можете
                        насолоджуватися їх красою протягом довгого часу</p>
                    <a href="product-details.html" class="btn flosun-button secondary-btn rounded-0">Магазин</a>
                </div>
                <!-- Intro Content End -->
            </div>
        </div>
        <!-- Slider Navigation -->
        <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
        <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
        <!-- Slider pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Slider/Intro Section End -->
<!--Categories Area Start-->
<div class="categories-area pt-40">
    <div class="container-fluid">
        <div class="row">
            <div class="cat-1 col-md-4 col-sm-12 col-custom">
                <div class="categories-img mb-30">
                    <a href="<?php echo get_option('home'); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/assets/images/category/home1-category-1.jpg" alt=""></a>
                    <div class="categories-content">
                        <h3>На кожен день</h3>
                        <h4>5 Варіантів</h4>
                    </div>
                </div>
            </div>
            <div class="cat-2 col-md-8 col-sm-12 col-custom">
                <div class="row">
                    <div class="cat-3 col-md-7 col-custom">
                        <div class="categories-img mb-30">
                            <a href="<?php echo get_option('home'); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/assets/images/category/home1-category-2.jpg" alt=""></a>
                            <div class="categories-content">
                                <h3>Сезонні букети</h3>
                                <h4>10 Варіантів</h4>
                            </div>
                        </div>
                    </div>
                    <div class="cat-4 col-md-5 col-custom">
                        <div class="categories-img mb-30">
                            <a href="<?php echo get_option('home'); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/assets/images/category/home1-category-3.jpg" alt=""></a>
                            <div class="categories-content">
                                <h3>Квіти в вазонах</h3>
                                <h4>4 Варіанти</h4>
                            </div>
                        </div>
                    </div>
                    <div class="cat-5 col-md-4 col-custom">
                        <div class="categories-img mb-30">
                            <a href="<?php echo get_option('home'); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/assets/images/category/home1-category-4.jpg" alt=""></a>
                            <div class="categories-content">
                                <h3>Святкові квіточки</h3>
                                <h4>8 Варіантів</h4>
                            </div>
                        </div>
                    </div>
                    <div class="cat-6 col-md-8 col-custom">
                        <div class="categories-img mb-30">
                            <a href="<?php echo get_option('home'); ?>/shop"><img src="<?php bloginfo('template_url'); ?>/assets/images/category/home1-category-5.jpg" alt=""></a>
                            <div class="categories-content">
                                <h3>Для неї</h3>
                                <h4>15 Варіантів</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Categories Area End-->
<!--Product Area Start-->
<div class="product-area mt-text-2" id="sale">
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
                                                </a></h4>
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

<!-- Product Countdown Area End Here -->
<!-- History Area Start Here -->
<div class="our-history-area pt-text-3" id="about">
    <div class="container">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">Крихітна історія</span>
                    <h2 class="section-title-large">Про магазин</h2>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <div class="history-area-content pb-0 mb-0 border-0 text-center">
                    <p>Історія створення магазину квітів бере свій початок з мрії про красу та гармонію в житті. Його засновник, Анна, завжди була захоплена природою та квітами з їхніми різнобарвними відтінками та ароматами.
                    </p>
                    <p> Анна здобула вищу освіту в галузі дизайну, та почала робити букети та композиції квітів для друзів та родичів. З часом, її роботи почали отримувати все більше захоплення та запитів, що взяло верх над її повсякденною роботою.
                    </p>
                    <p> І от нарешті настав день відкриття магазину квітів. Анна назвала свій магазин "Квітковий рай" і заповнила його найкрасивішими квітами та рослинами з усього світу. Вона привітала своїх перших клієнтів з посмішкою та радістю, допомагаючи їм вибрати найкращі композиції, які доповнять їхні особливі моменти життя.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- History Area End Here -->
<!-- Banner Area Start Here -->
<div class="banner-area mt-text-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-custom">
                <!--Single Banner Area Start-->
                <div class="single-banner hover-style mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/about/about-1.jpg" alt="">
                            <div class="overlay-1"></div>
                        </a>
                    </div>
                </div>
                <!--Single Banner Area End-->
            </div>
            <div class="col-md-4 col-custom">
                <!--Single Banner Area Start-->
                <div class="single-banner hover-style mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/about/about-2.jpg" alt="">
                            <div class="overlay-1"></div>
                        </a>
                    </div>
                </div>
                <!--Single Banner Area End-->
            </div>
            <div class="col-md-4 col-custom">
                <!--Single Banner Area Start-->
                <div class="single-banner hover-style mb-30">
                    <div class="banner-img">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/about/about-3.jpg" alt="">
                            <div class="overlay-1"></div>
                        </a>
                    </div>
                </div>
                <!--Single Banner Area End-->
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->
<!-- Testimonial Area Start Here -->
<div class="testimonial-area mt-text-2" id="feedback">
    <div class="container custom-area">
        <div class="row">
            <!--Section Title Start-->
            <div class="col-12 col-custom">
                <div class="section-title text-center">
                    <span class="section-title-1">Щирі відгуки</span>
                    <h3 class="section-title-3">Що кажуть про нас клієнти</h3>
                </div>
            </div>
            <!--Section Title End-->
        </div>
        <div class="row">
            <div class="testimonial-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
                <div class="swiper-wrapper">
                    <div class="single-item swiper-slide">
                        <!--Single Testimonial Start-->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial/testimonial1.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>Я дуже задоволена покупкою у цьому квітковому магазині! Квіти були свіжі та дуже гарно оформлені. Колір та запах були такі, ніби квіти були зібрані тільки сьогодні. Дуже ввічливий та професійний персонал. Я точно буду замовляти квіти в цьому магазині ще раз!
                                </p>
                                <div class="testimonial-author">
                                    <h6>Анастасія <span>Покупець</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--Single Testimonial End-->
                    </div>
                    <div class="single-item swiper-slide">
                        <!--Single Testimonial Start-->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial/testimonial2.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>Не можу додати нічого, окрім похвали для цього квіткового магазину. Квіти були дуже красиві та свіжі, вона була дуже задоволена подарунком. Обслуговування було просто відмінним. Я з задоволенням рекомендую цей магазин квітів всім своїм друзям та знайомим.
                                </p>
                                <div class="testimonial-author">
                                    <h6>Маргарита <span>Покупець</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--Single Testimonial End-->
                    </div>
                    <div class="single-item swiper-slide">
                        <!--Single Testimonial Start-->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial/testimonial3.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>Мені здається, що цей квітковий магазин просто найкращий у місті! Квіти завжди свіжі та гарно оформлені. Я замовляв квіти тут вже кілька разів і ніколи не був розчарований. Ціни впорядку, а обслуговування завжди на високому рівні. Якщо вам потрібен квітковий подарунок, то я рекомендую звернутися саме сюди!
                                     </p>
                                <div class="testimonial-author">
                                    <h6>Анна <span>Покупець</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--Single Testimonial End-->
                    </div>
                </div>
                <!-- Slider Navigation -->
                <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i>
                </div>
                <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
                <!-- Slider pagination -->
                <div class="swiper-pagination default-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End Here -->
<!-- Newsletter Area Start Here -->
<div class="news-letter-area gray-bg pt-no-text pb-no-text mt-text-3">
    <div class="container custom-area">
        <div class="row align-items-center">
            <!--Section Title Start-->
            <div class="col-md-6 col-custom">
                <div class="section-title text-left mb-35">
                    <h3 class="section-title-3">Підписатися на розсилку</h3>
                    <p class="desc-content mb-0">Залиште вашу пошту, щоб завжди дізнаватися про нові новини першими!</p>
                </div>
            </div>
            <!--Section Title End-->
            <div class="col-md-6 col-custom">
                <div class="news-latter-box">
                    <div class="newsletter-form-wrap text-center">
                        <form id="mc-form" class="mc-form">
                            <input type="email" id="mc-email" class="form-control email-box" placeholder="Ваша пошта" name="EMAIL">
                            <button id="mc-submit" class="btn rounded-0" type="submit">Підписатися</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Area End Here -->
<?php get_footer(); ?>