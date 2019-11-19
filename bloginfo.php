<?php
/**
 * Plugin Bloginfo
 * php version 7.3
 * 
 * @category Plugin
 * @package  Bloginfo
 * @author   Marcos Rezende <rezehnde@gmail.com>
 * @license  GPLv2 or later
 * @link     https://rezehnde.com
 */

/*
Plugin Name: Bloginfo
Plugin URI: https://rezehnde.com/
Description: WordPress Bloginfo Shortcode
Version: 1.0
Author: Marcos Rezende
Author URI: https://www.linkedin.com/in/rezehnde/
*/

/**
 * GetWordPressFunction
 * 
 * @param string $atts WordPress Function Name
 * 
 * @return void
 */
function getWordPressBloginfo($atts)
{
    $fnc = '';
    if (count($atts)>0) {
        $fnc = $atts[0];
    }

    $return = '';
    if (!empty($fnc)) {
        $return = get_bloginfo($fnc);
    }
    return $return;
}
add_shortcode('bloginfo', 'getWordPressBloginfo');
?>