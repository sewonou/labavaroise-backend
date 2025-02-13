<?php
function disable_frontend_access() {
    if (!is_admin() && !wp_doing_ajax() && !defined('REST_REQUEST')) {
        wp_redirect('https://lapensionbavaroise.com'); // Remplace par ton URL cible
        exit;
    }
}
add_action('template_redirect', 'disable_frontend_access');
