<?php
if (post_password_required()) return;
comment_form();
while (have_comments()) {
    the_comment();
?>
    <div class="comment">
        <div class="commentHeader">
            <div class="profileAvatar">
                <img src="<?php echo get_avatar_url(get_comment_ID());  ?>" alt="نظر">
                <?php  ?>
            </div>
            <div class="profileName">
                <h1><?php comment_author(); ?></h1>
            </div>
            <div class="commentDate">
                <h2><?php echo get_comment_date() . " | " . get_comment_time(); ?></h2>
            </div>
        </div>
        <div class="commentContent">
            <p><?php comment_text(); ?></p>
        </div>
        <div class="reply">
            <a href="<?php echo "?replytocom=".get_comment_ID()."#respond"; ?>">
                <button>پاسخ</button>
            </a>
        </div>
    </div>
<?php
}
?>