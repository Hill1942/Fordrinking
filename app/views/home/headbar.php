
<div class="head-bar-c">
    <div class="head-bar">
        <div class="h-search left">
            <!--  -->
            <img class="h-search-img left" src="<?php echo \helpers\url::template_path() . 'assets/img/fordrinking-logo.png' ?>">
            <div class="h-search-item left">
                <input class="h-search-i" type="text" id="h-search-input">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </div>
        </div>
        <div class="h-user right">
            <div class="h-tab-row">
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
                    <div id="$userSettingBtn" class="tab left">
                        <a class="glyphicon glyphicon-user" href="#"></a>
                        <span class="h-tab-s">Setting</span>
                    </div>
                <?php } else { ?>

                <?php } ?>
            </div>
        </div>
    </div>
</div>