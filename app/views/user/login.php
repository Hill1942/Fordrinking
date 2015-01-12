<div class="login-c">
    <div class="login">
        <?php echo \core\error::display($error); ?>
        <form class="login-form" action='' method='post'>
            <div class="form-item" style="margin-bottom:1px">
                <input class="form-item-t" name="loginName" type="text" value="<?php echo $data['user'] ?>" placeholder="Username">
            </div>
            <div class="form-item">
                <input class="form-item-t" name="loginPass" type="password" placeholder="Password">
            </div>
            <div class="login-submit">
                <input class="login-btn" name="loginBtn" type="submit" value="Log in">
            </div>
        </form>

    </div>
</div>


