<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1517 container">
    
    <p class="tieu-de">About our online courses</p>
    <div class="row">
        <div class="col-lg-7 col-12 content">
            
            <h4>Our Story</h4>
            <h3>Amattis nulla ambco mattis nulla lorem ege dolor ulla ambco amet. Nulla glavrida!</h3>
            <div class="row">
                <div class="col-md-6">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia commodo
                        tellus rhoncus congue.</p>
                    <p>Etiam vitae felis eget lacus interdum feugiat. Suspendisse aliquam odio ante, sit amet
                        vulputate magna malesuada idraesent dapibus ultricies odio porta bibendum lorem.</p>
                </div>
                <div class="col-md-6">
                    <p>Ut consectetur, nunc vitae dictum rutrum, leo nulla interdum nibh, id pulvinar purusmaximus
                        eget odio. Morbi fermentum metus ut leo laoreet imperdiet.</p>
                    <p>Vivamus varius risus quam. Nam non odio quis est dignissim sodales sagittis interdum nibh, id
                        pulvinar purus felis at purus maximus eget odio! </p>
                </div>
            </div>
            <div class="donet">
                <span><i class="fa fa-money pr-2" aria-hidden="true"></i>Support Seven eCourses</span>
            </div>
        </div>
        <div class="col-lg-5 col-12 ">
            <div class="image-rage text-right">

                <img class="image-one" src="images/hinh1.jpg" alt="">
                <img class="image-two" src="images/hinh2.jpg" alt="">
            </div>
        </div>
    </div>
</div>