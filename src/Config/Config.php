<?php


namespace InertiaPress\Config;

class Config {
    static public function getRoutes() {
        return require(get_stylesheet_directory() . '/config/routes.php');
    }
}
