<?php

use Illuminate\Contracts\Foundation\Application;

/**
 * @returns array<string, bool>
 */
return static function (Application $app): array {
    return [
        'laravel.version' => false,
    ];
};
