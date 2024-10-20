<?php


namespace InertiaPress\Route;

use InertiaPress\Config\Config;

class Router {

    function __construct($path, $callback, $method) {
        $condition = $this->getCurrentCondition($path);


        if ($this->validateCondition($condition)) {
            if ($this->checkCurrentMethod($method)) {
                call_user_func($callback);
                die();
            }
        } else {
            if ($this->checkIfCurrentUrlIsPath($path)) {
                if ($this->checkCurrentMethod($method)) {
                    call_user_func($callback);
                    http_response_code(200);
                    die();
                }
            }
        }
    }

    function checkIfCurrentUrlIsPath($path) {
        global $wp;
        return home_url($wp->request) === home_url($path);
    }

    function checkCurrentMethod($method) {
        return strtolower($_SERVER['REQUEST_METHOD']) === $method;
    }

    function getCurrentCondition($path) {
        $conditions = $this->getConditions();
        $currentConditions = "";

        foreach ($conditions as $key => $value) {
            if (is_array($value)) {
                if (in_array($path, $value)) $currentConditions = $key;
            } else {
                if ($value === $path) $currentConditions = $key;
            }
        }

        return $currentConditions;
    }

    function getConditions() {
        return Config::getRoutes();
    }

    function validateCondition($condition) {
        if (function_exists($condition)) return call_user_func($condition);
        return false;
    }
}
