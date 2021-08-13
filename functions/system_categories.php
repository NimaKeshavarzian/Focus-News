<?php
$categories = array("big-news", "recommended");
// Get Post Ids
$postIds = array();
while (have_posts()) {
    the_post();
    array_push($postIds, get_the_ID());
}
var_dump(wp_create_categories($categories, $postIds));
?>