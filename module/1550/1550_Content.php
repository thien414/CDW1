<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1550 container">
<div class="row">
  <div class="swiper-container col-lg-8 col-md-12">
    <div class="swiper-wrapper">
        <div class="swiper-slide" >
          <div class="check">
            <img src="app/images/in000-380x506.jpg" alt="">
          <div class="icon">
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </div>
          </div>
            <h5 class="mt-4">Tiffany Rose</h5>
            <p>business advisor</p>
        </div>
        <div class="swiper-slide" >
          <div class="check">
            <img src="app/images/in004-380x506.jpg" alt="">
          <div class="icon">
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </div>
          </div>
            <h5 class="mt-4">Jessica Anderson</h5>
            <p>marketing expert</p>
        </div>
        <div class="swiper-slide" >
          <div class="check">
            <img src="app/images/in006-380x506.jpg" alt="">
          <div class="icon">
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </div>
          </div>
            <h5 class="mt-4">James Jefferson</h5>
            <p>public relations advisor</p>
        </div>
        <div class="swiper-slide" >
          <div class="check">
            <img src="app/images/in007-380x506.jpg" alt="">
          <div class="icon">
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </div>
          </div>
            <h5 class="mt-4">Anna Dobrova</h5>
            <p>HR expert</p>
        </div>
        <div class="swiper-slide" >
          <div class="check">
            <img src="app/images/port003-380x506.jpg" alt="">
          <div class="icon">
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </div>
          </div>
            <h5 class="mt-4">Tiffany Green</h5>
            <p>business strategy</p>
        </div>
        <div class="swiper-slide" >
          <div class="check">
            <img src="app/images/port004-380x506.jpg" alt="">
          <div class="icon">
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            </div>
          </div>
            <h5 class="mt-4">Richard Brown</h5>
            <p>business communications expert</p>
        </div>
    </div>
    <div class="swiper-button-prev swiper-button-white temp">
    <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="swiper-button-next swiper-button-white temp">
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>

  </div>
  <div class="col-lg-4 col-md-12 mb-3 mt-3 pl-5 content">
    <h4>Meet our instructors</h4>
    <h3 class="mt-3 mb-3">Educators from best world's universities, top business coaches & advisors.</h3>
    <p class="mb-3">Nullam eget neque ut tellus ornare ullamcorper sed a facilisi. Pellentesque non justo.</p>
    <a href=""><i class="fa fa-user-plus pr-2" aria-hidden="true"></i>Join our team</a>
  </div>
</div>


</div>
  
  <!-- Swiper JS -->
  <script src="swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>