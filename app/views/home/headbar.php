
<div class="head-bar-c">
    <div class="head-bar">
        <div class="h-search left">
            <!--  -->
            <img class="h-search-img left" src="<?php echo \helpers\url::template_path() . 'assets/img/fordrinking-logo.png' ?>">
            <div class="h-search-item left">
                <input class="h-search-i" type="text" id="h-search-input" placeholder="search and find">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </div>
        </div>
        <div class="h-user right">
            <div class="h-tab-row" id="userNavRow">
                <div class="tab left">
                    <a class="glyphicon glyphicon-home" href="#"></a>
                    <span class="h-tab-s">Home</span>
                </div>
                <div class="tab left">
                    <a class="glyphicon glyphicon-globe" href="#"></a>
                    <span class="h-tab-s">Explore</span>
                </div>
                <?php if (isset($_SESSION[SESSION_PREFIX.'loggedin']) &&
                          $_SESSION[SESSION_PREFIX.'loggedin']) { ?>
                    <div class="tab left">
                        <a class="glyphicon glyphicon-envelope" href="#"></a>
                        <span class="h-tab-s">Message</span>
                    </div>
                    <div id="userSettingBtn" class="tab left pos-rel" data-state="0">
                        <a class="glyphicon glyphicon-user" href="#"></a>
                        <span class="h-tab-s">Setting</span>
                        <div id="userSetting">
                            <ul>
                                <li class="mar-tb-10">
                                    <span class="glyphicon glyphicon-cog"></span>
                                    <span class="mar-l-10"><a href="#" class="h-user-s-a">Account</a></span>
                                </li>
                                <li class="mar-tb-10">
                                    <span class="glyphicon glyphicon-question-sign"></span>
                                    <span class="mar-l-10"><a href="#" class="h-user-s-a">Help</a></span>
                                </li>
                                <li class="mar-tb-10">
                                    <span class="glyphicon glyphicon-off"></span>
                                    <span class="mar-l-10"><a href="/logout" class="h-user-s-a">Logout</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } else { ?>

                <?php } ?>
            </div>
            <div class="h-nav" id="navBtn" data-state="0">
                <span class="glyphicon glyphicon-th-large"></span>
            </div>
        </div>
    </div>
</div>