<?php

// Utilities functions here

// Show formatted object or array
function debug($data, $write_in_log = false)
{
    @ini_set('display_errors', 0);

    if ($write_in_log) {
        echo '<pre>' . error_log(print_r($data, true)) . '</pre>';
    } else {
        echo '<pre>' . print_r($data, true) . '</pre>';
    }
}

function inline_svg($relative_path, $class = '') {
    $full_path = get_theme_file_path('assets/src/img/' . ltrim($relative_path, '/'));

    if (file_exists($full_path)) {
        $svg = file_get_contents($full_path);

        if ($svg !== false) {
            if ($class) {
                // Додаємо клас до першого відкриваючого тега <svg ...>
                $svg = preg_replace('/<svg\b([^>]*)>/i', '<svg$1 class="' . esc_attr($class) . '">', $svg, 1);
            }

            echo $svg;
        }
    }
}

