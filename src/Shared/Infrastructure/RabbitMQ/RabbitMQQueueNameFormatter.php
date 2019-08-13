<?php

declare(strict_types = 1);

namespace CodelyTv\Shared\Infrastructure\RabbitMQ;

final class RabbitMQQueueNameFormatter
{
    private const QUEUE_PREFIX = 'codelytv-php_ddd_skeleton';

    public static function format(string $name): string
    {
        return sprintf('%s.%s', self::QUEUE_PREFIX, $name);
    }
}
