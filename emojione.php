<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class EmojionePlugin extends Plugin
{
    public static function getSubscriptedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        // Autoload classes
        require_once __DIR__ . '/vendor/autoload.php';

        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ]);
    }

    public function onTwigExtensions()
    {
        require_once( __DIR__ . '/classes/TwigEmojione.php' );
        $client = new \Emojione\Client(new \Emojione\Ruleset());
        $twig_extension = new \Grav\Common\TwigEmojione($client);
        $this->grav['twig']->twig->addExtension($twig_extension);
    }
}
