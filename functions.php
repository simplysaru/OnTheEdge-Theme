<?php
 
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
 
// ADD YOUR CODE HERE

// remove the CSS for Colors from the HTML (if you want to load it via child theme instead)
 
function favepersonal_remove_inline_color_css() {
remove_action('wp_head', 'cfcp_color_css_min', 8);
}
add_action('wp', 'favepersonal_remove_inline_color_css', 11);