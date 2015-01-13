/**
 * Created by kaidi on 15-1-12.
 */

(function ($) {

    var $loginBtn       = $("#signupBtn");
    var $userSettingBtn = $("#$userSettingBtn");

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

    function userSettingBtnHover() {

    }

    var app = {

        addEvent: function() {
            $loginBtn.on("click", signupBtnClicker);
            $userSettingBtn.on("hover", userSettingBtnHover);
        },

        run: function() {
            this.addEvent();
        }
    };

    app.run();

})(jQuery);
