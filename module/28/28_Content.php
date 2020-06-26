<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-28 container">
    <div class="title d-flex justify-content-center mt-5">
        <h1 class="font-weight-bold">Recent Projects</h1>
    </div>

    <div class="d-flex justify-content-center  mt-5">
        <div class="row">
            <div class="p-3 tile borders-show" onclick="myclick('tile1')" id="tile1">
                Show All
            </div>
            <div class="p-3 tile" onclick="myclick('tile2')" id="tile2">
                Painting
            </div>
            <div class="p-3 tile" onclick="myclick('tile3')" id="tile3">
                Flooring
            </div>
            <div class="p-3 tile" onclick="myclick('tile4')" id="tile4">
                Tile & Marble
            </div>
            <div class="p-3  tile" onclick="myclick('tile5')" id="tile5">
                Furniture
            </div>
            <div class="p-3 tile" onclick="myclick('tile6')" id="tile6">
                Lighting
            </div>
        </div>

    </div>

    <div class="row mt-5 content">
        <div class="col-lg-3 col-md-6 col-12 pb-3 content-img">
            <img src="images/28-giuong.png" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-12  pb-3 content-img">
            <img src="images/28-banghe.png" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-12 pb-3 content-img ">
            <img src="images/28-phongkhach.jpg" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-12 pb-3  content-img">
            <img src="images/28-phongkhach2.png" alt="">
        </div>
    </div>
</div>

<script>

var el = document.querySelectorAll('div .tile');

function myclick(id) {
    el.forEach(function(userItem) {
        if (userItem != document.getElementById(id)) {
            userItem.classList.remove("borders-show");
        } else {
            userItem.classList.add("borders-show");
        }
    });
}
</script>