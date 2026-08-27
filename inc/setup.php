<?php
defined('ABSPATH') || exit;

function spnkt_theme_setup() {
    load_theme_textdomain('spnkt', get_template_directory() . '/languages');

    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'script', 'style']);

    register_nav_menus([
        'primary' => __('Hauptmenü', 'spnkt'),
        'footer'  => __('Footer-Menü', 'spnkt'),
    ]);

    add_image_size('spnkt-card', 600, 400, true);
    add_image_size('spnkt-hero', 1600, 900, true);
}
add_action('after_setup_theme', 'spnkt_theme_setup');

/**
 * Skip link + WCAG 2.2 AA: correct landmark output.
 */
function spnkt_skip_link() {
    printf('<a class="spnkt-skip-link" href="#main">%s</a>', esc_html__('Zum Inhalt springen', 'spnkt'));
}
add_action('wp_body_open', 'spnkt_skip_link');
