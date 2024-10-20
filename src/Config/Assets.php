<?php

namespace InertiaPress\Config;

use Kucrut\Vite;

class Assets {

    function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    function enqueue() {
        Vite\enqueue_asset(
            get_stylesheet_directory() . '/dist/js',
            'main.ts',
            [
                'handle' => 'inertiapress-main',
                'dependencies' => ['react', 'react-dom', 'jquery', 'wp-api-fetch', 'lodash'],
                'css-dependencies' => [],
                'css-media' => 'all',
                'css-only' => false,
                'in-footer' => true,
            ]
        );
    }
}
