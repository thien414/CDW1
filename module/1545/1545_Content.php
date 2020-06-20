<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1545">

    <div class="container">
        <div class="mt-5 mb-5 text-center">
            <h2>Featured courses</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12"></div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="position-relative">
                                <div class="img">
                                    <div class="images">
                                        <img src="app/images/nature-1.jpg" alt="" class="w-100 h-100 ">
                                    </div>
                                    <div class="content-overlayer d-flex align-items-end p-3 w-100 h-100 ">

                                        <div class="mb-3">
                                            <div class="d-flex">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="subtitle mb-0">Start your lorem ipsum dolor</h4>
                                            <p class="text mb-0">Business</p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="img">
                                    <div class="images">
                                        <img src="app/images/nature-2.jpg" alt="" class="w-100 h-100 ">
                                    </div>
                                    <div class="content-overlayer d-flex align-items-end p-3 w-100 h-100 ">

                                        <div class="mb-3">
                                            <div class="d-flex">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="subtitle mb-0">How to phasellus vitae convallis</h4>
                                            <p class="text mb-0">Ecommerce</p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="img">
                                    <div class="images">
                                        <img src="app/images/nature-3.jpg" alt="" class="w-100 h-100 ">
                                    </div>
                                    <div class="content-overlayer d-flex align-items-end p-3 w-100 h-100 ">

                                        <div class="mb-3">
                                            <div class="d-flex">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="subtitle mb-0">Faucibus felis leo pharetra lorem</h4>
                                            <p class="text mb-0">Marketing</p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="img">
                                    <div class="images">
                                        <img src="app/images/nature-4.jpg" alt="" class="w-100 h-100 ">
                                    </div>
                                    <div class="content-overlayer d-flex align-items-end p-3 w-100 h-100 ">

                                        <div class="mb-3">
                                            <div class="d-flex">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="subtitle mb-0">Scelerisque faucibus felis leo pharetra</h4>
                                            <p class="text mb-0">Ecommerce</p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="img">
                                    <div class="images">
                                        <img src="app/images/nature-5.jpg" class="h-100 w-100">
                                    </div>
                                    <div class="content-overlayer d-flex align-items-end p-3 w-100 h-100 ">

                                        <div class="mb-3">
                                            <div class="d-flex">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="subtitle mb-0">Business ipsum for amet glavrida</h4>
                                            <p class="text mb-0">Business</p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="img">
                                    <div class="images">
                                        <img src="app/images/nature-6.jpg" alt="" class="w-100 h-100 ">
                                    </div>
                                    <div class="content-overlayer d-flex align-items-end p-3 w-100 h-100 ">

                                        <div class="mb-3">
                                            <div class="d-flex">
                                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="subtitle mb-0">10 easy steps to lorem dolor glavrida</h4>
                                            <p class="text mb-0">Lifestyle</p>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>


                    <div class="swiper-button-prev swiper-button-white prev temp position-absolute">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-next swiper-button-white temp position-absolute">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>




<!-- Swiper JS -->
<script src="swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>