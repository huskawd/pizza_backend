<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use SavinMikhail\AddNamedArgumentsRector\AddNamedArgumentsRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withCache(
        cacheDirectory: __DIR__ . '/var/rector'
    )
    ->withRules([
        AddNamedArgumentsRector::class,
    ]);
