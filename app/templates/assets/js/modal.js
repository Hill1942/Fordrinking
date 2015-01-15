/**
 * Created by kaidi on 15-1-15.
 */

(function($) {

    var width;
    var height;
    var clientWidth;
    var clientHeight;

    var $container      = null;
    var $window         = $(window);
    var $postPictureBtn = $("#postPictureBtn");



    function openModal(event) {
        event.preventDefault();
        createModal();

        $container.find('.scatter-modal-wnd')
            .css('opacity', '0')
            .css('width',  width + 'px')
            .css('height', height + 'px')
            .css('top',  '100px')
            .css('left', ((clientWidth  - width) / 2) + 'px')
            .fadeTo(500, 1);

        $('.scatter-modal')
            .append('<div id="blind"></div>')
            .find('#blind')
            .css('opacity', '0')
            .fadeTo(500, 0.8)
            .click(function() {
                closeModal();
            });
    }

    function closeModal() {
        $container.find('.scatter-modal').fadeOut(250, function() {
            $(this).remove();
        });

        $('#blind').fadeOut(250, function() {
            $(this).remove();
        });
    }

    function createModal() {
        var modalHTMLs = [];
        modalHTMLs.push("<div class='scatter-modal'>");
        modalHTMLs.push("<div class='scatter-modal-wnd'>");
        modalHTMLs.push("</div>");
        modalHTMLs.push("</div>");

        var $element = $(modalHTMLs.join("\n"));

        $container.append($element);
    }

    function resizeWindow() {
        clientWidth  = $window.width();
        clientHeight = $window.height();
        $container.find('.scatter-modal-wnd')
            .css('top',  '100px')
            .css('left', ((clientWidth  - width) / 2) + 'px');
    }

    var modal = {

        init: function() {
            width        = 540;
            height       = 280;
            clientWidth  = $window.width();
            clientHeight = $window.height();
            $container   = $(".post-c");
            $window.on("resize", resizeWindow);
            $postPictureBtn.on("click", openModal);
        },

        run: function() {
            this.init();
        }
    };

    modal.run();

})(jQuery);

