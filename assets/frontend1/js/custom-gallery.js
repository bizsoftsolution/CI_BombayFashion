$(document).ready(function() {
    "use strict";
    var $grid = $('[data-plugin="masonry"]').imagesLoaded(function () {
        $('.loaderBg').css('display','none');
        $('#main-content-wrapper').css('display','block');
        // init Masonry after all images have loaded
        $grid.masonry({
            itemSelector: ".masonry-item"
        });
    });
});