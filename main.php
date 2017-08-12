<?php
require_once('lib.php');

function main() {

    // new class test
    $lib = new lib();
    
    // add js file
    $js_include = <<<HTML
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
HTML;
    echo $js_include;
    
    // add js code
    $js_function = <<<JAVASCRIPT
<script>
    $(function(){
        $('.js-click').click(function(){
            var that = $(this),
                url = 'service.php',
                val = that.data('val');
            $.post(url, {funName: 'getClickCnt', cnt: val}, function(o){
                that.data('val', o.cnt);
                $('.js-showCnt').text(o.cnt);
            }, 'json');
        });
    });
</script>
JAVASCRIPT;
    echo $js_function;

    // echo html
    $html = <<<HTML
        <button class='js-click' data-val='0'>event click</button> <span class='js-showCnt'>0</span>
HTML;
    echo $html;
}
main();