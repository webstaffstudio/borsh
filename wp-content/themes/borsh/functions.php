<?php
//Define text domain name
define('THEME_TD', 'borsh');
define('THEME_VER', '1.00');
define('THEME_ROOT', get_template_directory());
define('THEME_ROOT_URI', get_template_directory_uri());


$files = [
    'utilities.php',
    'configure.php',
    'js-css.php',
    'shortcodes.php',
    'acf.php',
];

foreach ($files as $file) {
    require_once __DIR__.'/includes/' . $file;
}

if (is_admin()) {
    require_once __DIR__.'/includes/admin.php';
}


