<?php
if (post_password_required()) {
    return;
}
comment_form();

if (have_comments()) : ?>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e('Comment navigation', 'twentyfourteen'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentyfourteen')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentyfourteen')); ?></div>
        </nav><!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation. 
    ?>

    <ol class="comment-list">
        <?php
        wp_list_comments(
            array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 40,
            )
        );
        ?>
    </ol><!-- .comment-list -->

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e('Comment navigation', 'twentyfourteen'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentyfourteen')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentyfourteen')); ?></div>
        </nav><!-- #comment-nav-below -->
    <?php endif; // Check for comment navigation. 
    ?>

<?php endif; // have_comments() 
?>