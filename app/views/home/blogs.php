<div class="blogs-c">
    <div class="blogs">
        <?php
        if($data['posts']){
            foreach($data['posts'] as $row){ ?>
            <div class="blog-item">
                <div class="blog-user">
                    <img class="post-user-img left" src="<?php echo \helpers\url::template_path() . 'assets/img/head.png'; ?>">
                </div>
                <div class="blog-c">
                    <div class="blog-title">
                        <div class="blog-username"><?php echo $row->user; ?></div>
                        <div class="blog-date"><?php echo $row->postDate; ?></div>
                    </div>
                    <div class="blog-body">
                        <?php echo $row->content; ?>
                    </div>
                    <div class="blog-footer">

                    </div>
                </div>
            </div>
        <?php
            }
        }
        ?>
    </div>
</div>