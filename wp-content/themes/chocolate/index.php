<?php get_header(); ?>

<section id="slider" class="slider-parallax swiper_wrapper clearfix">

    <div class="slider-parallax-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('<?= get_template_directory_uri() ?>/images/slider/banner1.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">Fire</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">Portrays Energy and Vitality</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" style="background-image: url('<?= get_template_directory_uri() ?>/images/slider/banner2.jpg'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp">WIND</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">Weightless yet Moving</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" style="background-image: url('<?= get_template_directory_uri() ?>/images/slider/banner3.jpg'); background-position: center top;">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp" style="color:#000;">WATER</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200" style="color:#000;">Brings in Tranquility and Peace</p>
                        </div>
                    </div>
                </div>

              
            </div>
            <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

    </div>

</section>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <?php print_r($api->home()['details']['content']); ?>		


    </div>

</section><!-- #content end -->

<?php get_footer(); ?>
