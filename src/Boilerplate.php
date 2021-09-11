<?php

namespace Uncode\Wordpress\Boilerplate;

use Uncode\Wordpress\Boilerplate\Core\Wordpress\DisableXmlRpc;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\RemoveEmojiScript;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\RemoveGenerator;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\RemovePingback;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\RemoveRsdLink;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\RemoveShortLink;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\RemoveWlwManifest;
use Uncode\Wordpress\Boilerplate\Core\Wordpress\DisablePluginUpdates;
use Uncode\Wordpress\Boilerplate\Core\Timber\Defaults as TimberDefaults;

class Boilerplate
{
    /**
     * Start the boilerplate bootstrap process.
     */
    public static function bootstrap()
    {
        DisableXmlRpc::run();
        RemoveEmojiScript::run();
        RemoveGenerator::run();
        RemovePingback::run();
        RemoveRsdLink::run();
        RemoveShortLink::run();
        RemoveWlwManifest::run();
        TimberDefaults::run();
        DisablePluginUpdates::run();
    }
}
