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