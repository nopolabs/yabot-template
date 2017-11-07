<?php
return [
    'slack.token' => getenv('SLACK-TOKEN'),
    'storage.dir' => 'storage',
    'log.file' => 'logs/bot.log',
    'log.name' => 'bot',
    'log.level' => 'DEBUG',
    'guzzle.config' => [
        'timeout' => 5,
    ],
];
