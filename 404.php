<?php get_header(); ?>
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Сторінка не знайдена</h3>
                    <ul>
                        <li><a href="<?php echo get_option('home'); ?>">Головна</a></li>
                        <li>Сторінка не знайдена</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Error 404 Area Start Here -->
<div class="error-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error_form">
                    <h1>404</h1>
                    <h2>Упссс! Такої сторінки поки що не існує :)</h2>
                    <a href="<?php echo get_option('home'); ?>">Повернутися на головну</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>