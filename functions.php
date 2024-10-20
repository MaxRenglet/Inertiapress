<?php

/*
Theme Name: InertiaPress
Theme URI: https://theglitchers.be
Author: Maxime Renglet
Theme URI: https://theglitchers.be
Description: Wordpress theme with support for inertia.js with Vite & Tailwind
Text Domain: inertiapress
Domain Path: /languages
Version: v0.0.1
*/

use InertiaPress\Config\InertiaPress;

require __DIR__ . '/vendor/autoload.php';



$inertiaPress = new InertiaPress();
$inertiaPress->init();
$inertiaPress->enqueueAssets();
