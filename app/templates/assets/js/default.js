/**
 * Created by kaidi on 15-1-12.
 */

(function ($) {

    var $loginBtn       = $("#signupBtn");
    var $userSettingBtn = $("#userSettingBtn");
    var $userSetting    = $("#userSetting");

    function signupBtnClicker() {

        $.ajax({
            url:  "signup-check",
            type: "post",
            data: {
                email:    $("#signupMail").val(),
                username: $("#signupName").val(),
                password: $("#signupPass").val()
            },
            success: function(value) {
                if (value == "email-exist") {
                    $("#signupAlert").html("The email has been registered");
                } else if (value == "user-exist") {
                    $("#signupAlert").html("The name has been registered");
                } else if (value == "user-added") {
                    window.location.href="http://fordrinking.com/home";
                }
            }
        });
    }

    function userSettingBtnHover(e) {

        if (e.type == "mouseenter") {
            $userSetting.slideDown();
        } else if (e.type == "mouseleave") {
            $userSetting.slideUp();
        }

    }

    var app = {

        init: function() {
            $userSetting.hide();
        },

        addEvent: function() {
            $loginBtn.on("click", signupBtnClicker);
            $userSettingBtn.on("mouseenter", userSettingBtnHover)
                           .on("mouseleave", userSettingBtnHover)
        },

        run: function() {
            this.init();
            this.addEvent();
        }
    };

    app.run();

})(jQuery);
