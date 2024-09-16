<?php
/*
Plugin Name: 404 UTM Notifier
Description: Sends an email to the admin when a 404 error occurs with UTM parameters present
Version: 1.0
Author: Mateusz Zadorożny
*/

class UTM_404_Notifier
{
    public function __construct()
    {
        add_action('template_redirect', array($this, 'check_404_and_utm'));
    }

    public function check_404_and_utm()
    {
        if (is_404()) {
            $utm_params = $this->get_utm_params();
            if (!empty($utm_params)) {
                $this->send_email_notification($utm_params);
            }
        }
    }

    private function get_utm_params()
    {
        $utm_params = array();
        $possible_params = array('utm_source', 'utm_medium', 'utm_campaign');

        foreach ($possible_params as $param) {
            if (isset($_GET[$param])) {
                $utm_params[$param] = sanitize_text_field($_GET[$param]);
            }
        }

        return $utm_params;
    }

    private function send_email_notification($utm_params)
    {
        $to = get_option('admin_email');
        $subject = '404 Error with UTM Parameters';
        $message = "A 404 error occurred with the following UTM parameters:\n\n";

        foreach ($utm_params as $key => $value) {
            $message .= "$key: $value\n";
        }

        $message .= "\nRequested URL: " . esc_url($_SERVER['REQUEST_URI']);

        wp_mail($to, $subject, $message);
    }
}

new UTM_404_Notifier();