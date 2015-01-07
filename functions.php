<?php

add_theme_support('automatic-feed-links');

add_filter('image_send_to_editor', 'img_tag_convert');
function img_tag_convert($html) {
    $html = "<figure>\n". $html. "\n<figcaption></figcaption>\n</figure>";
    $class = 'img-responsive';
    return str_replace('class="', 'class="'. $class. ' ', $html);
}

?>
