<?php

namespace Webdriver;

final class Device extends AbstractWebDriver
{

	protected function methods()
    {
        return array(
            'lock' => array( 'POST' ),
            'shake' => array( 'POST' ),
            'is_locked' => array( 'POST' ),
            'press_keycode' => array( 'POST' ),
            'long_press_keycode' => array( 'POST' ),
            'keyevent' => array( 'POST' ),
            'rotate' => array( 'POST' ),
            'current_activity' => array( 'GET' ),
            'install_app' => array( 'POST' ),
            'remove_app' => array( 'POST' ),
            'app_installed' => array( 'POST' ),
            'hide_keyboard' => array( 'POST' ),
            'pull_file' => array( 'POST' ),
            'push_file' => array( 'POST' ),
            'pull_folder' => array( 'POST' ),
            'toggle_airplane_mode' => array( 'POST' ),
            'toggle_data' => array( 'POST' ),
            'toggle_wifi' => array( 'POST' ),
            'toggle_location_services' => array( 'POST' ),
            'open_notifications' => array( 'POST' ),
        );
    }

}