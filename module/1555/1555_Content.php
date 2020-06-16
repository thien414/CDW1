<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1555 mt-5 container">
    <div class="d-lg-flex justify-content-lg-between align-items-center">
        <div class="temp w-lg-50">
            <h5>Our partners</h5>
            <h4>Amattis nulla glavrida ege ulla ambco mattis nulla lorem ege dolor ulla ambco amet.</h4>
        </div>
        <div class="temp">
            <a href=""><i class="fa fa-handshake-o pr-2" aria-hidden="true"></i>Become our partner</a>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-item position-relative">
            <div class="item1 d-flex align-items-end justify-content-center">
                <h6> Rouge Waves Soap</h6>
            </div>

            <div class="content">
                <h6> Michael Santos</h6>
                <p> Dolor sit amet consectetur adipiscing elit dolor.</p>
            </div>
        </div>
        <div class="grid-item position-relative">
            <div class="item2 d-flex align-items-end justify-content-center">
                <h6> Rouge Waves Soap</h6>
            </div>
            <div class="content">
                <h6> Michael Santos</h6>
                <p> Dolor sit amet consectetur adipiscing elit dolor.</p>
            </div>
        </div>
        <div class="grid-item position-relative">
            <div class="item3 d-flex align-items-end justify-content-center">
                <h6> Rouge Waves Soap</h6>
            </div>
            <div class="content">
                <h6> Michael Santos</h6>
                <p> Dolor sit amet consectetur adipiscing elit dolor.</p>
            </div>
        </div>
        <div class="grid-item position-relative">
            <div class="item4 d-flex align-items-end justify-content-center">
                <h6> Rouge Waves Soap</h6>
            </div>
            <div class="content">
                <h6> Michael Santos</h6>
                <p> Dolor sit amet consectetur adipiscing elit dolor.</p>
            </div>
        </div>
        <div class="grid-item position-relative">
            <div class="item5 d-flex align-items-end justify-content-center">
                <h6> Rouge Waves Soap</h6>
            </div>
            <div class="content">
                <h6> Michael Santos</h6>
                <p> Dolor sit amet consectetur adipiscing elit dolor.</p>
            </div>
        </div>

    </div>

</div>