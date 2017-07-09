<?php

namespace MyPackage;

use Nopolabs\Test\MockWithExpectationsTrait;
use Nopolabs\Yabot\Message\Message;
use PHPUnit\Framework\TestCase;

class HelloPluginTest extends TestCase
{
    use MockWithExpectationsTrait;

    public function testHello()
    {
        $plugin = new HelloPlugin();
        $plugin->init('testHello', []);

        $msg = $this->newPartialMockWithExpectations(Message::class, [
            ['getUsername', ['result' => 'test']],
            ['reply', ['params' => ['hello <@test>']]],
        ]);

        $plugin->hello($msg);
    }

    public function testBonjour()
    {
        $plugin = new HelloPlugin();
        $plugin->init('testHello', ['hello' => 'bonjour']);

        $msg = $this->newPartialMockWithExpectations(Message::class, [
            ['getUsername', ['result' => 'test']],
            ['reply', ['params' => ['bonjour <@test>']]],
        ]);

        $plugin->hello($msg);
    }
}