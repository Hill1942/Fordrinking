/**
 * Created by kaidi on 15-1-12.
 */

(function ($) {

    var $loginBtn = $("#loginBtn");

    function loginBtnHandler() {
        //alert("hello");
        $.ajax({
            url: "login",
            type: "post",
            data: {
                username: $("#loginName").val(),
                password: $("#loginPass").val()
            },
            success: function(value) {

            }
        })
    }

    var app = {



        addEvent: function() {
            $loginBtn.on("click", loginBtnHandler)
        },


        run: function() {
            this.addEvent();
        }

    };

    app.run();

})(jQuery);
