<div class="post-c">
    <div class="post">
        <div class="post-user">
            <img class="post-user-img left" src="<?php echo $data['avatar']; ?>">
        </div>
        <div class="post-action">
            <div class="post-action-text">
                <span id="postTextAngle"></span>
                <textarea id="postText" class="post-a-text"></textarea>
            </div>
            <div class="post-action-bar">
                <div class="post-ab-l">
                    <div class="tab" id="postPictureBtn" data-target="#testModal">
                        <span class="glyphicon glyphicon-picture"></span>
                        <span class="post-ab-t">Picture</span>
                    </div>
                    <div class="tab" id="postSoundBtn">
                        <span class="glyphicon glyphicon-headphones"></span>
                        <span class="post-ab-t">Sound</span>
                    </div>
                    <div class="tab" id="postVideoBtn">
                        <span class="glyphicon glyphicon-facetime-video"></span>
                        <span class="post-ab-t">Video</span>
                    </div>
                </div>
                <div class="post-ab-r">
                    <button id="postSubmit">submit</button>
                </div>
            </div>
        </div>
    </div>
</div>