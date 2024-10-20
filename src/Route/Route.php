<?php

namespace InertiaPress\Route;

class Route {
    static public function get($path, $callback) {
        new Router($path, $callback, 'get');
    }
    static public function post($path, $callback) {
        new Router($path, $callback, 'post');
    }
    static public function put($path, $callback) {
        new Router($path, $callback, 'put');
    }
    static public function delete($path, $callback) {
        new Router($path, $callback, 'delete');
    }
    static public function patch($path, $callback) {
        new Router($path, $callback, 'patch');
    }
    static public function options($path, $callback) {
        new Router($path, $callback, 'options');
    }
    static public function head($path, $callback) {
        new Router($path, $callback, 'head');
    }
}
