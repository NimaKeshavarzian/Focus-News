<?php 
function getPostInfo() {
    return get_the_author()." | ".get_the_date()." | ".get_the_time();
} 
?>