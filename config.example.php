<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

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
    LoggerInterface::class => fn($c) => (new Logger('app'))->pushHandler(
        new StreamHandler(STDERR, $c->get('logLevel'))
    ),
];
