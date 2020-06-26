<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1560">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="tile">
                    <H2 class="pt-3 pb-3">Become an instructor & share your experience!</H2>
                    <p>Ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus, luctus nec ullamcorpe dolor sit amet,
                        consectetur adipiscing.</p>
                </div>
                <div class="list-item mt-3">
                    <div class="mb-3">
                        <div class="item" id="item1">
                            <span>
                                <i class="fa fa-caret-down pr-2 float-left down" aria-hidden="true"></i>
                                <i class="fa fa-caret-up pr-2 float-left up" aria-hidden="true"></i>
                                Who can become at instructor?</span>
                        </div>
                        <p class="pl-3 disp_none" id="text1">Amet isum consectetur elit? Ut lorem dolor elit tellus!
                            Ipsum
                            luctus nec ullamcorper mattis amet.</p>
                    </div>
                    <div class="mb-3 ">
                        <div class="item" id="item2">
                            <span>
                                <i class="fa fa-caret-down pr-2 float-left down" aria-hidden="true"></i>
                                <i class="fa fa-caret-up pr-2 float-left up" aria-hidden="true"></i></span>
                            What lorem amet nulla?
                        </div>
                        <p class="pl-3 disp_none" id="text2">Lorem ipsum dolor sit amet elit tellus, luctus nec
                            ullamcorper
                            mattis pulvinar.</p>
                    </div>
                    <div class="mb-3">
                        <div class="item" id="item3">
                            <span>
                                <i class="fa fa-caret-down pr-2 float-left down" aria-hidden="true"></i>
                                <i class="fa fa-caret-up pr-2 float-left up" aria-hidden="true"></i></span>
                            How nulla glavrida dolor amet?
                        </div>
                        <p class="pl-3 disp_none" id="text3">Ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus,
                            luctus nec ullamcorper mattis.</p>
                    </div>
                    <div class="mb-3">
                        <div class="item" id="item4">
                            <span>
                                <i class="fa fa-caret-down pr-2 float-left down" aria-hidden="true"></i>
                                <i class="fa fa-caret-up pr-2 float-left up" aria-hidden="true"></i></span>
                            Ut elit tellus luctus nec?
                        </div>
                        <p class="pl-3 disp_none" id="text4">Sit amet consectetur adipiscing elit. Ut elit mattis,
                            pulvinar
                            dapibus leo dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
document.getElementById("item1").onclick = function() {
    click('text1', 'item1')
};
document.getElementById("item2").onclick = function() {
    click('text2', 'item2')
};
document.getElementById("item3").onclick = function() {
    click('text3', 'item3')
};
document.getElementById("item4").onclick = function() {
    click('text4', 'item4')
};
var el = document.querySelectorAll('div .disp_none');
var el1 = document.querySelectorAll('div .item');

function click(txt, item) {
    el.forEach(function(userItem) {
        if (userItem != document.getElementById(txt)) {
            userItem.classList.remove("show");
        } else {
            userItem.classList.toggle("show");
        }
    });
    el1.forEach(function(userItem) {
        if (userItem != document.getElementById(item)) {
            userItem.classList.remove("itemShow");
        } else {
            userItem.classList.toggle("itemShow");
        }
    });
}
</script>