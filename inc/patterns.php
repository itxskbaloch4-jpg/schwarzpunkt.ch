<?php
defined('ABSPATH') || exit;

function spnkt_register_patterns() {
    register_block_pattern_category('spnkt', ['label' => __('Schwarzpunkt', 'spnkt')]);

    $patterns = ['hero', 'marquee', 'services-grid', 'why-us', 'testimonials', 'cta-band'];
    foreach ($patterns as $slug) {
        $file = get_template_directory() . "/patterns/{$slug}.php";
        if (file_exists($file)) {
            register_block_pattern("spnkt/{$slug}", [
                'title'      => ucfirst(str_replace('-', ' ', $slug)),
                'categories' => ['spnkt'],
                'content'    => spnkt_load_pattern($file),
            ]);
        }
    }
}
add_action('init', 'spnkt_register_patterns');

function spnkt_load_pattern($file) {
    ob_start();
    include $file;
    return ob_get_clean();
}
