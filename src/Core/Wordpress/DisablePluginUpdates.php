<?php

namespace Uncode\Wordpress\Boilerplate\Core\Wordpress;

class DisablePluginUpdates
{
    /**
     * Disable Plugin Updates
     */
    public static function run()
    {
        add_filter('site_transient_update_plugins', '__return_false');
    }
}
