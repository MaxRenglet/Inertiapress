<?php

namespace InertiaPress\Config;

use BoxyBird\Inertia\Inertia;

class InertiaPress {

    function init() {
        add_action('wp', [$this, 'addRoute']);
        add_action('init', [$this, 'initInertia']);

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
        add_theme_support(
            'post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            )
        );
        add_theme_support('menus');
        add_theme_support('custom-logo');
    }

    function addRoute() {
        require(get_stylesheet_directory() . '/route.php');
    }

    function enqueueAssets() {
        new Assets();
    }

    function adminHead() {
        echo '<script>window.nonce = { nonce: "' . wp_create_nonce('wp_rest') . '", bb_ajax_nonce: "' . wp_create_nonce('bb_ajax_nonce') . '",}</script>';
    }

    function initInertia() {
        require(get_stylesheet_directory() . '/src/Inertia/functions.php');

        Inertia::setRootView('index.php');

        // $site = [
        //     'site' => [
        //         'name' => get_bloginfo('name'),
        //         'description' => get_bloginfo('description'),
        //         'url' => home_url(),
        //     ]
        // ];
        // Inertia::share($site);
    }
}
