<?php
// If you remove this. You might die.
define('FRAPI_CACHE_ADAPTER', 'dummy');

// Use the constant CUSTOM_MODEL to access the custom model directory
// IE: require CUSTOM_MODEL . DIRECTORY_SEPARATOR . 'ModelName.php';
// Or add an autolaoder if you are brave.

// Other data

defined('CUSTOM_LIBRARY') || define('CUSTOM_LIBRARY', CUSTOM_PATH. DIRECTORY_SEPARATOR . 'Library');
defined('CUSTOM_LIBRARY_FRAPI_PLUGINS') ||
    define('CUSTOM_LIBRARY_FRAPI_PLUGINS', CUSTOM_LIBRARY . DIRECTORY_SEPARATOR . 'Frapi' . DIRECTORY_SEPARATOR . 'Plugins');

define('URL_BASE', substr($_SERVER['PHP_SELF'],0,strpos($_SERVER['PHP_SELF'],'public/index.php') - 1).'/public');


