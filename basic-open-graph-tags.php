<?php
/**
 * Plugin Name: Basic Open Graph Tags
 * Description: Adds basic Open Graph meta tags for better social media sharing.
 * Version: 1.0
 * Author: Shubham Sawarkar
 * Author URI: https://github.com/Shubham2D
 * License: MIT
 */

if (!defined('ABSPATH')) exit; // Prevent direct access

/**
 * Add Open Graph meta tags to the head section of WordPress pages.
 */
function add_basic_open_graph_tags() {
    if (is_singular()) : ?>
        <meta property="og:title" content="<?php echo esc_attr( get_the_title() ); ?>"/>
        <meta property="og:description" content="<?php echo esc_attr( get_the_excerpt() ); ?>"/>
        <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>"/>
        <meta property="og:type" content="article"/>
        <?php if ( has_post_thumbnail() ) : ?>
            <meta property="og:image" content="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"/>
        <?php endif; ?>
    <?php endif;
}
add_action('wp_head', 'add_basic_open_graph_tags');