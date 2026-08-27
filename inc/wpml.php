<?php
defined('ABSPATH') || exit;

/**
 * Resolve a page ID in the current language. Guarded so theme runs
 * without WPML active (per rule: WPML functions must be guarded).
 */
function spnkt_translated_id($object_id, $type = 'page') {
    if (!function_exists('apply_filters') || !has_filter('wpml_object_id')) {
        return $object_id;
    }
    return apply_filters('wpml_object_id', $object_id, $type, true);
}

function spnkt_current_lang() {
    if (function_exists('apply_filters') && has_filter('wpml_current_language')) {
        return apply_filters('wpml_current_language', null);
    }
    return substr(get_locale(), 0, 2);
}
