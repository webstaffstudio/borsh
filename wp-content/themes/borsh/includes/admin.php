<?php

// Admin functions here


/**
 * Change the login logo URL to point to the site's homepage
 */
function borsh_login_logo_url() {
    return home_url();
}
add_action('login_headerurl', 'borsh_login_logo_url');

/**
 * Change the login logo title attribute
 */
function borsh_login_logo_url_title() {
    return get_bloginfo('name');
}
add_action('login_headertext', 'borsh_login_logo_url_title');
