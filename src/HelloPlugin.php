<?php

namespace MyPackage;

use Nopolabs\Yabot\Message\Message;
use Nopolabs\Yabot\Plugin\PluginInterface;
use Nopolabs\Yabot\Plugin\PluginTrait;
use Psr\Log\LoggerInterface;

class HelloPlugin implements PluginInterface
{
    use PluginTrait;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->setLog($logger);
        $this->setConfig([
            'hello' => 'bonjour',
            'matchers' => ['hello' => "/^hello\\b/"],
        ]);
    }

    public function hello(Message $msg)
    {
        $hello = $this->get('hello');
        $msg->reply($hello.' <@'.$msg->getUsername().'>');
    }
}