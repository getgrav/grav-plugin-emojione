<?php namespace Grav\Common;

use Grav\Common\Grav;

class TwigEmojione extends \Twig_Extension
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function getName()
    {
        return 'TwigEmojione';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('emojione', [$this, 'getEmojione'] )
        ];
    }

    public function getEmojione($content, $params = array())
    {
	    return $this->client->shortnameToImage($content);
    }
}
