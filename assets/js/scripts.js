jQuery(document).ready(function($) {
    var eventsHanler = {
        init: function () {
            eventsHanler.registerEvent();
        },

        registerEvent: function () {
            $('#wide-nav > .flex-row > .flex-col > ul.header-nav > li > a').addClass('hvr-underline-from-center');

            $('.dress').click(function () {
                // context.clearRect(0, 0, canvas.width, canvas.height);
                // context.restore();
                // var linkImage = $(this).attr('data-link');
                // //alert(linkImage);
                // base_image = new Image();
                // base_image.src = linkImage;
                // base_image.onload = function(){
                //     context_vay.drawImage(base_image, 0, 0);
                // }

                console.log(123);
            });
        }
    }

    eventsHanler.init();


});