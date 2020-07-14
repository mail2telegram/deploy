<?php

return [
    'botName' => 'MailProxyBot',
    'telegramToken' => 'XXX',
    'telegramLongPollingTimeout' => 10,
    'queueAmount' => 4,
    'cryptoKey' => 'XXX',
    'logLevel' => 'info',
    'redis' => [
        'host' => 'm2t_redis',
    ],
    'amqp' => [
        'host' => 'm2t_rabbitmq',
        'port' => '5672',
        'user' => 'guest',
        'pwd' => 'guest',
    ],
];
