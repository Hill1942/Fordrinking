/**
 * Created by kaidi on 15-1-12.
 */

(function ($) {

    var blogIndex       = parseInt($("#blogIndex").val());

    var $loginBtn       = $("#signupBtn");
    var $userSettingBtn = $("#userSettingBtn");
    var $userSetting    = $("#userSetting");
    var $postSubmit     = $("#postSubmit");

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

    function postSubmitBtnClicker() {
        $.ajax({
            url: "post-text",
            type: "post",
            data: {
                content: $("#postText").val()
            },
            success: function(value) {
                $(".blogs").prepend(value);
            }
        })
    }

    function loadingMoreBlogs() {
        var clientHeight = $(window).height();
        var scrollTop = $(document).scrollTop();
        var scrollHeight = document.body.scrollHeight;

        if(clientHeight + scrollTop >= scrollHeight){
            $.ajax({
                url: "more-blog",
                type: "post",
                data: {
                    blogIndex: blogIndex
                },
                success: function (data) {
                    $(".blogs").append(data);
                    blogIndex += 5;
                }
            });

        }
    }

    var app = {

        init: function() {
            $userSetting.hide();
        },

        addEvent: function() {
            $(document).on("scroll", loadingMoreBlogs);
            $loginBtn.on("click", signupBtnClicker);
            $userSettingBtn.on("mouseenter", userSettingBtnHover)
                           .on("mouseleave", userSettingBtnHover);
            $postSubmit.on("click", postSubmitBtnClicker);
        },

        run: function() {
            this.init();
            this.addEvent();
        }
    };

    app.run();

})(jQuery);
