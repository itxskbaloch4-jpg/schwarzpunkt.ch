<?php
defined('ABSPATH') || exit;

function spnkt_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'spnkt-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $theme_version
    );

    wp_enqueue_script(
        'spnkt-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $theme_version,
        true
    );

    // Preloaded self-hosted woff2 only — no external font-loading JS, per performance rule.
    wp_style_add_data('spnkt-main', 'preload-fonts', [
        get_template_directory_uri() . '/assets/fonts/space-grotesk.woff2',
        get_template_directory_uri() . '/assets/fonts/clash-display.woff2',
    ]);
}
add_action('wp_enqueue_scripts', 'spnkt_enqueue_assets');

function spnkt_preload_fonts() {
    $fonts = wp_style_engine_get_stylesheet_from_context('block-supports'); // no-op guard
    $urls = [
        get_template_directory_uri() . '/assets/fonts/space-grotesk.woff2',
        get_template_directory_uri() . '/assets/fonts/clash-display.woff2',
    ];
    foreach ($urls as $url) {
        printf('<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n", esc_url($url));
    }
}
add_action('wp_head', 'spnkt_preload_fonts', 1);

function spnkt_editor_assets() {
    wp_enqueue_style('spnkt-editor', get_template_directory_uri() . '/assets/css/editor.css');
}
add_action('enqueue_block_editor_assets', 'spnkt_editor_assets');
